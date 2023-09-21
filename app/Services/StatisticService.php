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
        $byRoot = $users->countBy('root')->toArray();
        $bySex = $users->countBy('sex')->toArray();
        $undefinedSex = function () use ($bySex) {
            unset($bySex['m']);
            unset($bySex['f']);

            return array_sum($bySex);
        };

        return [
            'byRoot' => [
                'root' => $byRoot[1] ?? 0,
                'non-root' => $byRoot[0] ?? 0,
            ],
            'bySex' => [
                'm' => $bySex['m'] ?? 0,
                'f' => $bySex['f'] ?? 0,
                'undefined' => $undefinedSex(),
            ],
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
        return Cache::remember('statistic.user', 60 * 60 * 24, function () {
            return User::query()->get(['sex', 'root', 'created_at']);
        });
    }

    /**
     * @return array
     */
    public function surveys(): array
    {
        return Cache::remember('statistic.surveys', 60 * 60 * 24, function () {
            return Survey::query()->get();
        });
    }
}
