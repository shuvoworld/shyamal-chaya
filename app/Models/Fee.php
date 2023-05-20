<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fee extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fees_type_id',
        'year_of_payment',
        'amount',
        'date_of_payment',
        'member_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fees_type_id' => 'integer',
        'amount' => 'float',
        'date_of_payment' => 'date',
        'member_id' => 'integer',
    ];

    public function feesType(): BelongsTo
    {
        return $this->belongsTo(FeesType::class, 'fees_type_id');
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
