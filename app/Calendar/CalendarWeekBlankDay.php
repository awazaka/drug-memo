<?php
namespace App\Calendar;

use Carbon\Carbon;

class CalendarWeekBlankDay extends CalendarWeekDay
{
    function render()
    {
        return '';
    }
}