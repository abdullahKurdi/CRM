<?php

namespace App\Console;

use App\Console\Commands\DeleteReadNotifications;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected $commands =[
        DeleteReadNotifications::class
    ];

    protected function schedule(Schedule $schedule)
    {
         $schedule->command('read-notifications:delete')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
//        DeleteReadNotifications:class
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
