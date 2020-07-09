<?php /** @noinspection PhpParamsInspection */

namespace Test\CalendarHelper;

use CalendarHelper\Calendar;
use DateTimeImmutable;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{
    public function test_isBisextile_withInt(): void
    {
        self::assertTrue(Calendar::isBisextile(2016));
        self::assertFalse(Calendar::isBisextile(2017));
        self::assertFalse(Calendar::isBisextile(2018));
        self::assertFalse(Calendar::isBisextile(2019));
        self::assertTrue(Calendar::isBisextile(2020));
        self::assertFalse(Calendar::isBisextile(2021));
        self::assertFalse(Calendar::isBisextile(2022));
        self::assertFalse(Calendar::isBisextile(2023));
        self::assertTrue(Calendar::isBisextile(2024));
    }

    public function test_isBisextile_withDateTime(): void
    {
        $date = new DateTimeImmutable();
        $a = 2016;
        $i = 1;
        self::assertTrue(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertTrue(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        self::assertTrue(Calendar::isBisextile($date->setDate($a, $i, $i)));
    }

    public function test_isBisextile_withBadArg_string(): void
    {
        $this->expectException(InvalidArgumentException::class);
        self::assertTrue(Calendar::isBisextile('Oops!...I Did It Again'));
    }

    public function test_isBisextile_withBadArg_float(): void
    {
        $this->expectException(InvalidArgumentException::class);
        self::assertTrue(Calendar::isBisextile(9.999999));
    }

    public function test_isBisextile_withBadArg_array(): void
    {
        $this->expectException(InvalidArgumentException::class);
        self::assertTrue(Calendar::isBisextile([]));
    }

    public function test_numberOfDays_withInt(): void
    {
        $m = [
            1 => 31, 2 => 29, 3 => 31, 4 => 30, 5 => 31, 6 => 30,
            7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31,
        ];
        foreach ($m as $mois => $jour) {
            self::assertEquals(Calendar::numberOfDays(2020, $mois), $jour);
        }
        self::assertEquals(Calendar::numberOfDays(2019, 2), 28);
    }


    public function test_numberOfDays_withDateTime(): void
    {
        $m = [
            1 => 31, 2 => 29, 3 => 31, 4 => 30, 5 => 31, 6 => 30,
            7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31,
        ];
        foreach ($m as $mois => $jour) {
            self::assertEquals(Calendar::numberOfDays(new \DateTime("2020-$mois-10")), $jour);
        }
        self::assertEquals(Calendar::numberOfDays(new \DateTime("2019-02-10")), 28);
    }

    public function test_isHolidays_withInt(): void
    {
        $this->doesNotPerformAssertions();
    }

    public function test_isHolidays_withDateTime(): void
    {
        $this->doesNotPerformAssertions();
    }

    public function test_holidaysList(): void
    {
        $this->doesNotPerformAssertions();
    }
}
