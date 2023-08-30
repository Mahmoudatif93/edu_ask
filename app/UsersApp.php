<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersApp extends Model
{
    protected $fillable = ['balance','currency','email','id'];

    public function Transactions()
    {
        return $this->hasMany(Transactions::class,'parentEmail','email');

    }//end of Transactions
}
