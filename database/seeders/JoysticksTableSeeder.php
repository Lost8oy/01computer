<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JoysticksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Joysticks')->delete();
        DB::table('Joysticks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bool_position' => 0,
                'position_id' => 2,
                'manufacturer_id' => 1,
                'inventory_number' => '01',
                'serial_number' => '42546464672772',
                'model' => 'Apple II',
                'year' => '1977',
                'description' => 'The Apple II is an 8-bit home computer and one of the world\'s first highly successful mass-produced microcomputer products.',
                'icon' => 'photo/img_0.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'bool_position' => 1,
                'position_id' => 1,
                'manufacturer_id' => 1,
                'inventory_number' => 'C0003',
                'serial_number' => 'VM138FLLR',
                'model' => 'Apple IMac',
                'year' => '2000',
                'description' => '',
                'icon' => 'photo/img_1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'bool_position' => 0,
                'position_id' => 2,
                'manufacturer_id' => 1,
                'inventory_number' => '01',
                'serial_number' => '42546464672772',
                'model' => 'Apple II',
                'year' => '1979',
                'description' => 'The Apple II is an 8-bit home computer and one of the world\'s first highly successful mass-produced microcomputer products.',
                'icon' => 'photo/img_2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'bool_position' => 1,
                'position_id' => 1,
                'manufacturer_id' => 1,
                'inventory_number' => 'C0003',
                'serial_number' => 'VM138FLLR',
                'model' => 'Apple IMac',
                'year' => '2010',
                'description' => '',
                'icon' => 'photo/img_2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'bool_position' => 0,
                'position_id' => 2,
                'manufacturer_id' => 1,
                'inventory_number' => '01',
                'serial_number' => '42546464672772',
                'model' => 'Apple II',
                'year' => '1986',
                'description' => 'The Apple II is an 8-bit home computer and one of the world\'s first highly successful mass-produced microcomputer products.',
                'icon' => 'photo/img_4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'bool_position' => 1,
                'position_id' => 1,
                'manufacturer_id' => 1,
                'inventory_number' => 'C0003',
                'serial_number' => 'VM138FLLR',
                'model' => 'Apple IMac',
                'year' => '1993',
                'description' => '',
                'icon' => 'photo/img_5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'bool_position' => 0,
                'position_id' => 2,
                'manufacturer_id' => 1,
                'inventory_number' => '01',
                'serial_number' => '42546464672772',
                'model' => 'Apple II',
                'year' => '1987',
                'description' => 'The Apple II is an 8-bit home computer and one of the world\'s first highly successful mass-produced microcomputer products.',
                'icon' => 'photo/img_6.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'bool_position' => 1,
                'position_id' => 1,
                'manufacturer_id' => 1,
                'inventory_number' => 'C0003',
                'serial_number' => 'VM138FLLR',
                'model' => 'Apple IMac',
                'year' => '1999',
                'description' => '',
                'icon' => 'photo/img_7.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'bool_position' => 0,
                'position_id' => 2,
                'manufacturer_id' => 1,
                'inventory_number' => '01',
                'serial_number' => '42546464672772',
                'model' => 'Apple II',
                'year' => '1987',
                'description' => 'The Apple II is an 8-bit home computer and one of the world\'s first highly successful mass-produced microcomputer products.',
                'icon' => 'photo/img_8.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'bool_position' => 1,
                'position_id' => 1,
                'manufacturer_id' => 1,
                'inventory_number' => 'C0003',
                'serial_number' => 'VM138FLLR',
                'model' => 'Apple IMac',
                'year' => '1999',
                'description' => '',
                'icon' => 'photo/img_9.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            )
        ));
    }
}
