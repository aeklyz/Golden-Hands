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
            'name' => 'Therapist 0',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Therapist 1',
            'email' => 'test1@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Therapist 2',
            'email' => 'test2@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Customer 0',
            'email' => 'a@gmail.com',
            'is_staff' => false,
        ]);

        User::factory()->create([
            'name' => 'Customer 0',
            'email' => 'a@gmail.com',
            'is_staff' => false,
        ]);        

        // Regular Massage
        DB::table('services')->insert([
            ['service_name' => 'Regular Massage', 'description' => 'A soothing and relaxing massage to relieve stress and tension.', 'price' => 500.00, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Swedish Massage', 'description' => 'A gentle, full-body massage aimed at relaxation and improved circulation.', 'price' => 500.00, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Combination Massage', 'description' => 'A blend of various massage techniques to address different needs and enhance relaxation.', 'price' => 600.00, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Foot and Hand Reflex', 'description' => 'Focused on relieving stress and promoting relaxation through reflex points in the feet and hands.', 'price' => 700.00, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
        ]);

        // Signature Massage
        DB::table('services')->insert([
            ['service_name' => 'Signature Massage', 'description' => 'A unique, customized massage that targets your specific needs.', 'price' => 600.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Hilot w/ Foot Reflex', 'description' => 'A traditional Filipino massage with foot reflexology for full-body relief.', 'price' => 800.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Deep Tissue Massage', 'description' => 'Targets deeper layers of muscle tissue to release chronic tension and pain.', 'price' => 900.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Shiatsu Massage', 'description' => 'A Japanese massage using finger pressure on specific points to restore balance and energy.', 'price' => 850.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Thai Massage', 'description' => 'A combination of massage and assisted yoga stretches to improve flexibility and relieve tension.', 'price' => 950.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Aromatherapy', 'description' => 'A relaxing massage using essential oils to promote emotional and physical well-being.', 'price' => 700.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Lymphatic Massage', 'description' => 'Stimulates the lymphatic system to enhance detoxification and reduce fluid retention.', 'price' => 900.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Baby Massage', 'description' => 'Gentle massage techniques designed to calm and soothe babies.', 'price' => 500.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Prenatal Massage', 'description' => 'A soothing massage for pregnant women to relieve tension and support overall well-being.', 'price' => 700.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Postnatal and Lactating Massage', 'description' => 'Designed to support new mothers by relieving stress and promoting milk production.', 'price' => 750.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
        ]);

        // Twin Massage
        DB::table('services')->insert([
            ['service_name' => 'Twin Regular Massage', 'description' => 'A pair of relaxing regular massages, ideal for couples or friends.', 'price' => 900.00, 'service_group' => 'regular_massage', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Twin Signature Massage', 'description' => 'A pair of signature massages with tailored techniques to suit both individuals.', 'price' => 1100.00, 'service_group' => 'signature_massage', 'image_path' => 'Service1.jpg'],
        ]);

        // Add Ons
        DB::table('services')->insert([
            ['service_name' => 'Hot Pack', 'description' => 'A warm compress to soothe sore muscles and enhance relaxation.', 'price' => 150.00, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Ear Candling', 'description' => 'A natural therapy to help clear the ears and promote relaxation.', 'price' => 250.00, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Hot Stone', 'description' => 'Heated stones applied to the body to promote deeper relaxation and muscle relief.', 'price' => 300.00, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
            ['service_name' => 'Ventosa', 'description' => 'Cupping therapy to improve blood flow and relieve muscle tension.', 'price' => 300.00, 'service_group' => 'add_on', 'image_path' => 'Service1.jpg'],
        ]);
    }
}
