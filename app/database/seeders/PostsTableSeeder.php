<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //post_id:1
        $param = [
            'user_id' => 1,
            'date' => '2021-04-26',
            'cook_type' => 1,
            'comment' => '朝ごはんに大根おろしのしらす和えつくった',
            'like_count' => 0,
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'post_id' => 1,
            'url' => 'https://img.cpcdn.com/recipes/2199042/894x1461s/b85f5462cd16b2e9ff37e2cd0b431d78?u=5813114&p=1366551876',
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('post_images')->insert($param);

        $param = [
            'post_id' => 1,
            'url' => 'http://ari-chou-shirasu.jp/_include/img/item/teiban_01.jpg',
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('post_images')->insert($param);

        $param = [
            'post_id' => 1,
            'url' => 'http://ari-chou-shirasu.jp/_include/img/item/teiban_01_2.jpg',
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('post_images')->insert($param);

        //post_id:2
        $param = [
            'user_id' => 1,
            'date' => '2021-04-26',
            'cook_type' => 2,
            'comment' => 'お昼ごはんにハンバーグつくった',
            'like_count' => 1,
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'post_id' => 2,
            'url' => 'https://img.cpcdn.com/recipes/2262629/894x1461s/f5e3b4239747dabe722b50f443a825a6?u=309279&p=1408018894',
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('post_images')->insert($param);

        $param = [
            'post_id' => 2,
            'url' => 'https://housefoods.jp/_sys/catimages/recipe/hfrecipe/items/00022073/0.485-310.jpeg',
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('post_images')->insert($param);

        //post_id:3
        $param = [
            'user_id' => 1,
            'date' => '2021-04-26',
            'cook_type' => 3,
            'comment' => '夜ごはんにぶりの照焼つくった',
            'like_count' => 2,
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'post_id' => 3,
            'url' => 'https://www.kyounoryouri.jp/upfile/r/new_xl_14325_17780.jpg?bustcache=1528857102',
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('post_images')->insert($param);

        $param = [
            'user_id' => 1,
            'date' => '2021-04-27',
            'cook_type' => 1,
            'comment' => '朝ごはんはなにもつくらなかった',
            'like_count' => 3,
            'created_at' => '2022-04-23 12:48:35',
        ];
        DB::table('posts')->insert($param);

    }
}
