<?php

namespace Database\Seeders;

use Mustang\Core\Loaders\SeederLoaderTrait;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    use SeederLoaderTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->runLoadingSeeders();
    }
}
