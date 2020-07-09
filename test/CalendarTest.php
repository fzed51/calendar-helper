<?php

namespace Test\CalendarHelper;

use CalendarHelper\Calendar;
use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{
    public function test_isBisextile_withInt(): void
    {
        $this->assertTrue(Calendar::isBisextile(2016));
        $this->assertFalse(Calendar::isBisextile(2017));
        $this->assertFalse(Calendar::isBisextile(2018));
        $this->assertFalse(Calendar::isBisextile(2019));
        $this->assertTrue(Calendar::isBisextile(2020));
        $this->assertFalse(Calendar::isBisextile(2021));
        $this->assertFalse(Calendar::isBisextile(2022));
        $this->assertFalse(Calendar::isBisextile(2023));
        $this->assertTrue(Calendar::isBisextile(2024));
    }

    public function test_isBisextile_withDateTime(): void
    {
        $date = new \DateTimeImmutable();
        $a = 2016;
        $i = 1;
        $this->assertTrue(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertTrue(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertFalse(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
        $this->assertTrue(Calendar::isBisextile($date->setDate($a++, $i, $i++)));
    }

    public function test_isBisextile_withBadArg_string(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(Calendar::isBisextile('Oops!...I Did It Again'));
    }

    public function test_isBisextile_withBadArg_float(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(Calendar::isBisextile(9.999999));
    }

    public function test_isBisextile_withBadArg_array(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(Calendar::isBisextile([]));
    }

    public function test_numberOfDays_withInt(): void
    {
        $this->doesNotPerformAssertions();
    }

    public function test_numberOfDays_withDateTime(): void
    {
        $this->doesNotPerformAssertions();
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
