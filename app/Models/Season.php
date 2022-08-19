<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'number'
    ];

    /**
     * series function - serie
     *
     * @return void
     */
    public function series()
    {
        /** A temporada percentecem  a uma serie */
        return $this->BelongsTo(Series::class);
    }

    /**
     * episodes function - episodios
     *
     * @return void
     */
    public function episodes()
    {
        /** A temporada possue muitos epsodios  */
        return $this->hasMany(related: Episode::class);
    }

    public function numberOfWatchedEpisodes(): int
    {
        return $this->episodes->filter(fn ($episodes) => $episodes->watched)->count();
    }
}
