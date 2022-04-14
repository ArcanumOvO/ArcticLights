<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

/**
 * @User
 * @property string role
 * @property int age
 * @property string birthday
 *
 */
class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_name',
        'phone',
        'weight',
        'height',
        'sex',
        'birthday',
        'root',
        'stay'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return BelongsToMany
     */
    public function surveys()
    {
        return $this->belongsToMany(Survey::class, 'survey_user', 'user_id', 'survey_id')->withPivot('result');
    }

    /**
     * @return int
     */
    public function getAgeAttribute()
    {
        return Carbon::now()->diffInYears(Carbon::parse($this->birthday));
    }
}
