<?php

namespace App\Mail\Novostroy;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormMeasurement extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public $date;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->date = now()->setTimezone('Europe/Moscow');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.Novostroy.measurement');
    }
}
