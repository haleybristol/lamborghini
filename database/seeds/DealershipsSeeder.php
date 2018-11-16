<?php

use App\Dealership;
use Illuminate\Database\Seeder;

class DealershipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dealerships = [
            [
                'store_name'    => 'Sq1 Lambos',
                'contact_name'  => 'Haley',
                'email'         => 'haley.bristol@sq1.com',
                'language'      => 'English',
                'phone'         => '3035035033',
                'address'       => '209 SW Oak St. Suite 100',
            ],
            [
                'store_name'    => 'Ansira Lambos',
                'contact_name'  => 'Jeremy',
                'email'         => 'jeremy.kenedy@sq1.com',
                'language'      => 'German',
                'phone'         => '3035035033',
                'address'       => '209 SW Oak St. Suite 600',
            ]
        ];

        foreach ($dealerships as $dealership) {
            $newDealer = Dealership::where('store_name', '=', $dealership['store_name'])->first();
            if ($newDealer === null) {
                $newDealer = Dealership::create([
                    'store_name'    => $dealership['store_name'],
                    'contact_name'  => $dealership['contact_name'],
                    'email'         => $dealership['email'],
                    'language'      => $dealership['language'],
                    'phone'         => $dealership['phone'],
                    'address'       => $dealership['address'],
                ]);
            }
        }
    }
}
