<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;

class TranslateJob implements ShouldQueue
{
    use Queueable, InteractsWithQueue;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobListing)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Translating ' . $this->jobListing->title . ' to Spanish.');
    }
}
