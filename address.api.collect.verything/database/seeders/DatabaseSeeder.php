<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Address;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Address::factory()->create([
             'id' => 'address241915941',
             'title'=> 'bureau',
             'addressLine1'=> '15 route de manom',
             'addressLine2'=> '',
             'zipCode'=> '57100',
             'city'=> 'Thionville',
             'country'=> 'FR',
             'latitude'=> '46',
             'longitude'=> '8',
         ]);
    }
}
