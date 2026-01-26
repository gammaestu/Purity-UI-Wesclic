@extends('layouts.app')

@section('title', 'Purity UI Tables')
@section('breadcrumb', 'Pages / Tables')
@section('page_heading', 'Tables')

@section('content')
    <div class="space-y-6">
        <x-tables.card title="Authors Table" subtitle="See information about all members">
            <x-tables.authors :rows="$authors" />
        </x-tables.card>

        <x-tables.card title="Projects" subtitle="30 done this month">
            <x-tables.projects :rows="$projects" />
        </x-tables.card>
    </div>
@endsection


