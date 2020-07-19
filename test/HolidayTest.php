<?php

namespace test;

use CalendarHelper\Holiday;
use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{
    /**
     * @param string $expect
     * @param \DateTimeInterface $actual
     * @param string $message
     */
    protected static function assertDateEquals(string $expect, \DateTimeInterface $actual, string $message = ''): void
    {
        if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $expect) !== 1) {
            throw new \InvalidArgumentException("the expected value must be in yyyy-mm-dd format");
        }
        self::assertEquals($expect, $actual->format('Y-m-d'), $message);
    }

    public function testArmisticeDe1945(): void
    {
        self::assertDateEquals('2030-05-08', Holiday::armisticeDe1945(2030));
    }

    public function testAscension(): void
    {
        self::assertDateEquals('2020-05-21', Holiday::ascension(2020));
    }

    public function testLundiDePentecote(): void
    {
        self::assertDateEquals('2020-06-01', Holiday::lundiDePentecote(2020));
    }

    public function testPentecote(): void
    {
        self::assertDateEquals('2020-05-31', Holiday::pentecote(2020));
    }

    public function testEasterDay(): void
    {
        self::assertDateEquals('2020-04-12', Holiday::easterDay(2020));
        self::assertDateEquals('2021-04-04', Holiday::easterDay(2021));
        self::assertDateEquals('2022-04-17', Holiday::easterDay(2022));
        self::assertDateEquals('2023-04-09', Holiday::easterDay(2023));
        self::assertDateEquals('2024-03-31', Holiday::easterDay(2024));
        self::assertDateEquals('2025-04-20', Holiday::easterDay(2025));
        self::assertDateEquals('2026-04-05', Holiday::easterDay(2026));
        self::assertDateEquals('2027-03-28', Holiday::easterDay(2027));
        self::assertDateEquals('2028-04-16', Holiday::easterDay(2028));
        self::assertDateEquals('2029-04-01', Holiday::easterDay(2029));
        self::assertDateEquals('2030-04-21', Holiday::easterDay(2030));
    }

    public function testBastilleDay(): void
    {
        self::assertDateEquals('2030-07-14', Holiday::bastilleDay(2030));
    }

    public function testMayDay(): void
    {
        self::assertDateEquals('2030-05-01', Holiday::mayDay(2030));
    }

    public function testAssomption(): void
    {
        self::assertDateEquals('2020-08-15', Holiday::assomption(2020));
    }

    public function testArmisticeDe1918(): void
    {
        self::assertDateEquals('2030-11-11', Holiday::armisticeDe1918(2030));
    }

    public function testToussaint(): void
    {
        self::assertDateEquals('2030-11-01', Holiday::tousSaint(2030));
    }

    public function testChristmasDay(): void
    {
        self::assertDateEquals('2030-12-25', Holiday::christmasDay(2030));
    }

    public function testNewYearsDay(): void
    {
        self::assertDateEquals('2030-01-01', Holiday::newYearsDay(2030));
    }

    public function testEasterMonday(): void
    {
        self::assertDateEquals('2020-04-13', Holiday::easterMonday(2020));
        self::assertDateEquals('2021-04-05', Holiday::easterMonday(2021));
        self::assertDateEquals('2022-04-18', Holiday::easterMonday(2022));
        self::assertDateEquals('2023-04-10', Holiday::easterMonday(2023));
        self::assertDateEquals('2024-04-01', Holiday::easterMonday(2024));
        self::assertDateEquals('2025-04-21', Holiday::easterMonday(2025));
        self::assertDateEquals('2026-04-06', Holiday::easterMonday(2026));
        self::assertDateEquals('2027-03-29', Holiday::easterMonday(2027));
        self::assertDateEquals('2028-04-17', Holiday::easterMonday(2028));
        self::assertDateEquals('2029-04-02', Holiday::easterMonday(2029));
        self::assertDateEquals('2030-04-22', Holiday::easterMonday(2030));
    }
}
