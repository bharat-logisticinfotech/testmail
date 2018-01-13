<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestActivity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Test Mail description';

    /**namespace App\Console\Commands;
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \Mail::send([], [], function ($message) {
            $message->to("bharat@logisticinfotech.co.in")->subject("Testing email-cron");
        });
        \Mail::send([], [], function ($message) {
            $message->to("admin@megathykom.com")->subject("Testing email-cron");
        });
    }
}
