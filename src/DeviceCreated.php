<?php

namespace LaravelDevicesCollector;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class DeviceCreated
{
    use Dispatchable, SerializesModels;
    /**
     * @var Device
     */
    public $device;
    /**
     * @var array
     */
    public $request;

    /**
     * Create a new event instance.
     *
     * @param Device $device
     * @param array  $request
     */
    public function __construct(Device $device, array $request = [])
    {
        //
        $this->device = $device;
        $this->request = $request;
    }
}
