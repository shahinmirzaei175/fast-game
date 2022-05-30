<?php

namespace Modules\Game\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewCodeRequestInserted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $mobile;
    public $code;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($mobile,$code)
    {
        $this->mobile = $mobile;
        $this->code = $code;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
