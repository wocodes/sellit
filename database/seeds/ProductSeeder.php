<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            "name" => "Captain Black Gold",
            "store_id" => 1,
            "image" => "products/wzVA2OTsrL5spyDiqrK58TWVMGg2d3LHPY4B6WYM.jpg",
            "slug" => \Illuminate\Support\Str::slug("Captain Black Gold"),
            "primary_description" => "Super cool spirit from the staples of",
            "secondary_description" => "Super cool spirit from the staples of",
            "jumia_product_link" => "https://www.jumia.com.ng/behringer-u-phoria-umc22-2x2-usb-audio-interface-sound-card-76515118.html",
            "konga_product_link" => "https://www.jumia.com.ng/behringer-u-phoria-umc22-2x2-usb-audio-interface-sound-card-76515118.html",
            "amount" => 12000.00,
        ]);
    }
}
