<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Project;

class TablesController extends Controller
{
    /**
     * Tampilkan halaman Tables.
     */
    public function index()
    {
        $authors = Author::orderBy('employed_date', 'desc')->get();
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('tables.index', compact('authors', 'projects'));
    }
}

