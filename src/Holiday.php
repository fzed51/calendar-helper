<?php
/**
 * created ar 2020-07-09 23:26:49
 * @author Fabien Sanchez
 */

namespace CalendarHelper;

/**
 * Class Holiday
 * @package CalendarHelper
 */
class Holiday
{
    use isValidType;

// Jour de l'an : mercredi 1er janvier 2020
    public static function newYearsDay($year): \DateTimeImmutable
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
        return new \DateTimeImmutable("$year-01-01");
    }

    // Lundi de Pâques : lundi 13 avril 2020
    public static function easterDay($year): \DateTimeImmutable
    {

    }

    public static function easterMonday($year): \DateTimeImmutable
    {

    }

// Fête du Travail : vendredi 1er mai 2020
    public static function mayDay($year): \DateTimeImmutable
    {

    }

// Fête de la Victoire de 1945 : vendredi 8 mai 2020
    public static function armisticeDe1945($year): \DateTimeImmutable
    {

    }

// Jeudi de l'Ascension : jeudi 21 mai 2020
    public static function ascension($year): \DateTimeImmutable
    {

    }

// Lundi de Pentecôte : lundi 1er juin 2020
    public static function Pentecote($year): \DateTimeImmutable
    {

    }

    public static function lundiDePentecote($year): \DateTimeImmutable
    {

    }

// Fête nationale : mardi 14 juillet 2020
    public static function bastilleDay($year): \DateTimeImmutable
    {

    }

// Assomption : samedi 15 août 2020
    public static function assomption($year): \DateTimeImmutable
    {

    }
// Toussaint : dimanche 1er novembre 2020
    public static function toussaint($year): \DateTimeImmutable
    {

    }
// Armistice de 1918 : mercredi 11 novembre 2020
    public static function armisticeDe1918($year): \DateTimeImmutable
    {

    }
// Noël : vendredi 25 décembre 2020.
    public static function christmasDay($year)
    {

    }
}