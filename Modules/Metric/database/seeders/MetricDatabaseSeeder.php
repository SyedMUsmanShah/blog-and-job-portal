<?php

namespace Modules\Metric\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Metric;

class MetricDatabaseSeeder extends Seeder
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
         * Metrics Seed
         * ------------------
         */

        // DB::table('metrics')->truncate();
        // echo "Truncate: metrics \n";

        Metric::factory()->count(20)->create();
        $rows = Metric::all();
        echo " Insert: metrics \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
