<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drug;
use App\Time;

class DrugController extends Controller
{
    public function createGet()
    {
        return view('drugs.createDrug');
    }

    public function createPost(Request $request)
    {
        return view('drugs.createDrug', [
            'request' => $request->count
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'times.*' => 'required|max:10'
        ]);

        $user = \Auth::user();
        
        $drug = Drug::create([
            'name' => $request->name,
            'user_id' => $user->id
        ]);

        foreach($request->times as $time) {
            $newTime = Time::create([
                'time' => $time,
                'drug_id' => $drug->id
            ]);
        };

        return redirect('/mypage/' . $user->id);
    }

    public function destroy($id)
    {
        $user = \Auth::user();
        
        $drug = Drug::findOrFail($id);

        if ($user->id == $drug->user_id)
        {
            $drug->delete();
        }

        return redirect('/mypage/' . $user->id);
    }
}
