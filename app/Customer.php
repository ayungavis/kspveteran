<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Customer extends Model
{
    use Userstamps;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_card',
        'name',
        'couple_name',
        'birth_place',
        'birth_date',
        'whatsapp',
        'job',
        'address'
    ];

    public function application() {
        return $this->hasOne('App\Application', 'customer_id', 'id');
    }

    public function savings() {
        return $this->hasOne('App\Saving', 'customer_id', 'id');
    }

    public function installment() {
        return $this->hasOne('App\Installment', 'customer_id', 'id');
    }
}