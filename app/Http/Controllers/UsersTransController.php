<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Service\UsersTransServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersTransController extends Controller
{

    protected $UsersTransService;

    public function __construct(UsersTransServiceInterface $UsersTransService)
    {
        $this->UsersTransService = $UsersTransService;
    }


    public function UploadJson(UsersTransServiceInterface $custom_service)
    {
        $custom_service->UploadJson();
        return new Response();
    }
    public function storeusers(UsersTransServiceInterface $custom_service)
    {
        $custom_service->storeusers();
        return new Response();
      
    }
    public function storeTrans(UsersTransServiceInterface $custom_service)
    {
        $custom_service->storeTrans();
        return new Response();
    }


    public function filterSearch(Request $request)
    {
      
        return $this->UsersTransService->filterSearch( $request);
    }
       
      
    
}
