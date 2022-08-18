<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequestCreate;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Support\Facades\DB;

class EloquentSeriesRepository implements SeriesRepository
{
    public function add(SeriesFormRequestCreate $request): Series
    {
        return DB::transaction(function () use ($request) {
       
            $serie = Series::create($request->all());

            $seasons = [];
            for ($s=1; $s <= $request->seasonQty; $s++) {
                $seasons[] = [
                    'series_id' => $serie->id,
                    'number' => $s,
                    'created_at' => $serie->created_at,
                    'updated_at' => $serie->updated_at
                ];
            }

            /** bulk insert */
            Season::insert($seasons);

            $episodes = [];
            foreach ($serie->seasons as $season) {
                for ($e=1; $e <= $request->episodesPerSeason; $e++) {
                    $episodes[] = [
                        'season_id' => $season->id,
                        'number' => $e,
                    ];
                }
            }

            /** bulk insert */
            Episode::insert($episodes);

            return $serie;
        });

    }
}