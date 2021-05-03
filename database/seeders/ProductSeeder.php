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
        //
        DB::table('products')->insert([
        [
            'name'=>'lg',
            'price'=>'1000',
            'category'=>'phone',
            'gallery'=>'https://pagedesignpro.com/wp-content/uploads/2018/03/71C6oLTvihL._SL1500_-1.jpg',
            'description'=>'hi this is gayathri phone'
        ],
        [
            'name'=>'lg1',
            'price'=>'1000',
            'category'=>'phone',
            'gallery'=>'https://pixfeeds.com/images/technology/phones/1280-458994239-nokia-mobile-phone.jpg',
            'description'=>'hi this is gayathri phone'
        ],
        [
            'name'=>'lg2',
            'price'=>'1000',
            'category'=>'phone',
            'gallery'=>'https://www.bigw.com.au/medias/sys_master/images/images/heb/hbb/12195168026654.jpg',
            'description'=>'hi this is gayathri phone'
        ],
        [
            'name'=>'lg3',
            'price'=>'1000',
            'category'=>'phone',
            'gallery'=>'https://www.bigw.com.au/medias/sys_master/images/images/heb/hbb/12195168026654.jpg',
            'description'=>'hi this is gayathri phone'
        ]

            
        ]);
    }
}
