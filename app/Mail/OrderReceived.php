<?php

namespace WIT\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use WIT\Order;
use WIT\Cliente;

class OrderReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $orden;
    public $cliente;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $orden1)
    {
        $this->orden = $orden1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->cliente = Cliente::find($this->orden->user_id);
        return $this->view('mails.orders.received',compact('orden','cliente'));
    }
}
