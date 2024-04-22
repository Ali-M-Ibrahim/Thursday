<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DoJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:do-job {param1} {param2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is to write in log file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $parameter = $this->argument('param1');
        $parameter2 = $this->argument('param2');
        logger("this is my logs from command:  ".$parameter . "    " . $parameter2);
    }
}
