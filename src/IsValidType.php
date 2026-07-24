<?php


namespace CalendarHelper;

/**
 * Trait IsValidType
 * @package CalendarHelper
 */
trait IsValidType
{
    /**
     * Determines whether the argument passed in the parameter is an integer or an object with a
     * DateTimeInterface interface
     * @param mixed $arg
     * @return bool
     */
    protected static function isIntOrDateTimeInterface($arg): bool
    {
        return is_int($arg) || $arg instanceof \DateTimeInterface;
    }
}
