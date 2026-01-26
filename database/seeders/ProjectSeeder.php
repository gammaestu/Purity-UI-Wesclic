<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Chakra Soft UI Version',
                'logo' => asset('images/projects/xd.svg'),
                'budget' => '$14,000',
                'status' => 'Working',
                'completion' => 60,
                'members_count' => 4,
            ],
            [
                'name' => 'Add Progress Track',
                'logo' => asset('images/projects/atlassian.svg'),
                'budget' => '$3,000',
                'status' => 'Canceled',
                'completion' => 10,
                'members_count' => 2,
            ],
            [
                'name' => 'Fix Platform Errors',
                'logo' => asset('images/projects/slack.svg'),
                'budget' => 'Not set',
                'status' => 'Done',
                'completion' => 100,
                'members_count' => 3,
            ],
            [
                'name' => 'Launch our Mobile App',
                'logo' => asset('images/projects/spotify.svg'),
                'budget' => '$32,000',
                'status' => 'Done',
                'completion' => 100,
                'members_count' => 5,
            ],
            [
                'name' => 'Add the New Pricing Page',
                'logo' => asset('images/projects/atlassian.svg'),
                'budget' => '$400',
                'status' => 'Working',
                'completion' => 25,
                'members_count' => 2,
            ],
            [
                'name' => 'Redesign New Online Shop',
                'logo' => asset('images/projects/shopify.svg'),
                'budget' => '$7,600',
                'status' => 'Working',
                'completion' => 40,
                'members_count' => 4,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
