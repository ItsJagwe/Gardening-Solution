<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['flat','area','landmark','pincode','phone','date','pack_type','email','payment','service_id','user_id','service_title'];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function services(){
        return $this->belongsTo('App\Models\Service');
    }
}
