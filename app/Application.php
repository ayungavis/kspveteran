<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Application extends Model
{
    use Userstamps;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'applications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'loan_amount',
        'loan_application',
        'loan_period',
        'loan_requirement',
        'loan_item',
        'application_status_id',
        'approved_by',
        'approved_at',
        'approved_invitation_date',
        'rejected_by',
        'rejected_at',
        'rejected_reason'
    ];

    public function customer() {
        return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function status() {
        return $this->belongsTo('App\ApplicationStatus', 'application_status_id');
    }
}