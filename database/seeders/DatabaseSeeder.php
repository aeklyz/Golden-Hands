<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'a@gmail.com',
        ]);

       // Regular Massage
        DB::table('services')->insert([
            ['service_name' => 'Regular Massage', 'description' => '', 'price' => 500.00, 'duration' => 60, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Regular Massage', 'description' => '', 'price' => 650.00, 'duration' => 90, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Regular Massage', 'description' => '', 'price' => 950.00, 'duration' => 120, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            
            ['service_name' => 'Swedish Massage', 'description' => '', 'price' => 500.00, 'duration' => 60, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Combination Massage', 'description' => '', 'price' => 600.00, 'duration' => 90, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Foot and Hand Reflex', 'description' => '', 'price' => 700.00, 'duration' => 90, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
        ]);

        // Signature Massage
        DB::table('services')->insert([
            ['service_name' => 'Signature Massage', 'description' => '', 'price' => 600.00, 'duration' => 60, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Signature Massage', 'description' => '', 'price' => 750.00, 'duration' => 90, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Signature Massage', 'description' => '', 'price' => 1100.00, 'duration' => 120, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            
            ['service_name' => 'Hilot w/ Foot Reflex', 'description' => '', 'price' => 800.00, 'duration' => 60, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Deep Tissue Massage', 'description' => '', 'price' => 900.00, 'duration' => 90, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Shiatsu Massage', 'description' => '', 'price' => 850.00, 'duration' => 90, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Thai Massage', 'description' => '', 'price' => 950.00, 'duration' => 120, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Aromatherapy', 'description' => '', 'price' => 700.00, 'duration' => 60, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Lymphatic Massage', 'description' => '', 'price' => 900.00, 'duration' => 90, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Baby Massage', 'description' => '', 'price' => 500.00, 'duration' => 60, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Prenatal Massage', 'description' => '', 'price' => 700.00, 'duration' => 90, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Postnatal and Lactating Massage', 'description' => '', 'price' => 750.00, 'duration' => 90, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
        ]);

        // Twin Massage
        DB::table('services')->insert([
            ['service_name' => 'Twin Regular Massage', 'description' => '', 'price' => 900.00, 'duration' => 60, 'service_group' => 'twin_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Twin Regular Massage', 'description' => '', 'price' => 1200.00, 'duration' => 90, 'service_group' => 'twin_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Twin Signature Massage', 'description' => '', 'price' => 1100.00, 'duration' => 60, 'service_group' => 'twin_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Twin Signature Massage', 'description' => '', 'price' => 1400.00, 'duration' => 90, 'service_group' => 'twin_massage', 'image_path' => 'Service1.jpg'],
        ]);

        // Add Ons
        DB::table('services')->insert([
            ['service_name' => 'Hot Pack', 'description' => '', 'price' => 150.00, 'duration' => 0, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Ear Candling', 'description' => '', 'price' => 250.00, 'duration' => 0, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Hot Stone', 'description' => '', 'price' => 300.00, 'duration' => 0, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Ventosa', 'description' => '', 'price' => 300.00, 'duration' => 0, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
        ]); 
    }
}
