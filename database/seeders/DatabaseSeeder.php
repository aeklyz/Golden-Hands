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
            'is_admin'=> true,
        ]);

        User::factory()->create([
            'name' => 'Test User1',
            'email' => 'test1@example.com',
            'is_admin'=> false,
        ]);

        User::factory()->create([
            'name' => 'Test User3',
            'email' => 'test2@example.com',
            'is_admin'=> false,
        ]);

        DB::table('services')->insert([
            ['service_name' => 'Regular Massage', 'description' => '1 hour', 'price' => 500.00, 'duration' => 60, 'service_group' => 'regular_massage'],
            ['service_name' => 'Regular Massage', 'description' => '1.5 hour (FREE HOTPACK)', 'price' => 650.00, 'duration' => 90, 'service_group' => 'regular_massage'],
            ['service_name' => 'Regular Massage', 'description' => '2 hour (FREE HOTPACK OR EAR CANDLING)', 'price' => 950.00, 'duration' => 120, 'service_group' => 'regular_massage'],
            
            ['service_name' => 'Swedish Massage', 'description' => '', 'price' => 500.00, 'duration' => 60, 'service_group' => 'regular_massage'],
            ['service_name' => 'Combination Massage', 'description' => '', 'price' => 600.00, 'duration' => 90, 'service_group' => 'regular_massage'],
            ['service_name' => 'Foot and Hand Reflex', 'description' => '', 'price' => 700.00, 'duration' => 90, 'service_group' => 'regular_massage'],

        ]);
        
        // Signature Massage
        DB::table('services')->insert([
            ['service_name' => 'Signature Massage', 'description' => '1 hour', 'price' => 600.00, 'duration' => 60, 'service_group' => 'signature_massage'],
            ['service_name' => 'Signature Massage', 'description' => '1.5 hour (FREE HOTPACK)', 'price' => 750.00, 'duration' => 90, 'service_group' => 'signature_massage'],
            ['service_name' => 'Signature Massage', 'description' => '2 hour (FREE HOTPACK OR EAR CANDLING)', 'price' => 1100.00, 'duration' => 120, 'service_group' => 'signature_massage'],
            
            ['service_name' => 'Hilot w/ Foot Reflex', 'description' => '', 'price' => 800.00, 'duration' => 60, 'service_group' => 'signature_massage'],
            ['service_name' => 'Deep Tissue Massage', 'description' => '', 'price' => 900.00, 'duration' => 90, 'service_group' => 'signature_massage'],
            ['service_name' => 'Shiatsu Massage', 'description' => '', 'price' => 850.00, 'duration' => 90, 'service_group' => 'signature_massage'],
            ['service_name' => 'Thai Massage', 'description' => '', 'price' => 950.00, 'duration' => 120, 'service_group' => 'signature_massage'],
            ['service_name' => 'Aromatherapy', 'description' => '', 'price' => 700.00, 'duration' => 60, 'service_group' => 'signature_massage'],
            ['service_name' => 'Lymphatic Massage', 'description' => '', 'price' => 900.00, 'duration' => 90, 'service_group' => 'signature_massage'],
            ['service_name' => 'Baby Massage', 'description' => '', 'price' => 500.00, 'duration' => 60, 'service_group' => 'signature_massage'],
            ['service_name' => 'Prenatal Massage', 'description' => '', 'price' => 700.00, 'duration' => 90, 'service_group' => 'signature_massage'],
            ['service_name' => 'Postnatal and Lactating Massage', 'description' => '', 'price' => 750.00, 'duration' => 90, 'service_group' => 'signature_massage'],
        ]);
        
        // Twin Massage
        DB::table('services')->insert([
            ['service_name' => 'Twin Regular Massage', 'description' => '1 hour', 'price' => 900.00, 'duration' => 60, 'service_group' => 'twin_massage'],
            ['service_name' => 'Twin Regular Massage', 'description' => '1.5 hour', 'price' => 1200.00, 'duration' => 90, 'service_group' => 'twin_massage'],
            ['service_name' => 'Twin Signature Massage', 'description' => '1 hour', 'price' => 1100.00, 'duration' => 60, 'service_group' => 'twin_massage'],
            ['service_name' => 'Twin Signature Massage', 'description' => '1.5 hour', 'price' => 1400.00, 'duration' => 90, 'service_group' => 'twin_massage'],
        ]);
        
        // Add Ons
        DB::table('services')->insert([
            ['service_name' => 'Hot Pack', 'description' => '', 'price' => 150.00, 'duration' => 0, 'service_group' => 'add_on'],
            ['service_name' => 'Ear Candling', 'description' => '', 'price' => 250.00, 'duration' => 0, 'service_group' => 'add_on'],
            ['service_name' => 'Hot Stone', 'description' => '', 'price' => 300.00, 'duration' => 0, 'service_group' => 'add_on'],
            ['service_name' => 'Ventosa', 'description' => '', 'price' => 300.00, 'duration' => 0, 'service_group' => 'add_on'],
        ]);
    }
}
