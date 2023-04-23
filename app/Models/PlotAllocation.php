<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlotAllocation extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'road_id',
        'plot_no',
        'plot_no_rs',
        'mouza_id',
        'khatian_no',
        'quantity_of_land_in_katha',
        'total_land_in_katha',
        'member_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'road_id' => 'integer',
        'mouza_id' => 'integer',
        'quantity_of_land_in_katha' => 'float',
        'total_land_in_katha' => 'float',
        'member_id' => 'integer',
    ];

    public function road(): BelongsTo
    {
        return $this->belongsTo(Road::class);
    }

    public function mouza(): BelongsTo
    {
        return $this->belongsTo(Mouza::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
