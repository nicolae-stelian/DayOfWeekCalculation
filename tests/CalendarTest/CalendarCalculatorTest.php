<?php

namespace CalendarTest;

use Calendar\CalendarCalculator;

class CalendarCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public static function datesProvider()
    {
        return array(
            array(01, 01, 1900, "Monday"),
            array(02, 01, 1900, "Tuesday"),

            array(21, 01, 1900, "Sunday"),
            array(22, 01, 1900, "Monday"),

            array(01, 02, 1900, "Tuesday"),
            array(01, 03, 1900, "Tuesday"),
            array(21, 13, 1900, "Saturday"),
            array(01, 01, 1901, "Sunday"),

            array(17, 11, 2013, "Saturday"),
        );
    }

    /**
     * @dataProvider datesProvider
     */
    public function testDaysOfWeek($day, $month, $year, $expected)
    {
        $calculator = new CalendarCalculator();
        $dayOfWeek = $calculator->getDayOfTheWeek($day, $month, $year);
        $this->assertEquals($dayOfWeek, $expected);
    }
}

