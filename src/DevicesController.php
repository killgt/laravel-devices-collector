<?php


namespace LaravelDevicesCollector;


use App\Http\Controllers\Controller;

class DevicesController extends Controller
{
    public function store()
    {
        $device = Device::updateOrCreate(['hwid' => request('hwid')], request()->only(['token', 'name']));

        DeviceCreated::dispatch($device, request()->all());

        return [];
    }
}
