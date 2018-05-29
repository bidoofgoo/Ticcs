<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
          'beschrijving' => 'patient'
      ]);
      DB::table('roles')->insert([
          'beschrijving' => 'dokter'
      ]);
      DB::table('roles')->insert([
          'beschrijving' => 'admin'
      ]);
    }
}
