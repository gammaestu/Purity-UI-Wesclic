<?php

namespace Database\Seeders;

use App\Models\BillingInfo;
use Illuminate\Database\Seeder;

class BillingInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $billingInfos = [
            [
                'name' => 'Oliver Liam',
                'company' => 'Viking Burrito',
                'email' => 'oliver@burrito.com',
                'vat_number' => 'FRB1235476',
            ],
            [
                'name' => 'Lucas Harper',
                'company' => 'Stone Tech Zone',
                'email' => 'lucas@stone.com',
                'vat_number' => 'FRB1235476',
            ],
            [
                'name' => 'Ethan James',
                'company' => 'Fiber Notion',
                'email' => 'ethan@fiber.com',
                'vat_number' => 'FRB1235476',
            ],
        ];

        foreach ($billingInfos as $info) {
            BillingInfo::create($info);
        }
    }
}
