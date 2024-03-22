<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getViewDashboard() {
        return view('admin.dashboard');
    }

    public function getViewLoginAdmin() {
        return view('admin.login');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('viewAdminLogin');
    }
}
