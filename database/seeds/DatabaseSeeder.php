<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create(
            [
                'email' => 'ramzan@gmail.com',
                'name' => 'Ramzan'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'saad@gmail.com',
                'name' => 'Saad'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'waqas@gmail.com',
                'name' => 'Waqas'
            ]
        );
    }
}
