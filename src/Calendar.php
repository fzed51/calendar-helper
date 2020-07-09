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
    use isValidType;

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

    public static function numberOfDays($year, int $month = null): int
    {
        if (!self::isIntOrDateTimeInterface($year)) {
            throw new \InvalidArgumentException(
                'the 1st argument passed to the method '
                . __METHOD__
                . ' must be of type int or \DateTimeInterface'
            );
        }
        if (is_a($year, \DateTimeInterface::class)) {
            $month = (int)$year->format("m");
            $year = (int)$year->format("Y");
        }
        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
            case 2:
                return self::isBisextile($year) ? 29 : 28;
            default:
                throw new \InvalidArgumentException("the 2nd argument passed to the method is not a valid month");
        }
    }
}
