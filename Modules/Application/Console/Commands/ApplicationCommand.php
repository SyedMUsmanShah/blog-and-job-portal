<?php

namespace Modules\Application\Console\Commands;

use Illuminate\Console\Command;

class ApplicationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ApplicationCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Application Command description';

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
