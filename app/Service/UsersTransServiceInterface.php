<?php

namespace App\Service;
use Illuminate\Http\Request;

interface UsersTransServiceInterface
{
    public function storeusers();
    public function storeTrans();
    public function UploadJson();
    public function filterSearch($request);
}