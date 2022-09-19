<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Address;
use App\Models\User;
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
         User::factory()->create([
             'id' => 'user689730634',
             'addressId'=> 'address241915941',
             'storeId'=> 'store790202756',
             'accountId'=> 'account790202756',
         ]);
    }
}
