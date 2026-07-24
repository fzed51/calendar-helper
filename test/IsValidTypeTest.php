<?php

namespace test;

use CalendarHelper\IsValidType;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsValidTypeTest extends TestCase
{
    public function test_isIntOrDateTimeInterface_withInt(): void
    {
        self::assertTrue(IsValidTypeStub::check(2020));
    }

    public function test_isIntOrDateTimeInterface_withDateTime(): void
    {
        self::assertTrue(IsValidTypeStub::check(new DateTimeImmutable()));
    }

    public function test_isIntOrDateTimeInterface_withBadArg_string(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertFalse(IsValidTypeStub::check('Oops!...I Did It Again'));
    }

    public function test_isIntOrDateTimeInterface_withBadArg_float(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertFalse(IsValidTypeStub::check(9.999999));
    }

    public function test_isIntOrDateTimeInterface_withBadArg_array(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertFalse(IsValidTypeStub::check([]));
    }
}

class IsValidTypeStub
{
    use IsValidType;

    /**
     * @param int|\DateTimeInterface $arg
     */
    public static function check($arg): bool
    {
        return self::isIntOrDateTimeInterface($arg);
    }
}
