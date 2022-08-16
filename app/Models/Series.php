<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    // protected $with = [
    //     'seasons',
    // ];

    /**
     * seasons function - temporadas
     *
     * @return void
     */
    public function seasons()
    {
        /** Uma seria possue muitas temporadas */
        return $this->hasMany(related: Season::class, foreignKey: 'series_id');
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('ordered', function (Builder $builder) {
            $builder->orderBy('nome');
        });
    }
}
