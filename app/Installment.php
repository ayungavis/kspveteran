<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Installment extends Model
{
    use Userstamps;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'installments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'date',
        'total_loan',
        'total_amount',
        'each_amount',
        'start_amount'
    ];

    public function customer() {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
}