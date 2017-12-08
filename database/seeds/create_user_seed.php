<?php

use Illuminate\Database\Seeder;

class create_user_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name'      => 'admin',
          'password'  => bcrypt('admin'),
          'email'     => 'admin@admin.com'
        ]);
    }
}
