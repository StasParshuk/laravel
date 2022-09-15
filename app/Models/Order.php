<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot("quantity", "single_price");
    }

    public function transaction()
    {
        return $this->belongsTo(Transactions::class);
    }


    public function inProcess(): Attribute
    {
        return new Attribute(
            get: fn() => $this->status->name === OrderStatusesEnum::InProcess->value
        );
    }
}
