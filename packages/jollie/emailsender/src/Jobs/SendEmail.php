<?php

namespace Jollie\EmailSender\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Jollie\EmailSender\Mail\BasicEmail;
use Carbon\Carbon;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $address;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($address)
    {
        $this->address = $address;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $delay = Carbon::now()->addMinutes(1);

        Mail::to($this->address)->later($delay, new BasicEmail());

    }
}
