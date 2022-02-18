<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(200)->create();     
        $this->call(ElementsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
    }
}
