<?php

namespace WIT\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use WIT\Order;

class OrderReceived extends Mailable
{
    use Queueable, SerializesModels;

    protected $orden;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $orden)
    {
        this->orden = $orden;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.orders.received')
                    ->with([
                        'orden_id' => $this->orden->orden_id,
                        'fecha' => $this->orden->fecha,
                        'descripcion' => $this->orden->descripcion
                        ]);
    }
}
