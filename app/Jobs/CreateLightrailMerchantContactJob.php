<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Model\Lightrail\Lightrail;

class CreateLightrailMerchantContactJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $merchant_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($merchant_id)
    {
        //
        $this->merchant_id = $merchant_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Lightrail::create_new_merchant_contact($this->merchant_id);
    }
}
