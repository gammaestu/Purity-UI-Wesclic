<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'title' => '$2400, Design changes',
                'type' => 'bell',
                'color' => 'text-[#4FD1C5]',
                'order_date' => '2021-12-22 19:20:00',
            ],
            [
                'title' => 'New order #4219423',
                'type' => 'html',
                'color' => 'text-rose-500',
                'order_date' => '2021-12-21 23:21:00',
            ],
            [
                'title' => 'Server Payments for April',
                'type' => 'cart',
                'color' => 'text-[#4FD1C5]',
                'order_date' => '2021-12-21 21:28:00',
            ],
            [
                'title' => 'New card added for order #3210145',
                'type' => 'card',
                'color' => 'text-amber-400',
                'order_date' => '2021-12-20 15:52:00',
            ],
            [
                'title' => 'Unlock packages for Development',
                'type' => 'box',
                'color' => 'text-slate-800',
                'order_date' => '2021-12-19 23:35:00',
            ],
            [
                'title' => 'New order #9851258',
                'type' => 'xd',
                'color' => 'text-purple-500',
                'order_date' => '2021-12-18 16:41:00',
            ],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
