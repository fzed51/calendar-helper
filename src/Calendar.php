<?php
declare(strict_types=1);
/**
 * created at 2020-07-09 06:22:35
 * @author Fabien Sanchez
 */

namespace CalendarHelper;

use DateTimeImmutable;
use DateTimeInterface;
use InvalidArgumentException;

/**
 * Class Calendar
 * @package CalendarHelper
 */
class Calendar
{
    use IsValidType;

    /**
     * Determine if a year is bisextile
     * @param int|\DateTimeInterface $year
     * @return bool
     */
    public static function isBisextile($year): bool
    {
        if (!self::isIntOrDateTimeInterface($year)) {
            throw new InvalidArgumentException(
                'The 1st argument passed to the method '
                . __METHOD__
                . ' must be of type int or \ DateTimeInterface'
            );
        }
        if (is_a($year, DateTimeInterface::class)) {
            $year = (int)$year->format("Y");
        }
        return ((($year % 4) === 0) && (($year % 100) !== 0)) || (($year % 400) === 0);
    }

    /**
     * retourne le nombre de jour dans 1 mois
     * @param $year
     * @param int|null $month
     * @return int
     */
    public static function numberOfDays($year, int $month = null): int
    {
        if (!self::isIntOrDateTimeInterface($year)) {
            throw new InvalidArgumentException(
                'the 1st argument passed to the method '
                . __METHOD__
                . ' must be of type int or \DateTimeInterface'
            );
        }
        if (is_a($year, DateTimeInterface::class)) {
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
                throw new InvalidArgumentException("the 2nd argument passed to the method is not a valid month");
        }
    }

    /**
     * retourne une liste de jour ferier
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable[]
     */
    public static function holidaysList($year): array
    {
        if (!self::isIntOrDateTimeInterface($year)) {
            throw new InvalidArgumentException(
                'the 1st argument passed to the method '
                . __METHOD__
                . ' must be of type int or \DateTimeInterface'
            );
        }
        if (is_a($year, DateTimeInterface::class)) {
            $year = (int)$year->format("Y");
        }
        return [
            Holiday::newYearsDay($year),
            Holiday::easterMonday($year),
            Holiday::mayDay($year),
            Holiday::armisticeDe1918($year),
            Holiday::ascension($year),
            Holiday::lundiDePentecote($year),
            Holiday::bastilleDay($year),
            Holiday::assomption($year),
            Holiday::tousSaint($year),
            Holiday::armisticeDe1945($year),
            Holiday::christmasDay($year)
        ];
    }

    /**
     * détermine si un jour est férié
     * @param $year
     * @param int|null $month
     * @param int|null $day
     * @return bool
     */
    public static function isHolidays($year, ?int $month = null, ?int $day = null): bool
    {
        if (!self::isIntOrDateTimeInterface($year)) {
            throw new InvalidArgumentException(
                'the 1st argument passed to the method '
                . __METHOD__
                . ' must be of type int or \DateTimeInterface'
            );
        }
        if (is_int($year && ($month === null || $day === null))) {
            throw new InvalidArgumentException(
                'if the first argument passed to the method '
                . __METHOD__
                . ' is an integer, the 2nd and 3rd argument are required.'
            );
        }
        if (is_a($year, DateTimeInterface::class)) {
            $day = (int)$year->format("d");
            $month = (int)$year->format("m");
            $year = (int)$year->format("Y");
        }
        $list = self::holidaysList($year);
        $needle = (new DateTimeImmutable())->setTime(0, 0, 0)->setDate($year, $month, $day);
        return in_array($needle, $list, false);
    }
}
