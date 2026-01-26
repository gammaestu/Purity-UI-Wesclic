<?php

namespace Database\Seeders;

use App\Models\PlatformSetting;
use App\Models\User;
use Illuminate\Database\Seeder;

class PlatformSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'gammaestu05@gmail.com')->first();

        if ($user) {
            $settings = [
                // Account group
                [
                    'user_id' => $user->id,
                    'group' => 'Account',
                    'label' => 'Email me when someone follows me',
                    'enabled' => true,
                ],
                [
                    'user_id' => $user->id,
                    'group' => 'Account',
                    'label' => 'Email me when someone answers my post',
                    'enabled' => false,
                ],
                [
                    'user_id' => $user->id,
                    'group' => 'Account',
                    'label' => 'Email me when someone mentions me',
                    'enabled' => true,
                ],
                // Application group
                [
                    'user_id' => $user->id,
                    'group' => 'Application',
                    'label' => 'New launches and projects',
                    'enabled' => false,
                ],
                [
                    'user_id' => $user->id,
                    'group' => 'Application',
                    'label' => 'Monthly product updates',
                    'enabled' => false,
                ],
                [
                    'user_id' => $user->id,
                    'group' => 'Application',
                    'label' => 'Subscribe to newsletter',
                    'enabled' => true,
                ],
            ];

            foreach ($settings as $setting) {
                PlatformSetting::create($setting);
            }
        }
    }
}
