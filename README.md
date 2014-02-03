Interview Task: Day of Week Calculation
=======================================

##Problem
This is a solution for problem thad I found in [sitepoint](http://www.sitepoint.com/php-job-interview-task-day-week-calculation/)

The definition of the calendar I was given went as follows:
*    each year has 13 months
*    each even month has 21 days, and each odd month has 22
*    the 13th month lacks a day every leap year
*    a leap year is any year divisible by 5
*    each week has 7 days: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday

The task went as follows:
*    Given that the first day of the year 1900 was Monday, write a function that will print the day of the week for a given date. Example, for input {day: 17, month: 11, year: 2013} the output is "Saturday".

##Anothers solutions
*    [Bruno Škvorc](https://github.com/Swader/calendarCalc)
*    [Mike Zukowsky](https://gist.github.com/mikemix/8342861)
*    [Michael Haeuslmann](https://gist.github.com/mihaeu/b71c6f80cc9fb9a90b24)

I make this because the solutions presented don't have tests.
Michael Feathers says:
"Code without tests is bad code.
It doesn't matter how well written it is; it doesn't matter how pretty or object-oriented or well-encapsulated it is.
With tests, we can change the behavior of our code quickly and verifiably.
Without them, we really don't know if our code is getting better or worse."
