<?php


namespace CalendarHelper;

/**
 * Trait isValidType
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
        if (is_int($arg) || is_a($arg, \DateTimeInterface::class)) {
            return true;
        }
        return false;
    }
}
