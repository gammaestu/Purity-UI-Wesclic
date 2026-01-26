<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            // Newest
            [
                'name' => 'Netflix',
                'transaction_date' => '2020-03-27 12:30:00',
                'amount' => 2500.00,
                'is_negative' => true,
                'category' => 'Newest',
            ],
            [
                'name' => 'Apple',
                'transaction_date' => '2020-03-27 04:30:00',
                'amount' => 2000.00,
                'is_negative' => false,
                'category' => 'Newest',
            ],
            // Yesterday
            [
                'name' => 'Stripe',
                'transaction_date' => '2020-03-26 13:45:00',
                'amount' => 750.00,
                'is_negative' => false,
                'category' => 'Yesterday',
            ],
            [
                'name' => 'HubSpot',
                'transaction_date' => '2020-03-26 12:30:00',
                'amount' => 1050.00,
                'is_negative' => false,
                'category' => 'Yesterday',
            ],
            [
                'name' => 'Webflow',
                'transaction_date' => '2020-03-26 05:00:00',
                'amount' => 400.00,
                'is_negative' => true,
                'category' => 'Yesterday',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
