<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index()
    {
        $member = 'Silver';
        $selisih = 0;
        $user = User::where('id', auth()->user()->id)->first();
        $width = $user->point * 2;
        $point = $user->point;
        if ($user->point < 200) {
            $member = 'Silver';
            $selisih = 200 - $user->point;
        } else if ($user->point >= 200 && $user->point < 400) {
            $member = 'Gold';
            $selisih = 400 - $user->point;
        } else if ($user->point > 400) {
            $member = 'Diamond';
            $width = 800;
            $point = '+400';
            $selisih = 0;
        }

        return view('reward', [
            'width' => $width,
            'point' => $point,
            'member' => $member,
            'selisih' => $selisih	
        ]);
    }
}
