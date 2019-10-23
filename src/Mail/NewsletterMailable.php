<?php

namespace Scaffolder\Newsletter\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsletterMailable extends Mailable {
    use Queueable, SerializesModels;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email){
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->markdown('newsletter::newsletter.email')->with(['email'=> $this->email]);
    }
}
