<?php

namespace Chuckbe\ChuckcmsTemplateBakr\Commands;

use Chuckbe\ChuckcmsTemplateBakr\seeds\ChuckcmsTemplateBakrTableSeeder;
use Illuminate\Console\Command;

class PublishBakr extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-bakr:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Bakr template for ChuckCMS.';

    /**
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
        $seeder = new ChuckcmsTemplateBakrTableSeeder();
        $seeder->run();
        
        $this->info('Just a moment... ChuckCMS is generating your template.');

        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   BAKR  ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('ChuckCMS Template Starter published successfully');
        $this->info(' ');
        

        
    }
}
