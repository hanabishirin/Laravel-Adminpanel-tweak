<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('cities')->delete();

        DB::table('cities')->insert(array (
            
                array (
                    'id' => 1,
                    'name' => 'Cloverdale',
                    'name_chi'=> '克洛弗代尔'
                ),


                array (
                    'id' => 2,
                    'name' => 'Bowen Island',
                    'name_chi'=> '宝云岛'
                ),

                array (
                    'id' => 3,
                    'name' => 'Burnaby',
                    'name_chi'=> '本拿比'
                ),

                array (
                    'id' => 4,
                    'name' => 'Coquitlam',
                    'name_chi'=> '高贵林'
                ),

                array (
                    'id' => 5,
                    'name' => 'Ladner',
                    'name_chi'=> '拉徳纳'
                ),

                array (
                    'id' => 6,
                    'name' => 'Maple Ridge',
                    'name_chi'=> '枫树岭'
                ),

                array (
                    'id' => 7,
                    'name' => 'North Vancouver',
                    'name_chi'=> '北温哥华'
                ),

                array (
                    'id' => 8,
                    'name' => 'New Westminster',
                    'name_chi'=> '新西敏'
                ),

                array (
                    'id' => 9,
                    'name' => 'Pitt Meadows',
                    'name_chi'=> '匹特草原'
                ),
            
                array (
                    'id' => 10,
                    'name' => 'Port Moody',
                    'name_chi'=> '满地宝'
                ),
            
                array (
                    'id' => 11,
                    'name' => 'Port Coquitlam',
                    'name_chi'=> '高贵林港'
                ),

                array (
                    'id' => 12,
                    'name' => 'Richmond',
                    'name_chi'=> '列治文'
                ),

                array (
                    'id' => 13,
                    'name' => 'Sunshine Coast',
                    'name_chi'=> '阳光海岸'
                ),

                array (
                    'id' => 14,
                    'name' => 'Halfmoon Bay',
                    'name_chi'=> '半月湾'
                ),

                array (
                    'id' => 15,
                    'name' => 'Squamish',
                    'name_chi'=> '斯阔米什'
                ),

                array (
                    'id' => 16,
                    'name' => 'Tsawwassen',
                    'name_chi'=> '措瓦森'
                ),

                array (
                    'id' => 17,
                    'name' => 'West Vancouver',
                    'name_chi'=> '西温哥华'
                ),

                array (
                    'id' => 18,
                    'name' => 'Whistler',
                    'name_chi'=> '惠斯勒'
                ),

                array (
                    'id' => 19,
                    'name' => 'Delta',
                    'name_chi'=> '三角洲'
                ),

                array (
                    'id' => 20,
                    'name' => 'Surrey',
                    'name_chi'=> '素里'
                ),

                array (
                    'id' => 21,
                    'name' => 'White Rock',
                    'name_chi'=> '白石'
                ),

                array (
                    'id' => 22,
                    'name' => 'Langley',
                    'name_chi'=> '兰里'
                ),

                array (
                    'id' => 23,
                    'name' => 'Abbotsford',
                    'name_chi'=> '阿伯斯福特'
                ),

                array (
                    'id' => 24,
                    'name' => 'Mission',
                    'name_chi'=> '米臣'
                ),

                array (
                    'id' => 25,
                    'name' => 'Hope',
                    'name_chi'=> '希望镇'
                ),

                array (
                    'id' => 26,
                    'name' => 'Chilliwack',
                    'name_chi'=> '奇利瓦克'
                ),

                array (
                    'id' => 27,
                    'name' => 'Vancouver',
                    'name_chi'=> '温哥华'
                ),

                array (
                    'id' => 28,
                    'name' => 'Agassiz',
                    'name_chi'=> '阿加西'
                ),

                array (
                    'id' => 29,
                    'name' => 'Rosedale',
                    'name_chi'=> '珀丽'
                ),

                array (
                    'id' => 31,
                    'name' => 'Britannia Beach',
                    'name_chi'=> '不列颠尼亚海滩'
                ),

                array (
                    'id' => 32,
                    'name' => 'Harrison Hot Springs',
                    'name_chi'=> '哈里森温泉'
                ),

                array (
                    'id' => 33,
                    'name' => 'Sardis',
                    'name_chi'=> '萨迪斯'
                ),

                array (
                    'id' => 34,
                    'name' => 'Roberts Creek',
                    'name_chi'=> '罗伯茨溪'
                ),

                array (
                    'id' => 35,
                    'name' => 'Yarrow',
                    'name_chi'=> '亚罗'
                ),

                array (
                    'id' => 36,
                    'name' => 'Gibsons',
                    'name_chi'=> '吉布森'
                ),

                array (
                    'id' => 37,
                    'name' => 'Columbia Valley',
                    'name_chi'=> '哥伦比亚谷'
                ),

                array (
                    'id' => 38,
                    'name' => 'Sechelt',
                    'name_chi'=> '色秋'
                ),

                array (
                    'id' => 39,
                    'name' => 'Anmore',
                    'name_chi'=> '安莫尔'
                ),


                array (
                    'id' => 40,
                    'name' => 'Aldergrove',
                    'name_chi'=> '奥尔德格罗夫'
                ),

                array (
                    'id' => 41,
                    'name' => 'Fort Langley',
                    'name_chi'=> '兰利堡'
                ),
                array (
                    'id' => 42,
                    'name' => 'White Rock',
                    'name_chi'=> '白石'
                ),
                array (
                    'id' => 43,
                    'name' => 'Pender Harbour',
                    'name_chi'=> '彭德港'
                ),
            array (
                'id' => 44,
                'name' => 'Other',
                'name_chi'=> '其他'
            ),
        ));
    }
}
