<?php
/**
 * created ar 2020-07-09 23:26:49
 * @author Fabien Sanchez
 */

namespace CalendarHelper;

use DateTimeImmutable;

/**
 * Class Holiday
 * @package CalendarHelper
 */
class Holiday
{
    use IsValidType;

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function newYearsDay($year): DateTimeImmutable
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
        return new DateTimeImmutable("$year-01-01");
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function easterDay($year): DateTimeImmutable
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
        $n = $year % 19;
        $c = (int)($year / 100);
        $u = $year % 100;
        $s = (int)($c / 4);
        $t = $c % 4;
        $p = (int)(($c + 8) / 25);
        $q = (int)(($c - $p + 1) / 3);
        $e = (19 * $n + $c - $s - $q + 15) % 30;
        $b = (int)($u / 4);
        $d = $u % 4;
        $L = (2 * $t + 2 * $b - $e - $d + 32) % 7;
        $h = (int)(($n + 11 * $e + 22 * $L) / 451);
        $m = (int)(($e + $L - 7 * $h + 114) / 31);
        $j = ($e + $L - 7 * $h + 114) % 31;
        $easterDay = new DateTimeImmutable();
        return $easterDay->setDate($year, $m, $j + 1)->setTime(0, 0);
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function easterMonday($year): DateTimeImmutable
    {
        return self::easterDay($year)->add(new \DateInterval('P1D'));
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function mayDay($year): DateTimeImmutable
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
        return new DateTimeImmutable("$year-05-01");
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function armisticeDe1945($year): DateTimeImmutable
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
        return new DateTimeImmutable("$year-05-08");
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function ascension($year): DateTimeImmutable
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
        return self::easterDay($year)->modify('+39 days');
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function pentecote($year): DateTimeImmutable
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
        return self::easterDay($year)->modify('+49 days');
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function lundiDePentecote($year): DateTimeImmutable
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
        return self::easterDay($year)->modify('+50 days');
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function bastilleDay($year): DateTimeImmutable
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
        return new DateTimeImmutable("$year-07-14");
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function assomption($year): DateTimeImmutable
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
        return new DateTimeImmutable("$year-08-15");
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function tousSaint($year): DateTimeImmutable
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
        return new DateTimeImmutable("$year-11-01");
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function armisticeDe1918($year): DateTimeImmutable
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
        return new DateTimeImmutable("$year-11-11");
    }

    /**
     * @param int|\DateTimeInterface $year
     * @return \DateTimeImmutable
     */
    public static function christmasDay($year)
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
        return new DateTimeImmutable("$year-12-25");
    }
}
