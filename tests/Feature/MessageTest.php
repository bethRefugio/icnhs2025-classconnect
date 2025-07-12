<?php
use Illuminate\Support\Facades\Event;
use App\Events\MessageSent;
use App\Models\Message;

class MessageTest extends TestCase
{
    public function test_message_creation_with_file(): void
    {
        $file = UploadedFile::fake()->create('document.pdf', 1000);
        $response = $this->postJson('/messages', [
            'conversation_id' => 1,
            'file' => $file,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('messages', [
            'conversation_id' => 1,
            'type' => 'file',
        ]);
    }

};