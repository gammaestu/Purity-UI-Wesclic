<?php

namespace Database\Seeders;

use App\Models\DashboardStat;
use Illuminate\Database\Seeder;

class DashboardStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'stat_key' => 'todays_money',
                'label' => "Today's Money",
                'value' => 53000.00,
                'change_percentage' => '+55%',
                'change_type' => 'positive',
            ],
            [
                'stat_key' => 'todays_users',
                'label' => "Today's Users",
                'value' => 2300.00,
                'change_percentage' => '+3%',
                'change_type' => 'positive',
            ],
            [
                'stat_key' => 'new_clients',
                'label' => 'New Clients',
                'value' => 3052.00,
                'change_percentage' => '-14%',
                'change_type' => 'negative',
            ],
            [
                'stat_key' => 'total_sales',
                'label' => 'Total Sales',
                'value' => 173000.00,
                'change_percentage' => '+8%',
                'change_type' => 'positive',
            ],
            [
                'stat_key' => 'active_users',
                'label' => 'Active Users',
                'value' => 32984.00,
                'change_percentage' => '+23',
                'change_type' => 'positive',
            ],
            [
                'stat_key' => 'clicks',
                'label' => 'Clicks',
                'value' => 2420000.00,
                'change_percentage' => null,
                'change_type' => null,
            ],
            [
                'stat_key' => 'sales',
                'label' => 'Sales',
                'value' => 2400.00,
                'change_percentage' => null,
                'change_type' => null,
            ],
            [
                'stat_key' => 'items',
                'label' => 'Items',
                'value' => 320.00,
                'change_percentage' => null,
                'change_type' => null,
            ],
        ];

        foreach ($stats as $stat) {
            DashboardStat::create($stat);
        }
    }
}
