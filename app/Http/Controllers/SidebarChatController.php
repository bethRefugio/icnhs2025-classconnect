<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class SidebarChatController extends Controller
{
    public function sidebarChat(Request $request, $userId = null)
    {
        $users = User::where('id', '!=', auth()->id())->get();
        $selectedUser = $userId ? User::find($userId) : null;
        $messages = [];

        if ($selectedUser) {
            $messages = Message::where(function($q) use ($selectedUser) {
                $q->where('user_id', auth()->id())
                  ->where('receiver_id', $selectedUser->id);
            })->orWhere(function($q) use ($selectedUser) {
                $q->where('user_id', $selectedUser->id)
                  ->where('receiver_id', auth()->id());
            })->orderBy('created_at')->get();
        }

        // FIX: Return the chat view, not the sidebar partial
        return view('messages.chat', compact('users', 'selectedUser', 'messages'));
    }

    public function sendMessage(Request $request, $userId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $message = Message::create([
            'user_id' => auth()->id(),
            'receiver_id' => $userId,
            'content' => $request->content,
            'type' => 'text',
        ]);

        // Optionally broadcast event here

        return redirect()->route('sidebar.chat', $userId);
    }
}