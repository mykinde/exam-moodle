<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon;
use SearchableTrait;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'middlename', 'username', 'email', 'password', 'secret',
        'gender', 'phone', 'institution', 'department', 'reason','idnumber', 'course',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullnameAttribute() {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }

    public function setLastnameAttribute($value)
    {
        $this->attributes['lastname'] = ucfirst(strtolower($value));
    }
    
    public function setFirstnameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst(strtolower($value));
    }

    public function setMiddlenameAttribute($value)
    {
        $this->attributes['middlename'] = ucfirst(strtolower($value));
    }

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function getLastnameAttribute($value)
    {
       return strtoupper($value);
    }

    public function getMiddlenameAttribute($value)
    {
       return strtolower($value);
    }

    public function getCreatedAtAttribute($date)
    {
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    /* public function getUpdatedAtAttribute($date)
    {
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    } */

    protected $searchable = [
        'columns' => [
            'users.lastname' => 10,
            'users.firstname' => 10,
            'users.username' => 10,
            'users.email' => 5,
            'users.id' => 3,
        ]
    ];

}
