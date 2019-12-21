<?php

namespace Chuckbe\ChuckcmsTemplateBakr\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateBakrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateStarter\\seeds\\ChuckcmsTemplateStarterTableSeeder
        $fonts = [];
        $fonts['raw'] = 'Lato:100,200,300,400,500,600,700,800,900';
        
        $css = [];
        $css['bootstrap']['href'] = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
        $css['bootstrap']['asset'] = 'false';

        $css['custom']['href'] = 'chuckbe/chuckcms-template-bakr/css/custom.css';
        $css['custom']['asset'] = 'true';

        $css['bootstraptheme']['href'] = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css';
        $css['bootstraptheme']['asset'] = 'false';
        
        $js = []; 
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-bakr/js/app.js';
        $js['jquery']['asset'] = 'true';

        $json = [];

        // create template
        Template::updateOrCreate(
            ['slug' => 'chuckcms-template-bakr'],
            ['name' => 'ChuckCMS Template Starter',
            'hintpath' => 'chuckcms-template-bakr',
            'path' => 'chuckbe/chuckcms-template-bakr',
            'type' => 'default',
            'version' => '1.0',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1]
        );
    }
}
