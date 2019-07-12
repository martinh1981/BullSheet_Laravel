<?php

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
        factory(App\User::class, 20)->create();
        factory(App\FakeNew::class, 20)->create();
        factory(App\RealNew::class, 20)->create();
        factory(App\JudgeNew::class, 20)->create();
        factory(App\ChekNew::class, 20)->create();
    }
}
