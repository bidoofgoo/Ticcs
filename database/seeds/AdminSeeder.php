<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'id' => 'ikbenadmin:)',
          'name' => 'admin',
          'email' => 'admin@email.com',
          'role' => 3,
          'password' => bcrypt('ticc'),
      ]);
    }
}
