<?php namespace App\Http\Controllers;

class AdminController extends Controller {

    public function getHome()
    {
        return redirect('dashboards');//->route('dashboards');//"555";//view('blog.admin.post');//view(route('blog.admin.post'));//view('dashboard.index');
    }
}