<?php

namespace WIT\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use WIT\Order;
use WIT\Client;

class ReceivedOrderAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Client $c1)
    {
        $this->client = $c1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.orders.receivedadmin',compact('client'));
    }
}
