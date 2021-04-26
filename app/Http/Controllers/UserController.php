<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Drug;

class UserController extends Controller
{
    public function mypage($id)
    {
        $user = User::findOrFail($id);
        $drugs = Drug::where('user_id', $user->id)->get();

        if ($user->id == \Auth::id())
        {
            return view('mypage',[
                'user' => $user,
                'drugs' => $drugs
            ]);
        }
        
    }

    public function destroyPage()
    {
        return view('users.destroyUser');
    }

    public function destroy($id)
    {
        $user = \Auth::user();

        if ($user->id == $id)
        {
            $user->delete();
        }

        return redirect(route('top'));
    }
}
