<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function login()
    {
        return view('user::default.login');
    }
}
