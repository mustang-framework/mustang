<?php

namespace App\Ship\Parents\Jobs;

use Mustang\Core\Abstracts\Jobs\Job as AbstractJob;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class Job
 *
 * A.K.A. (app/Jobs/Job.php)
 */
abstract class Job extends AbstractJob implements ShouldQueue
{
    /*
    |--------------------------------------------------------------------------
    | Queueable Jobs
    |--------------------------------------------------------------------------
    |
    | This job base class provides a central location to place any logic that
    | is shared across all of your jobs. The trait included with the class
    | provides access to the "onQueue" and "delay" queue helper methods.
    |
    */
}
