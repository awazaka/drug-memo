<?php
namespace App\Calendar;

use Carbon\Carbon;

class CalendarView
{
    private $carbon;

    function __construct($date)
    {
        $this->carbon = new Carbon($date);
    }

    public function getTitle()
    {
        return $this->carbon->format('Y年n月');
    }

    protected function getWeeks()
    {
        $weeks = [];

        $firstDay = $this->carbon->copy()->firstOfMonth();

        $lastDay = $this->carbon->copy()->lastOfMonth();

        $week = new CalendarWeek($firstDay->copy());
        $weeks[] = $week;

        $tmpDay = $firstDay->copy()->addDay(7)->startOfWeek();

        while($tmpDay->lte($lastDay))
        {
            $week = new CalendarWeek($tmpDay, count($weeks));
            $weeks[] = $week;

            $tmpDay->addDay(7);
        }
        return $weeks;
    }

    function render()
    {
        $html = [];
        $html[] = '<div class="calender">';
        $html[] = '<table class="table table-bordered text-center border-secondary">';
		$html[] = '<thead style="background-color:lightskyblue">';
		$html[] = '<tr>';
        $html[] = '<th>日</th>';
		$html[] = '<th>月</th>';
		$html[] = '<th>火</th>';
		$html[] = '<th>水</th>';
		$html[] = '<th>木</th>';
		$html[] = '<th>金</th>';
		$html[] = '<th>土</th>';
		$html[] = '</tr>';
		$html[] = '</thead>';

        $html[] = '<tbody style="background-color:lightcyan">';

        $weeks = $this->getWeeks();
        foreach($weeks as $week)
        {
            $html[] = '<tr>';
            $days = $week->getDays();
            foreach($days as $day)
            {
                $html[] = '<td class="p-1">';
                $html[] = $day->render();
                $result = $day->checkTaking(\Auth::id());
                $html[] = $result;
                $html[] = '</td>';
            }
            $html[] = '</tr>';
        }

        $html[] = '</tbody>';

        $html[] = '</table>';
        $html[] = '</div>';


        return implode("", $html);
    }

}