<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class Family extends Authenticatable
{
    use Notifiable;
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 
        'nik', 
        'gender',
        'birth_place',
        'birth_date',
        'religion',
        'education',
        'job',
    ];
  
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
