<?php

namespace App\Listeners;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;


class ProductOutOfStockListener implements ShouldQueue
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
            $message->to(env('ADMIN_EMAIL'));
            $message->subject('Product Out of Stock');
            $message->line('Product Out Of Stock' . $this->product->name);
        });
    }
}
