<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestMail2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mail send test using cron';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //$schedule->command('test:cron')->everyMinute();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        mail(env('TEST_MAIL_TO'),"Testing cron email - php mail function","contentn");
    }
}
