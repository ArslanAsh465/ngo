<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('info_section')->insert([
            'about_us' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'heading' => 'Welcome to Our Website',
            'description' => 'We are committed to providing the best services and products to our customers. Our team of professionals is dedicated to excellence.',
            'box_1_heading' => 'Our Mission',
            'box_1_description' => 'To deliver quality services that exceed customer expectations.',
            'box_2_heading' => 'Our Vision',
            'box_2_description' => 'To be the leading provider in our industry by setting the highest standards of performance and innovation.',
            'box_3_heading' => 'Our Values',
            'box_3_description' => 'Integrity, Excellence, and Customer Focus.',
            'box_1_image' => 'mission-image.jpg',
            'box_2_image' => 'vision-image.jpg',
            'box_3_image' => 'values-image.jpg',
            'email' => 'info@example.com',
            'phone' => '+1234567890',
            'address' => '1234 Elm Street, Springfield, IL, USA',
            'footer_about' => 'Providing exceptional services since 2020.',
            'facebook_link' => 'https://facebook.com/example',
            'twitter_link' => 'https://twitter.com/example',
            'linkedin_link' => 'https://linkedin.com/company/example',
            'events_participated' => 100,
            'classes_completed' => 200,
            'awards_won' => 10,
            'student_enrolled' => 500,
        ]);
    }
}
