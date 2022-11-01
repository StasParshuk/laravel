<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;


    public function index(User $user, Order $order)
    {
        return $user->id === $order->status_id;
    }


    public function show(User $user, Order $order)
    {
        return $user->id === $order->status_id;
    }

    public function canceled(User $user, Order $order)
    {
        return $user->id === $order->status_id;
    }


}
