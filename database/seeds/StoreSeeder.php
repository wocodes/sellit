<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Store::create([
            "name" => "Luxurists",
            "user_id" => 1,
            "logo" => "store_logos/DdE0V6OEWm9wrtK53krxdYdnAxDO8PC8UuMPzz78.png",
            "about" => "About Luxurists",
            "terms" => "Luxurists terms",
            "website" => "www.luxurists.com",
            "facebook" => "luxurists",
            "twitter" => "luxurists",
            "phone" => "07068535208",
            "email" => "luxurists@gmail.com",
            "instagram" => "luxurists",
        ]);
    }
}
