<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FishSeeder extends Seeder
{
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
          DB::table('fishes')->insert([
               ['name' => 'ハモ',
                'season' => '初夏～秋',
                'price' => '高',
                'eat' => '鍋、刺身、天ぷら',
                'habitat' => '西太平洋、インド洋の熱帯・温帯域',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'サケ',
                'season' => '秋～冬',
                'price' => '中',
                'eat' => '刺身・寿司（サーモン）、焼き',
                'habitat' => '北太平洋、北極海一部、日本海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'カレイ',
                'season' => '種により様々',
                'price' => '安',
                'eat' => '煮つけ、から揚げ',
                'habitat' => '日本近海、太平洋、インド洋、大西洋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'サバ',
                'season' => '秋～冬',
                'price' => '安',
                'eat' => '焼き、煮つけ',
                'habitat' => '亜熱帯、温帯海域、日本全域',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'マグロ',
                'season' => '冬',
                'price' => '中',
                'eat' => '刺身・寿司、揚げ',
                'habitat' => '太平洋、大西洋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'ウナギ',
                'season' => '秋～冬',
                'price' => '高',
                'eat' => '焼き、寿司、ひつまぶし',
                'habitat' => '熱帯の太平洋とインド洋、その沿岸に位置するアフリカや東南アジアの川や湖',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'ホッケ',
                'season' => '産地により様々',
                'price' => '安',
                'eat' => '焼き、干物、煮つけ',
                'habitat' => '北海道全沿岸、青森から山口の日本海沿岸、青森から熊野灘までの太平洋沿岸',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'ブリ',
                'season' => '冬',
                'price' => '中',
                'eat' => '刺身・寿司、焼き、煮つけ',
                'habitat' => '東シナ海から北はカムチャッカ半島、太平洋、南はハワイ沖',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'シシャモ',
                'season' => '秋',
                'price' => '安',
                'eat' => '焼き、揚げ',
                'habitat' => '北海道沿岸',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'サンマ',
                'season' => '秋',
                'price' => '安',
                'eat' => '焼き',
                'habitat' => '北太平洋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'アジ',
                'season' => '春～夏',
                'price' => '安',
                'eat' => '刺身、焼き、フライ',
                'habitat' => '北海道から東シナ海、熱帯・温帯海域',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'アナゴ',
                'season' => '夏',
                'price' => '中',
                'eat' => '焼き、煮つけ、天ぷら、寿司',
                'habitat' => '北海道南部以南の沿岸域、朝鮮半島、東シナ海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'カツオ',
                'season' => '春、秋',
                'price' => '安',
                'eat' => '刺身・寿司、たたき、竜田揚げ',
                'habitat' => '北太平洋、北極海一部、日本海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
         
               ['name' => 'タラ',
                'season' => '冬',
                'price' => '中',
                'eat' => '鍋、焼き',
                'habitat' => '寒帯・亜寒帯の冷たい海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
         
               ['name' => 'ハマチ',
                'season' => '秋～冬',
                'price' => '中',
                'eat' => '刺身・寿司、焼き',
                'habitat' => '日本列島の沿岸から東シナ海にかけて',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'タイ',
                'season' => '春、秋',
                'price' => '中',
                'eat' => '刺身・寿司、焼き',
                'habitat' => '太平洋の日本列島各地の沿岸と北海道以南の日本海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'カンパチ',
                'season' => '夏',
                'price' => '中',
                'eat' => '刺身、焼き、カルパッチョ',
                'habitat' => '世界中の温帯から熱帯の海域',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'キス',
                'season' => '夏',
                'price' => '中',
                'eat' => '天ぷら',
                'habitat' => '南アフリカから日本、オーストラリアにかけてのインド洋および西部太平洋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'ノドグロ',
                'season' => '冬～春',
                'price' => '高',
                'eat' => '刺身、焼き、煮つけ',
                'habitat' => '青森から九州南岸の日本海側・及び東シナ海沿岸、北海道から九州南岸の太平洋側',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'イワシ',
                'season' => '種により様々',
                'price' => '安',
                'eat' => '焼き、フライ',
                'habitat' => '世界全域の海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'アユ',
                'season' => '夏',
                'price' => '中',
                'eat' => '焼き',
                'habitat' => '北海道・朝鮮半島からベトナム北部まで東アジア一帯',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'フグ',
                'season' => '秋～冬',
                'price' => '高',
                'eat' => '刺身、鍋、から揚げ',
                'habitat' => '全世界の熱帯から温帯',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'ヒラメ',
                'season' => '秋～冬',
                'price' => '中',
                'eat' => '刺身・寿司、煮つけ',
                'habitat' => '沖縄を除く日本全域',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'カワハギ',
                'season' => '夏、秋～冬',
                'price' => '中',
                'eat' => '刺身、煮つけ',
                'habitat' => '北海道から九州南岸までの日本各地',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'スズキ',
                'season' => '夏、秋～冬',
                'price' => '中',
                'eat' => '刺身、焼き、煮つけ',
                'habitat' => '日本国内から朝鮮半島、中国辺りまで',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'アンコウ',
                'season' => '冬',
                'price' => '中',
                'eat' => '鍋',
                'habitat' => '北海道以南のインド・西太平洋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'コハダ',
                'season' => '夏～初秋',
                'price' => '中',
                'eat' => '寿司、煮つけ',
                'habitat' => '東アジアの内湾',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'クロダイ',
                'season' => '秋～春',
                'price' => '中',
                'eat' => '焼き、煮つけ',
                'habitat' => '日本（北海道南部の以南）、朝鮮半島、台湾',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'ボラ',
                'season' => '秋～冬',
                'price' => '中',
                'eat' => '刺身、煮つけ、卵巣（カラスミとして）',
                'habitat' => '全世界の熱帯・温帯の海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
               ['name' => 'タチウオ',
                'season' => '夏～秋',
                'price' => '中',
                'eat' => '刺身、焼き',
                'habitat' => '北海道から九州までの国内、朝鮮半島、中国沿岸',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ],
         
         
         ]);
        
        
    }
}
