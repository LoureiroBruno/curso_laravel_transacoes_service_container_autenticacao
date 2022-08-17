<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequestCreate;
use App\Models\Series;

interface SeriesRepository
{
    public function add(SeriesFormRequestCreate $request): Series;
}