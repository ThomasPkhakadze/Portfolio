<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    $this->call([
        AboutsTableSeeder::class,
        ArticlesTableSeeder::class,
        FactsTableSeeder::class,
        IntrosTableSeeder::class,
        MenuItemsSeeder::class,
        SkillsSeeder::class,
        SliderSkillsSeeder::class,
        UsersTableSeeder::class,
        WorksSeeder::class,
    ]);

}
}
