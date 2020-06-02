<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class UserLoan extends Model
{
    use Userstamps;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ruser_loans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'application_id',
        'total_amount',
        'each_amount',
        'period',
        'start_date',
        'end_date',
        'approved_by',
        'approved_at',
        'is_active'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function application() {
        return $this->belongsTo('App\Application', 'application_id');
    }
}
