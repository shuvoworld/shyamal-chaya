<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlotAssign extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'occupation_id',
        'marital_status_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'occupation_id' => 'integer',
        'marital_status_id' => 'integer',
    ];

    public function occupation(): BelongsTo
    {
        return $this->belongsTo(Occupation::class);
    }

    public function maritalStatus(): BelongsTo
    {
        return $this->belongsTo(MaritalStatus::class);
    }
}
