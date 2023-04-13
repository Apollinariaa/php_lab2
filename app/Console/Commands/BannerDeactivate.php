<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Banner;

class BannerDeactivate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'banner:deactivate {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes the value of the active field in the BD';


    public function handle()
    {
        $banner = Banner::findOrFail($this->argument('id'));
        if (!isset($banner)) {
            $this->info('Sorry,this banner is not!');
        } else {
            $banner->active = false;
            $banner->save();
            $this->info('OK! Banner deactivated:)');
        }
    }
}
