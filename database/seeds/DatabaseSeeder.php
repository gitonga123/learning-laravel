<?php

use Illuminate\Database\Seeder;

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
//       factory(App\Author::class, 50)->create();
//       factory(App\Publisher::class, 50)->create();
        //factory(App\Book::class, 50)->create();
        //factory(App\User::class, 50)->create();
//        factory(App\Item::class, 50)->create();
//        factory(App\Order::class, 50)->create();
//        factory(App\Invoice::class, 50)->create();

        factory(App\Account::class, 50)->create();
    }
}
