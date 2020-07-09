<?php
declare(strict_types=1);
/**
 * created at 2020-07-09 06:22:35
 * @author Fabien Sanchez
 */

namespace CalendarHelper;

/**
 * Class Calendar
 * @package CalendarHelper
 */
class Calendar
{
    /**
     * Determines whether the argument passed in the parameter is an integer or an object with a
     * DateTimeInterface interface
     * @param $arg
     * @return bool
     */
    protected static function isIntOrDateTimeInterface($arg): bool
    {
        if (is_int($arg) || is_a($arg, \DateTimeInterface::class)) {
            return true;
        }
        return false;
    }

    /**
     * Determine if a year is bisextile
     * @param int|\DateTimeInterface $year
     * @return bool
     */
    public static function isBisextile($year)
    {
        if (!self::isIntOrDateTimeInterface($year)) {
            throw new \InvalidArgumentException(
                'The 1st argument passed to the method '
                . __METHOD__
                . ' must be of type int or \ DateTimeInterface'
            );
        }
        if (is_a($year, \DateTimeInterface::class)) {
            $year = (int)$year->format("Y");
        }
        return ((($year % 4) === 0) && (($year % 100) !== 0)) || (($year % 400) === 0);
    }
}