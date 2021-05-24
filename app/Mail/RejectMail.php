<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RejectMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $firstname,$lastname,$expensetitle,$rejectreason,$inspector;
    public function __construct( $firstname,$lastname,$expensetitle,$rejectreason,$inspector)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->expensetitle = $expensetitle;
        $this->rejectreason = $rejectreason;
        $this->inspector = $inspector;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('info@myexpense.be','MyExpense - Info')
            ->subject('Onkost Afgekeurd')
            ->markdown('email.rejectmail');
    }
}
