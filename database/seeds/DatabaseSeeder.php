<?php

use Illuminate\Database\Seeder;

use App\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Event::class,5)->create();
    }
}
