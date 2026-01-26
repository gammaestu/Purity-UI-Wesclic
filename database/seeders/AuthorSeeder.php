<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Gamma Estu Mahardika',
                'email' => 'gammaestu05@gmail.com',
                'avatar' => 'https://i.pravatar.cc/80?img=12',
                'role' => 'Manager',
                'department' => 'Organization',
                'status' => 'Online',
                'employed_date' => '2021-06-14',
            ],
            [
                'name' => 'Alexa Liras',
                'email' => 'alexa@company.com',
                'avatar' => 'https://i.pravatar.cc/80?img=32',
                'role' => 'Programmer',
                'department' => 'Developer',
                'status' => 'Offline',
                'employed_date' => '2020-01-12',
            ],
            [
                'name' => 'Laurent Perrier',
                'email' => 'laurent@company.com',
                'avatar' => 'https://i.pravatar.cc/80?img=5',
                'role' => 'Executive',
                'department' => 'Projects',
                'status' => 'Online',
                'employed_date' => '2017-09-19',
            ],
            [
                'name' => 'Michael Levi',
                'email' => 'michael@company.com',
                'avatar' => 'https://i.pravatar.cc/80?img=44',
                'role' => 'Designer',
                'department' => 'UI/UX Design',
                'status' => 'Online',
                'employed_date' => '2018-12-24',
            ],
            [
                'name' => 'Richard Gran',
                'email' => 'richard@company.com',
                'avatar' => 'https://i.pravatar.cc/80?img=65',
                'role' => 'Manager',
                'department' => 'Organization',
                'status' => 'Offline',
                'employed_date' => '2019-10-04',
            ],
            [
                'name' => 'Mark Wilson',
                'email' => 'mark@company.com',
                'avatar' => 'https://i.pravatar.cc/80?img=21',
                'role' => 'Programmer',
                'department' => 'Developer',
                'status' => 'Offline',
                'employed_date' => '2022-03-01',
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
