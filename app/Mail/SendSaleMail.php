<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSaleMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details = [];

    /**
     * Create a new message instance.
     * @param $arDetails array Информация о сообщении.
     *
     * @return void
     */
    public function __construct($arDetails = [])
    {
        $this->details = $arDetails;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('WebVector - обращение с сайта.')->from('sale@web-vector.ru')
            ->view('emails.saleMail');
    }
}
