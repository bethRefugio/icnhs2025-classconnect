@extends('layouts.app', ['page' => __('Chats '), 'pageSlug' => 'messages', 'pageParent' => 'Chat'])


<x-app-layout>
    <div class="flex h-screen">
        {{-- Sidebar: User List --}}
        <div class="w-1/4 border-r overflow-y-auto p-4 bg-gray-50">
            <h6 class="font-bold mb-2">Chats</h6>
            <ul class="list-unstyled">
                @foreach($users as $user)
                    <li class="mb-1">
                        <a href="{{ route('chat.show', $user->id) }}"
                           class="flex items-center p-2 rounded {{ isset($selectedUser) && $selectedUser->id == $user->id ? 'bg-blue-100 font-bold text-blue-700' : '' }}">
                            <span class="avatar bg-secondary text-white rounded-full mr-2 flex items-center justify-center" style="width:32px;height:32px;">
                                {{ strtoupper(substr($user->name,0,1)) }}
                            </span>
                            <span>{{ $user->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Main Chat Area --}}
        <div class="flex-1 flex flex-col">
            <div class="flex-1 overflow-y-auto p-4 space-y-4" id="chat-messages">
                @if(isset($selectedUser))
                    @foreach($messages as $message)
                        <x-chat-message :message="$message" />
                    @endforeach
                @else
                    <div class="text-center text-gray-400 mt-10">Select a user to start chatting.</div>
                @endif
            </div>
            @if(isset($selectedUser))
                <div class="border-t p-4">
                    <form action="{{ route('chat.send', $selectedUser->id) }}" method="POST" class="flex space-x-2">
                        @csrf
                        <input type="text" name="content" class="flex-1 rounded-full border p-2" placeholder="Type your message..." autocomplete="off" required>
                        <button type="submit" class="bg-blue-500 text-white rounded-full px-6 py-2">Send</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>