<?php

namespace LaravelDevicesCollector;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Device
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $hwid
 * @property string $token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereHwid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereUpdatedAt($value)
 */
class Device extends Model
{
    protected $guarded = [];

    public static function byHwId(string $hwid)
    {
        return static::where('hwid', $hwid)->firstOrFail();
    }
}
