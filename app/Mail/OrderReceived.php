<?php

namespace WIT\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use WIT\Order;
use WIT\Client;

class OrderReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $orden1)
    {
        $this->order = $orden1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.orders.received',compact('order'));
    }
}
