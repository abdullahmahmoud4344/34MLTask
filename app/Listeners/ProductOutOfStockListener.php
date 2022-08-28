<?php

namespace App\Listeners;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class ProductOutOfStockListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $product;
    public function __construct(Product $product)
    {
        $this->$product = $product;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle()
    {
        Mail::send('vendor.mail.html.message', function ($message) {
            $message->to('admin@34ml.com');
            $message->subject('New notification');
            $message->line('Product Out Of Stock' . $this->product->name);
        });
    }
}
