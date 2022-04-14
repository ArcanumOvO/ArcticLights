<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @param $iUserId
     * @return Builder[]|Collection
     */
    public static function getIncomplete($iUserId)
    {
        $oUsersSurveys = static::getComplete($iUserId);
        return Survey::query()->whereKeyNot($oUsersSurveys->pluck('id')->all())->get();
    }

    /**
     * @param $iUserId
     * @return mixed
     */
    public static function getComplete($iUserId)
    {
        $oUser = User::findOrFail($iUserId);
        return $oUser->surveys()->where('result_id', '>', 0)->get();
    }
}
