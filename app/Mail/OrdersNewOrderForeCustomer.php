<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrdersNewOrderForeCustomer extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(protected  int      $orderId,
                                protected string $full_name)
    {

    }

    public function build()
    {
        return $this->markdown('mail.order_create.customer')->with(["orderId" => $this->orderId,"full_name"=>$this->full_name]);
    }
}
