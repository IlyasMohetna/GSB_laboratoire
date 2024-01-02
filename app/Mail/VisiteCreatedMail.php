<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use PDF;

class VisiteCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $visite;

    public function __construct($visite)
    {
        $this->visite = $visite;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ordre de mission - Visite programmée',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.visite_created_delegue',
        );
    }

    public function build()
    {
        $pdf = PDF::loadView('pdf.ordre_de_mission', $this->visite->toArray());

        return $this->view('emails.visite_created_delegue')
            ->subject('TEST FROM ME')
            ->attachData($pdf->output(), 'ORDRE_MISSION_'.$this->visite->created_at->format('d-m-Y').'.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
