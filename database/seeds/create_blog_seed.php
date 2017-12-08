<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class create_blog_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'judul'       => 'workshop edukasi teknologi',
            'isi'         => 'sangat antusias yang tinggi dari para peserta, sehigga worksop ini sangat
            menyenangkan',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);
    }
}
