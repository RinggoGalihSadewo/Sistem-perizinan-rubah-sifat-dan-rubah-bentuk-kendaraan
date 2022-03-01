<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Pengumuman extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->details['file']){
         return $this->subject('Pemberitahuan')
                ->view('client.pengumuman')
                ->attach($this->details['file']->getRealPath(), [

            'as' => $this->details['file']->getClientOriginalName()

        ]);           
        }
        else{
            return $this->subject('Pemberitahuan')
                ->view('client.pengumuman');
        }

    }
}
