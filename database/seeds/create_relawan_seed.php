<?php

use Illuminate\Database\Seeder;

class create_relawan_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relawans')->insert([
          'nama'    => 'andi',
          'email'   => 'coba@coba.com',
          'hp'      => '085251123',
          'alamat'  => 'jl. sempaja',
        ]);
    }
}
