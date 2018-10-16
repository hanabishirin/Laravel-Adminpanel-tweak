<?php

use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('communities')->delete();

        DB::table('communities')->insert(array (

            array (
                'city_id' => 1,
                'name' => 'Cloverdale',
                'name_chi'=> '克洛弗代尔'
            ),


            array (
                'city_id' => 2,
                'name' => 'Bowen Island',
                'name_chi'=> '宝云岛'
            ),

            array (
                'city_id' => 3,
                'name' => 'Burnaby East',
                'name_chi'=> '东本拿比'
            ),

            array (
                'city_id' => 3,
                'name' => 'Burnaby North',
                'name_chi'=> '北本拿比'
            ),

            array (
                'city_id' => 3,
                'name' => 'Burnaby South',
                'name_chi'=> '南本拿比'
            ),

            array (
                'city_id' => 4,
                'name' => 'Coquitlam',
                'name_chi'=> '高贵林'
            ),

            array (
                'city_id' => 5,
                'name' => 'Ladner',
                'name_chi'=> '拉徳纳'
            ),

            array (
                'city_id' => 6,
                'name' => 'Maple Ridge',
                'name_chi'=> '枫树岭'
            ),

            array (
                'city_id' => 7,
                'name' => 'North Vancouver',
                'name_chi'=> '北温哥华'
            ),

            array (
                'city_id' => 8,
                'name' => 'New Westminster',
                'name_chi'=> '新西敏'
            ),

            array (
                'city_id' => 9,
                'name' => 'Pemberton',
                'name_chi'=> ''
            ),

            array (
                'city_id' => 9,
                'name' => 'Pitt Meadows',
                'name_chi'=> '匹特草原'
            ),

            array (
                'city_id' => 10,
                'name' => 'Port Moody',
                'name_chi'=> '满地宝'
            ),

            array (
                'city_id' => 11,
                'name' => 'Port Coquitlam',
                'name_chi'=> '高贵林港'
            ),

            array (
                'city_id' => 12,
                'name' => 'Richmond',
                'name_chi'=> '列治文'
            ),

            array (
                'city_id' => 13,
                'name' => 'Sunshine Coast',
                'name_chi'=> '阳光海岸'
            ),

            array (
                'city_id' => 15,
                'name' => 'Squamish',
                'name_chi'=> '斯阔米什'
            ),

            array (
                'city_id' => 16,
                'name' => 'Tsawwassen',
                'name_chi'=> '措瓦森'
            ),

            array (
                'city_id' => 17,
                'name' => 'Vancouver East',
                'name_chi'=> '温哥华西'
            ),

            array (
                'city_id' => 17,
                'name' => 'Vancouver West',
                'name_chi'=> '温哥华东'
            ),

            array (
                'city_id' => 18,
                'name' => 'Whistler',
                'name_chi'=> '惠斯勒'
            ),

            array (
                'city_id' => 17,
                'name' => 'West Vancouver',
                'name_chi'=> '西温哥华'
            ),

            array (
                'city_id' => 19,
                'name' => 'N.Delta',
                'name_chi'=> '北三角洲'
            ),

            array (
                'city_id' => 20,
                'name' => 'North Surrey',
                'name_chi'=> '北素里'
            ),
            array (
                'city_id' => 20,
                'name' => 'Surrey',
                'name_chi'=> '素里'
            ),


            array (
                'city_id' => 21,
                'name' => 'South Surrey White Rock',
                'name_chi'=> '南苏里和白石'
            ),

            array (
                'city_id' => 22,
                'name' => 'Langley',
                'name_chi'=> '兰里'
            ),

            array (
                'city_id' => 23,
                'name' => 'Abbotsford',
                'name_chi'=> '阿伯斯福特'
            ),

            array (
                'city_id' => 24,
                'name' => 'Mission',
                'name_chi'=> '米臣'
            ),

            array (
                'city_id' => 25,
                'name' => 'Hope',
                'name_chi'=> '希望镇'
            ),

            array (
                'city_id' => 26,
                'name' => 'Chilliwack',
                'name_chi'=> '奇利瓦克'
            ),

            array (
                'city_id' => 28,
                'name' => 'Agassiz',
                'name_chi'=> '阿加西'
            ),

            array (
                'city_id' => 29,
                'name' => 'Rosedale',
                'name_chi'=> '珀丽'
            ),

            array (
                'city_id' => 32,
                'name' => 'Harrison Hot Springs',
                'name_chi'=> '哈里森温泉'
            ),

            array (
                'city_id' => 33,
                'name' => 'Sardis',
                'name_chi'=> '萨迪斯'
            ),


            array (
                'city_id' => 35,
                'name' => 'Yarrow',
                'name_chi'=> '亚罗'
            ),

            array (
                'city_id' => 35,
                'name' => 'Others',
                'name_chi'=> '其他'
            ),
        ));
    }
}
