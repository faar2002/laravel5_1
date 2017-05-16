<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,49)->create();
        factory(App\User::class)->create([
            'name' => 'Francisco A. Aponte R.',
            'email' => 'faar2002@gmail.com',
            'role' => 'superadmin'
        ]);
    }
}
