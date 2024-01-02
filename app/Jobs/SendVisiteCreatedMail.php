<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PDF;
use Mail;
use App\Mail\VisiteCreatedMail;

class SendVisiteCreatedMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $visite;

    /**
     * Create a new job instance.
     */
    public function __construct($visite)
    {
        $this->visite = $visite;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $pdf = PDF::loadView('pdf.ordre_de_mission', $this->visite->toArray());

        Mail::to('ilyas.mohetna.1@gmail.com')
            ->send(new VisiteCreatedMail($this->visite, $pdf));
    }
}
