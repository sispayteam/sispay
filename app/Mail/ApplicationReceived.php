<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationReceived extends Mailable
{
    public $data;
    public $cvPath;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $cvPath)
    {
        $this->data = $data;
        $this->cvPath = $cvPath;
    }

    public function build()
    {
        $mailable = $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject('Nouvelle candidature')
                    ->view('emails.application')
                    ->attach(
                        $this->cvPath,
                        [
                            'as' => basename($this->cvPath),
                            'mime' => mime_content_type($this->cvPath),
                        ]
                    );

        // Add reply-to to the applicant's email so responses go to them.
        if (!empty($this->data['email'])) {
            $mailable->replyTo($this->data['email'], $this->data['fullName'] ?? null);
        }

        return $mailable;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Application Received from site sispay',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
}
