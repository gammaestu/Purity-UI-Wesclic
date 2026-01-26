<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $invoices = [
            [
                'invoice_date' => '2020-03-01',
                'invoice_number' => '#MS-415646',
                'amount' => 180.00,
            ],
            [
                'invoice_date' => '2021-02-10',
                'invoice_number' => '#RV-126749',
                'amount' => 250.00,
            ],
            [
                'invoice_date' => '2020-04-05',
                'invoice_number' => '#QW-103578',
                'amount' => 120.00,
            ],
            [
                'invoice_date' => '2019-06-25',
                'invoice_number' => '#FB-212562',
                'amount' => 145.00,
            ],
            [
                'invoice_date' => '2019-03-01',
                'invoice_number' => '#AR-803481',
                'amount' => 300.00,
            ],
        ];

        foreach ($invoices as $invoice) {
            Invoice::create($invoice);
        }
    }
}
