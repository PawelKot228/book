<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __invoke()
    {
        auth('admin')->logout();

        return to_route('admin.login');
    }
}
