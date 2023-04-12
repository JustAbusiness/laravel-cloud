<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name" => 'Iphone 11',
                "details" => 'There are a variety of tools and frameworks available to you when building a web application',
                "description" => 'Docker is a tool for running applications and services in small, light-weight containers which do not interfere with your local machine installed software or configuration',
                "brand" => ' Apple',
                "price" => 20.24,
                "shipping_cost" => 5,
                "image_path" => 'https://images.unsplash.com/photo-1591337676887-a217a6970a8a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aXBob25lJTIwMTF8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',   
            ],
            [
                "name" => 'Samsung flip 21',
                "details" => 'Many web applications provide a way for their users to authenticate with the application and "login".',
                "description" => 'Implementing this feature in web applications can be a complex and potentially risky endeavor. For this reason, Laravel strives to give you the tools you need to implement authentication quickly, securely, and easily',
                "brand" => ' Samsung',
                "price" => 15.90,
                "shipping_cost" => 4,
                "image_path" => 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2Ftc3VuZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',   
            ]
            
        ];

        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}