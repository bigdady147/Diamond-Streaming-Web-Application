<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

    }
    protected $admin;
    protected $data;
    protected $redirectTo = '/';

    public function getDashboard(){
        return View('web.templates.dashboard');
    }
    //GET DASHBOARD ADMIN
    public function getAdminDashboard(){
        return View('admin._layouts.master-v1');
    }
    public function getListSupporter(){
        return View('admin.templates.list-supporters');
    }
    public function getListFoundations(){
        return View('admin.templates.list-foundations');
    }
    public function getListPackages(){
        return View('admin.templates.list-packages');
    }
    public function getListOrders(){
        return View('admin.templates.list-orders');
    }
}
