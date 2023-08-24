<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'tamil_name' => 'lars',
            'name' => 'lars',
            'url_slug' => 'lars',
            'seo_title' => 'lars',
            'description' => 'lars',
            'category_id' => '1',
            'price' => '1000',
            'image' => 'Tfc1Y3MnfsfPAU5WAfWozpu4QPh5Dy-metaaGluZHUtZGl3YWxpLWZlc3RpdmFsLWNyYWNrZXItYmFja2dyb3VuZF8xMDE3LTE1NTAxLndlYnA=-.webp',
        ]);
    }
}
