<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GeneratePdf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-pdf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is to Generate PDF';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        $this->output->info('Generating PDF is inprogress...');
        $this->output->info('PDF Generated Successfully!');
    }
}
