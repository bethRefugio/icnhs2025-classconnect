<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Message;
use App\Events\MessageSent;
use App\Events\MessageRead;

class MessageController
{
    public function store(Request $request): JsonResponse
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('chat-files', 'public');
            
            $message = Message::create([
                'conversation_id' => $request->conversation_id,
                'user_id' => auth()->id(),
                'content' => $path,
                'type' => 'file'
            ]);

            broadcast(new MessageSent($message, $message->conversation))->toOthers();
            
            return response()->json($message);
        }
        // ... handle normal (text) message creation here as well
    }

    public function markAsRead(Message $message): void
    {
        if ($message->user_id !== auth()->id()) {
            $message->update(['read_at' => now()]);
            broadcast(new MessageRead($message))->toOthers();
        }
    }

    public function sendMessage(Request $request, $userId)
        {
            $request->validate(['content' => 'required|string']);
            $message = Message::create([
                'user_id' => auth()->id(),
                'receiver_id' => $userId,
                'content' => $request->content,
                'type' => 'text'
            ]);
            // Optionally broadcast event here
            return redirect()->route('sidebar.chat', $userId);
        }


    
}