<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class create_blog_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'judul'       => 'edukasi',
            'isi'         => 'memberikan edukasi tentang teknologi',
            'created_at'  => Carbon::now();
            'updated_at'  => Carbon::now();
        ]);
    }
}
