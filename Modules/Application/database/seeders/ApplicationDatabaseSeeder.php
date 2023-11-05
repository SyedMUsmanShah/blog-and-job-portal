<?php

namespace Modules\Application\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Application;

class ApplicationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Applications Seed
         * ------------------
         */

        // DB::table('applications')->truncate();
        // echo "Truncate: applications \n";

        Application::factory()->count(20)->create();
        $rows = Application::all();
        echo " Insert: applications \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
