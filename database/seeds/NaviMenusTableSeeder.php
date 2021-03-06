<?php

use Illuminate\Database\Seeder;
use Cake\I18n\Time;

class NaviMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        $now = Time::now();
        $naviMenus = [
            [
                'id' => $faker->uuid,
                'title' => 'SiteSetting',
                'code' => 'site_setting',
                'order' => 0,
                'visible' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => $faker->uuid,
                'title' => 'Menus',
                'code' => 'menu',
                'order' => 1,
                'visible' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => $faker->uuid,
                'title' => 'Articles',
                'code' => 'article',
                'order' => 2,
                'visible' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => $faker->uuid,
                'title' => 'Tags',
                'code' => 'tag',
                'order' => 2,
                'visible' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => $faker->uuid,
                'title' => 'Images',
                'code' => 'image',
                'order' => 4,
                'visible' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => $faker->uuid,
                'title' => 'Users',
                'code' => 'user',
                'order' => 5,
                'visible' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];
        DB::table('navi_menus')->insert($naviMenus);
    }
}
