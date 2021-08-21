<?php

namespace Weiwait\Distpicker\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class ChinaArea extends \Illuminate\Database\Eloquent\Model
{
    use HasDateTimeFormatter;

    public static function provinces()
    {
        return self::query()->where('level', 1)->get();
    }

    public static function cities()
    {
        return self::query()->where('level', 2)->get();
    }

    public static function districts()
    {
        return self::query()->where('level', 3)->get();
    }
}
