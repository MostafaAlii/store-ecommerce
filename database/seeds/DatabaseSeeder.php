<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminDatabaseSeeder::class);
        $this->call(SettingDatabaseSeeder::class);
        $this->call(CategoryDatabaseSeeder::class);
        $this->call(SubCategoryDatabaseSeeder::class);
    }
}
