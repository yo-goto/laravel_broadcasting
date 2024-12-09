<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class OrderShipmentStatusUpdated implements ShouldBroadcast
{
    /**
     * 注文インスタンス
     *
     * @var \App\Models\Order
     */
    public $order;

    /**
     * イベントをブロードキャストするチャンネルを取得
     */
    public function broadcastOn(): Channel
    {
        return new PrivateChannel('orders.'.$this->order->id);
    }
}
