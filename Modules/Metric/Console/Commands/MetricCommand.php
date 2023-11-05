<?php

namespace Modules\Metric\Console\Commands;

use Illuminate\Console\Command;

class MetricCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MetricCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Metric Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
