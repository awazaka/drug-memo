<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;

class CalendarController extends Controller
{
    public function show($year, $month){
		if (1 <= $month && $month <= 12)
		{
			$date = mktime(0, 0, 0, $month, 1, $year);
		}
		else
		{
			$date = time();
		}
		$calendar = new CalendarView($date);

		if ($month >= 12)
		{
			$nextMonth = 1;
			$nextYear = $year + 1;
			$lastMonth = $month - 1;
			$lastYear = $year;
		}
		else if ($month <= 1)
		{
			$nextMonth = $month + 1;
			$nextYear = $year;
			$lastMonth = 12;
			$lastYear = $year - 1;
		}
		else
		{
			$nextMonth = $month + 1;
			$nextYear = $year;
			$lastMonth = $month - 1;
			$lastYear = $year;
		}

		return view('calendar', [
			'calendar' => $calendar,
			'nextYear' => $nextYear,
			'nextMonth' => $nextMonth,
			'lastYear' => $lastYear,
			'lastMonth' => $lastMonth
		]);
	}
}
