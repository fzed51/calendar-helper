<?php

namespace test;

use CalendarHelper\IsValidType;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsValidTypeTest extends TestCase
{
    public function testIsIntOrDateTimeInterfaceWithInt(): void
    {
        self::assertTrue(IsValidTypeStub::check(2020));
    }

    public function testIsIntOrDateTimeInterfaceWithDateTime(): void
    {
        self::assertTrue(IsValidTypeStub::check(new DateTimeImmutable()));
    }

    public function testIsIntOrDateTimeInterfaceWithBadArgString(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertFalse(IsValidTypeStub::check('Oops!...I Did It Again'));
    }

    public function testIsIntOrDateTimeInterfaceWithBadArgFloat(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertFalse(IsValidTypeStub::check(9.999999));
    }

    public function testIsIntOrDateTimeInterfaceWithBadArgArray(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertFalse(IsValidTypeStub::check([]));
    }
}

class IsValidTypeStub
{
    use IsValidType;

    /**
     * Left untyped to let the test exercise invalid runtime values through the trait.
     *
     * @param int|\DateTimeInterface $arg
     */
    public static function check($arg): bool
    {
        return self::isIntOrDateTimeInterface($arg);
    }
}
