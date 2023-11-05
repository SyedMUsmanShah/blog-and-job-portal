<?php

namespace Modules\Job\Console\Commands;

use Illuminate\Console\Command;

class JobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:JobCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Job Command description';

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
