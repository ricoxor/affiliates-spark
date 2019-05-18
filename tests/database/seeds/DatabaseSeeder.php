<?php

namespace KeithBrink\AffiliatesSpark\Tests\Database\Seeds;

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
        $this->call(UsersTableSeeder::class);
        $this->call(AffiliatePlansTableSeeder::class);
        $this->call(AffiliatesTableSeeder::class);
    }
}
