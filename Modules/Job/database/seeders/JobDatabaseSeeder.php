<?php

namespace Modules\Job\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Job;

class JobDatabaseSeeder extends Seeder
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
         * Jobs Seed
         * ------------------
         */

        // DB::table('jobs')->truncate();
        // echo "Truncate: jobs \n";

        Job::factory()->count(20)->create();
        $rows = Job::all();
        echo " Insert: jobs \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
