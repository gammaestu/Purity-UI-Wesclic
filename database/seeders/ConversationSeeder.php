<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'gammaestu05@gmail.com')->first();

        if ($user) {
            $conversations = [
                [
                    'user_id' => $user->id,
                    'name' => 'Alec Thompson',
                    'avatar' => 'https://i.pravatar.cc/80?img=12',
                    'message' => 'Hi! I need more informations...',
                ],
                [
                    'user_id' => $user->id,
                    'name' => 'Alexa Liras',
                    'avatar' => 'https://i.pravatar.cc/80?img=32',
                    'message' => 'Awesome work, can you change...',
                ],
                [
                    'user_id' => $user->id,
                    'name' => 'Laurent Perrier',
                    'avatar' => 'https://i.pravatar.cc/80?img=44',
                    'message' => 'Have a great afternoon...',
                ],
                [
                    'user_id' => $user->id,
                    'name' => 'Michael Levi',
                    'avatar' => 'https://i.pravatar.cc/80?img=21',
                    'message' => 'About files I can...',
                ],
            ];

            foreach ($conversations as $conversation) {
                Conversation::create($conversation);
            }
        }
    }
}
