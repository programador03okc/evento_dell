<?php

namespace App\Mail;

use App\User;
use App\Models\Cliente;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReceptor extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Gracias por registrarte al sorteo';
    public $cliente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('messagereceptor');
    }
}
