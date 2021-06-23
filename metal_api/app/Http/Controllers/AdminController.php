<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function backup_database()
    {
        \Artisan::call('db:dump');
    }
}
