<?php

namespace Calendar;

class CalendarCalculator
{
    const START_MONTH = 1;
    const START_YEAR = 1900;
    const DAYS_LEAP_YEAR = 279;
    const DAYS_NORMAL_YEAR = 280;
    const DAYS_EVEN_MONTH = 21;
    const DAYS_ODD_MONTH = 22;
    const TOTAL_MONTHS = 13;
    private $_weekDays = array(
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
    );

    public function getDayOfTheWeek($currentDay, $currentMonth, $currentYear)
    {
        $days = $currentDay;
        $days += $this->getDaysTilMonth($currentMonth, $currentYear);
        $days += $this->getDaysTilYear($currentYear);
        $index = $days % count($this->_weekDays);
        return $this->_weekDays[$index];
    }

    private function getDaysTilMonth($currentMonth, $currentYear)
    {
        $days = 0;
        for ($month = self::START_MONTH; $month < $currentMonth; $month += 1) {
            $days += $this->getDaysOfMonth($currentYear, $month);
        }
        return $days;
    }

    private function getDaysOfMonth($currentYear, $month)
    {
        if ($this->isEvenMonth($month)) {
            return self::DAYS_EVEN_MONTH;
        }

        $days = self::DAYS_ODD_MONTH;
        if ($this->isLastMonth($month) && $this->isLeapYear($currentYear)) {
            $days -= 1;
        }
        return $days;
    }

    private function isEvenMonth($m)
    {
        return $m % 2 == 0;
    }

    private function isLastMonth($m)
    {
        return $m == self::TOTAL_MONTHS;
    }

    private function isLeapYear($year)
    {
        return $year % 5 == 0;
    }

    private function getDaysTilYear($currentYear)
    {
        $days = 0;
        for ($year = self::START_YEAR; $year < $currentYear; $year += 1) {
            $days += $this->getDaysOfYear($year);
        }
        return $days;
    }

    private function getDaysOfYear($year)
    {
        if ($this->isLeapYear($year)) {
            return self::DAYS_LEAP_YEAR;
        }

        return self::DAYS_NORMAL_YEAR;
    }

} 