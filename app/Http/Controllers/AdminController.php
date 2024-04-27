<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function approveUser(User $user)
    {
        $user->update(['status' => 'approved']);
        return redirect()->back()->with('success', 'User approved successfully.');
    }

    public function rejectUser(User $user)
    {
        $user->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'User rejected successfully.');
    }
}