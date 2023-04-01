<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plot extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'road_no',
        'plot_no',
        'mouza_no',
        'plot_no_rs',
        'khatian_no',
        'quantity_of_land_katha',
        'total_land_katha',
        'member_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'road_no' => 'integer',
        'mouza_no' => 'integer',
        'quantity_of_land_katha' => 'float',
        'total_land_katha' => 'float',
        'member_id' => 'integer',
    ];

    public function roadNo(): BelongsTo
    {
        return $this->belongsTo(Road::class);
    }

    public function mouzaNo(): BelongsTo
    {
        return $this->belongsTo(Mouza::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
