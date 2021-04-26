<?php
namespace App\Calendar;

use Carbon\Carbon;
use App\User;

class CalendarWeekDay
{
    protected $carbon;

    function __construct($date)
    {
        $this->carbon = new Carbon($date);
    }

    function render()
    {
        $display = $this->carbon->format("j");
        $display = $display;
        
        return '<p class="mb-1">' . $display . '</p>';
    }

    // 服用したかどうかを判定
    function checkTaking($userId)
    {
        $user = User::findOrFail($userId);
        $date = $this->carbon->format('Y-m-d');
        $drugs = $user->drugs()->get();
        $forget = 0;
        $take = 0;
        $count = 0;
               
        $result = '　';

        foreach($drugs as $drug)
        {
            $times = $drug->times()->get();
             

            foreach($times as $time)
            {
                $count++;
                $history = $time->histories->where('date', $date)->first();
                if ($history != null) {
                    if ($history->status == 'forget')
                    {
                        $forget++;
                    }
                    else if ($history->status == "take")
                    {
                        $take++;
                    }
                }
            }
            
        }
        if ($forget > 0)
            {
                $result = '<span class="text-danger">✕</span>';
            }
            else if ($take == $count && $count != 0)
            {
                $result = '<span class="text-primary">〇</span>';
            }
            else if (0 < $take && $take < $count)
            {
                $result = '<span class="text-success">？</span>';
            }

        return $result;
    }
}