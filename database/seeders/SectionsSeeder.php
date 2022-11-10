<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meta_data')->insert([
            [
                'meta_key' => 'HERO_SECTION_TITLE',
                'meta_value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'meta_key' => 'HERO_SECTION_DESCRIPTION',
                'meta_value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'meta_key' => 'HERO_SECTION_START_LINK',
                'meta_value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'meta_key' => 'HERO_SECTION_VIDEO_LINK',
                'meta_value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'meta_key' => 'HERO_SECTION_IMAGE',
                'meta_value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
