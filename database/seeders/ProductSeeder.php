<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Iphone 14',
            'price'=>'699',
            'category'=>'mobile',
            'description'=>'Latest iphone with all the features',
            'gallary'=>'https://imagineonline.store/cdn/shop/products/MPV03HN_A_1.jpg?v=1662718728'
            ],
            [
                'name'=>'Nothing Buds',
                'price'=>'299',
                'category'=>'Earbuds',
                'description'=>'Classy design earbuds',
                'gallary'=>'https://www.hardwarezone.com.sg/thumbs/696770/og.jpg'
            ],
            [
                'name'=>'Samsung S23',
                'price'=>'799',
                'category'=>'mobile',
                'description'=>'Latest samsung phone',
                'gallary'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH2EbAigaPTUA52fi5tGZuOU2lTPGhO_cl2DWJCk_YI_GoRG9IFWUVvAFIQ6ULWAsjPEw&usqp=CAU'
            ],
        ]);
    }
}
