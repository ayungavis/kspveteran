<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class ApplicationStatus extends Model
{
    use Userstamps;
    use SoftDeletes;

    const WAITING = 1;
    const APPROVE = 2;
    const DISAPPROVE = 3;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'application_statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug'
    ];

    public function applications() {
        return $this->hasMany('App\Application', 'application_status_id', 'id');
    }
}
