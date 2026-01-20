@extends('layouts.app')

@section('title', 'Purity UI Tables')
@section('breadcrumb', 'Pages / Tables')
@section('page_heading', 'Tables')

@section('content')
    @php
        // UI-only dummy data (tanpa database)
        $authors = [
            ['avatar' => 'https://i.pravatar.cc/80?img=12', 'name' => 'Gamma Estu Mahardika', 'email' => 'gammaestu05@gmail.com', 'role' => 'Manager', 'dept' => 'Organization', 'status' => 'Online', 'employed' => '14/06/21'],
            ['avatar' => 'https://i.pravatar.cc/80?img=32', 'name' => 'Alexa Liras', 'email' => 'alexa@company.com', 'role' => 'Programmer', 'dept' => 'Developer', 'status' => 'Offline', 'employed' => '12/01/20'],
            ['avatar' => 'https://i.pravatar.cc/80?img=5', 'name' => 'Laurent Perrier', 'email' => 'laurent@company.com', 'role' => 'Executive', 'dept' => 'Projects', 'status' => 'Online', 'employed' => '19/09/17'],
            ['avatar' => 'https://i.pravatar.cc/80?img=44', 'name' => 'Michael Levi', 'email' => 'michael@company.com', 'role' => 'Designer', 'dept' => 'UI/UX Design', 'status' => 'Online', 'employed' => '24/12/18'],
            ['avatar' => 'https://i.pravatar.cc/80?img=65', 'name' => 'Richard Gran', 'email' => 'richard@company.com', 'role' => 'Manager', 'dept' => 'Organization', 'status' => 'Offline', 'employed' => '04/10/19'],
            ['avatar' => 'https://i.pravatar.cc/80?img=21', 'name' => 'Mark Wilson', 'email' => 'mark@company.com', 'role' => 'Programmer', 'dept' => 'Developer', 'status' => 'Offline', 'employed' => '01/03/22'],
        ];

        $projects = [
            ['logo' => asset('images/projects/xd.svg'), 'name' => 'Chakra Soft UI Version', 'budget' => '$14,000', 'status' => 'Working', 'completion' => 60],
            ['logo' => asset('images/projects/atlassian.svg'), 'name' => 'Add Progress Track', 'budget' => '$3,000', 'status' => 'Canceled', 'completion' => 10],
            ['logo' => asset('images/projects/slack.svg'), 'name' => 'Fix Platform Errors', 'budget' => 'Not set', 'status' => 'Done', 'completion' => 100],
            ['logo' => asset('images/projects/spotify.svg'), 'name' => 'Launch our Mobile App', 'budget' => '$32,000', 'status' => 'Done', 'completion' => 100],
            ['logo' => asset('images/projects/atlassian.svg'), 'name' => 'Add the New Pricing Page', 'budget' => '$400', 'status' => 'Working', 'completion' => 25],
            ['logo' => asset('images/projects/shopify.svg'), 'name' => 'Redesign New Online Shop', 'budget' => '$7,600', 'status' => 'Working', 'completion' => 40],
        ];
    @endphp

    <div class="space-y-6">
        <x-tables.card title="Authors Table" subtitle="See information about all members">
            <x-tables.authors :rows="$authors" />
        </x-tables.card>

        <x-tables.card title="Projects" subtitle="30 done this month">
            <x-tables.projects :rows="$projects" />
        </x-tables.card>
    </div>
@endsection


