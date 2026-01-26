<?php

namespace App\Http\Controllers;

use App\Models\DashboardStat;
use App\Models\Order;
use App\Models\Project;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard utama.
     */
    public function index()
    {
        // Get dashboard stats
        $todaysMoney = DashboardStat::where('stat_key', 'todays_money')->first();
        $todaysUsers = DashboardStat::where('stat_key', 'todays_users')->first();
        $newClients = DashboardStat::where('stat_key', 'new_clients')->first();
        $totalSales = DashboardStat::where('stat_key', 'total_sales')->first();
        $activeUsers = DashboardStat::where('stat_key', 'active_users')->first();
        $clicks = DashboardStat::where('stat_key', 'clicks')->first();
        $sales = DashboardStat::where('stat_key', 'sales')->first();
        $items = DashboardStat::where('stat_key', 'items')->first();

        // Get projects
        $projects = Project::orderBy('created_at', 'desc')->limit(6)->get();

        // Get orders
        $orders = Order::orderBy('order_date', 'desc')->limit(6)->get();

        return view('dashboard.index', compact(
            'todaysMoney',
            'todaysUsers',
            'newClients',
            'totalSales',
            'activeUsers',
            'clicks',
            'sales',
            'items',
            'projects',
            'orders'
        ));
    }
}

