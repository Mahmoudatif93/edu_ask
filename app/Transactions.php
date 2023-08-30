<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = ['paidAmount','Currency','parentEmail',
    'statusCode','paymentDate','parentIdentification'];


    public function UsersApp()
    {
        return $this->belongsTo(UsersApp::class,'parentEmail','email');

    }//end of UsersApp

}
