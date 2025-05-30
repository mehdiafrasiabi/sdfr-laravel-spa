<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            CategoriesTableSeeder::class,
            CategoryFeaturesTableSeeder::class,
            ProductsTableSeeder::class,
            ProductImagesTableSeeder::class,
            SeoItemsTableSeeder::class,
            ContactUsTableSeeder::class,
            PaymentMethodsTableSeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}
