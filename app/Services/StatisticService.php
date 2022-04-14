<?php

namespace App\Services;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class StatisticService
{
    /**
     * @return array
     */
    public function users(): array
    {
        $users = $this->getUsers();
        return [
            'byRoot' => $users->countBy('root')->toArray(),
            'bySex' => $users->countBy('sex')->toArray(),
            'dynamic' => $users->pluck('created_at')->countBy(function ($date) {
                return $date->format('d.m.y');
            })
        ];
    }

    /**
     * @return Builder[]|Collection
     */
    protected function getUsers()
    {
        return Cache::remember('statistic.user', 60*60*24, function(){
            return User::query()->get(['sex', 'root', 'created_at']);
        });
    }

    /**
     * @return array
     */
    public function surveys(): array
    {
        return Cache::remember('statistic.surveys', 60*60*24, function(){
            return Survey::query()->get();
        });
    }
}
