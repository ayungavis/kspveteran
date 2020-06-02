<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Wildside\Userstamps\Userstamps;

class User extends Authenticatable
{
    use Notifiable;
    use Userstamps;
    use SoftDeletes;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['role'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'role_id',
        'id_card',
        'birth_place',
        'birth_date',
        'phone',
        'address',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     
    public function role() {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function loans() {
        return $this->hasMany('App\UserLoan', 'user_id', 'id');
    }

    public function applications() {
        return $this->hasMany('App\Application', 'user_id', 'id');
    }

    public function installments() {
        return $this->hasMany('App\Installment', 'user_id', 'id');
    }

    public function savings() {
        return $this->hasMany('App\Saving', 'user_id', 'id');
    }
}
