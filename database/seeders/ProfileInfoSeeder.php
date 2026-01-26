<?php

namespace Database\Seeders;

use App\Models\ProfileInfo;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfileInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'gammaestu05@gmail.com')->first();

        if ($user) {
            ProfileInfo::create([
                'user_id' => $user->id,
                'bio' => "Hi, I'm Gamma Estu Mahardika, Decisions: If you can't decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).",
                'full_name' => 'Gamma Estu Mahardika',
                'mobile' => '(62) 812 3456 7890',
                'location' => 'Indonesia',
                'avatar' => 'https://i.pravatar.cc/120?img=12',
                'social_media' => [
                    'facebook' => 'https://facebook.com/gammaestu',
                    'twitter' => 'https://twitter.com/gammaestu',
                    'instagram' => 'https://instagram.com/gammaestu',
                ],
            ]);
        }
    }
}
