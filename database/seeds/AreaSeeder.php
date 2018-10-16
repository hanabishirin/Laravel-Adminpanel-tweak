<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('areas')->delete();

        DB::table('areas')->insert(array (

            array (
                'id' => 1,
                'city_id' => '1',
                'name' => 'Cloverdale',
                'name_chi'=> '克洛弗代尔'
            ),

            array (
                'id' => 2,
                'city_id' => '1',
                'name' => 'Burnaby East',
                'name_chi'=> '东本拿比'
            ),

            array (
                'id' => 3,
                'city_id' => '1',
                'name' => 'Burnaby North',
                'name_chi'=> '北本拿比'
            ),

            array (
                'id' => 4,
                'city_id' => '1',
                'name' => 'Burnaby South',
                'name_chi'=> '南本拿比'
            ),

            array (
                'id' => 5,
                'city_id' => '1',
                'name' => 'Coquitlam',
                'name_chi'=> '高贵林'
            ),

            array (
                'id' => 6,
                'city_id' => '1',
                'name' => 'Ladner',
                'name_chi'=> '拉徳纳'
            ),

            array (
                'id' => 7,
                'city_id' => '1',
                'name' => 'Maple Ridge',
                'name_chi'=> '枫树岭'
            ),

            array (
                'id' => 8,
                'city_id' => '1',
                'name' => 'North Vancouver',
                'name_chi'=> '北温哥华'
            ),

            array (
                'id' => 9,
                'city_id' => '1',
                'name' => 'New Westminster',
                'name_chi'=> '新西敏'
            ),

            array (
                'id' => 10,
                'city_id' => '1',
                'name' => 'Pemberton',
                'name_chi'=> ''
            ),

            array (
                'id' => 11,
                'city_id' => '1',
                'name' => 'Pitt Meadows',
                'name_chi'=> '匹特草原'
            ),

            array (
                'id' => 12,
                'city_id' => '1',
                'name' => 'Port Moody',
                'name_chi'=> '满地宝'
            ),

            array (
                'id' => 13,
                'city_id' => '1',
                'name' => 'Port Coquitlam',
                'name_chi'=> '高贵林港'
            ),

            array (
                'id' => 14,
                'city_id' => '1',
                'name' => 'Richmond',
                'name_chi'=> '列治文'
            ),

            array (
                'id' => 15,
                'city_id' => '1',
                'name' => 'Sunshine Coast',
                'name_chi'=> '阳光海岸'
            ),

            array (
                'id' => 16,
                'city_id' => '1',
                'name' => 'Squamish',
                'name_chi'=> '斯阔米什'
            ),

            array (
                'id' => 17,
                'city_id' => '1',
                'name' => 'Tsawwassen',
                'name_chi'=> '措瓦森'
            ),

            array (
                'id' => 18,
                'city_id' => '1',
                'name' => 'Vancouver East',
                'name_chi'=> '温哥华西'
            ),

            array (
                'id' => 19,
                'city_id' => '1',
                'name' => 'Vancouver West',
                'name_chi'=> '温哥华东'
            ),

            array (
                'id' => 20,
                'city_id' => '1',
                'name' => 'Whistler',
                'name_chi'=> '惠斯勒'
            ),

            array (
                'id' => 21,
                'city_id' => '1',
                'name' => 'West Vancouver',
                'name_chi'=> '西温哥华'
            ),

            array (
                'id' => 22,
                'city_id' => '1',
                'name' => 'N.Delta',
                'name_chi'=> '北三角洲'
            ),

            array (
                'id' => 23,
                'city_id' => '1',
                'name' => 'North Surrey',
                'name_chi'=> '北素里'
            ),
            array (
                'id' => 24,
                'city_id' => '1',
                'name' => 'Surrey',
                'name_chi'=> '素里'
            ),


            array (
                'id' => 25,
                'city_id' => '1',
                'name' => 'South Surrey White Rock',
                'name_chi'=> '南苏里和白石'
            ),

            array (
                'id' => 26,
                'city_id' => '1',
                'name' => 'Langley',
                'name_chi'=> '兰里'
            ),

            array (
                'id' => 27,
                'city_id' => '1',
                'name' => 'Abbotsford',
                'name_chi'=> '阿伯斯福特'
            ),

            array (
                'id' => 28,
                'city_id' => '1',
                'name' => 'Mission',
                'name_chi'=> '米臣'
            ),

            array (
                'id' => 29,
                'city_id' => '1',
                'name' => 'Hope',
                'name_chi'=> '希望镇'
            ),

            array (
                'id' => 30,
                'city_id' => '1',
                'name' => 'Chilliwack',
                'name_chi'=> '奇利瓦克'
            ),

            array (
                'id' => 31,
                'city_id' => '1',
                'name' => 'Agassiz',
                'name_chi'=> '阿加西'
            ),

            array (
                'id' => 32,
                'city_id' => '1',
                'name' => 'Rosedale',
                'name_chi'=> '珀丽'
            ),

            array (
                'id' => 33,
                'city_id' => '1',
                'name' => 'Harrison Hot Springs',
                'name_chi'=> '哈里森温泉'
            ),

            array (
                'id' => 34,
                'city_id' => '1',
                'name' => 'Sardis',
                'name_chi'=> '萨迪斯'
            ),


            array (
                'id' => 35,
                'city_id' => '1',
                'name' => 'Yarrow',
                'name_chi'=> '亚罗'
            ),

            array (
                'id' => 36,
                'city_id' => '1',
                'name' => 'Bowen Island',
                'name_chi'=> '宝云岛'
            ),

            array (
                'id' => 37,
                'city_id' => '1',
                'name' => 'Others',
                'name_chi'=> '其他'
            ),
        ));
    }
}
