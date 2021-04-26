<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{
    public function take($timeId, $date)
    {
        $data = History::where('time_id', $timeId)->where('date', $date);
        
        if ($data->exists())
        {
            $history = $data->first();
            $history->status = 'take';
            $history->save();
        }
        else
        {
            $history = History::create([
                'status' => 'take',
                'date' => $date,
                'time_id' => $timeId
            ]);
        }

        return back();
        

    }

    public function forget($timeId, $date)
    {
        $data = History::where('time_id', $timeId)->where('date', $date);
        
        if ($data->exists())
        {
            $history = $data->first();
            $history->status = 'forget';
            $history->save();
        }
        else
        {
            $history = History::create([
                'status' => 'forget',
                'date' => $date,
                'time_id' => $timeId
            ]);
        }

        return back();
        

    }
}
