<?php

namespace Test\CalendarHelper;

use CalendarHelper\Holiday;
use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{

    public function testArmisticeDe1945()
    {
    }

    public function testAscension()
    {
    }

    public function testLundiDePentecote()
    {
    }

    public function testPentecote()
    {
    }

    public function testEasterDay()
    {
        $this->assertEquals('2020-04-12', Holiday::easterDay(2020)->format('Y-m-d'));
        $this->assertEquals('2021-04-04', Holiday::easterDay(2021)->format('Y-m-d'));
        $this->assertEquals('2022-04-17', Holiday::easterDay(2022)->format('Y-m-d'));
        $this->assertEquals('2023-04-09', Holiday::easterDay(2023)->format('Y-m-d'));
        $this->assertEquals('2024-03-31', Holiday::easterDay(2024)->format('Y-m-d'));
        $this->assertEquals('2025-04-20', Holiday::easterDay(2025)->format('Y-m-d'));
        $this->assertEquals('2026-04-05', Holiday::easterDay(2026)->format('Y-m-d'));
        $this->assertEquals('2027-03-28', Holiday::easterDay(2027)->format('Y-m-d'));
        $this->assertEquals('2028-04-16', Holiday::easterDay(2028)->format('Y-m-d'));
        $this->assertEquals('2029-04-01', Holiday::easterDay(2029)->format('Y-m-d'));
        $this->assertEquals('2030-04-21', Holiday::easterDay(2030)->format('Y-m-d'));
    }

    public function testBastilleDay()
    {
    }

    public function testMayDay()
    {
    }

    public function testAssomption()
    {
    }

    public function testArmisticeDe1918()
    {
    }

    public function testToussaint()
    {
    }

    public function testChristmasDay()
    {
    }

    public function testNewYearsDay()
    {
    }

    public function testEasterMonday()
    {
        $this->assertEquals('2020-04-13', Holiday::easterMonday(2020)->format('Y-m-d'));
        $this->assertEquals('2021-04-05', Holiday::easterMonday(2021)->format('Y-m-d'));
        $this->assertEquals('2022-04-18', Holiday::easterMonday(2022)->format('Y-m-d'));
        $this->assertEquals('2023-04-10', Holiday::easterMonday(2023)->format('Y-m-d'));
        $this->assertEquals('2024-04-01', Holiday::easterMonday(2024)->format('Y-m-d'));
        $this->assertEquals('2025-04-21', Holiday::easterMonday(2025)->format('Y-m-d'));
        $this->assertEquals('2026-04-06', Holiday::easterMonday(2026)->format('Y-m-d'));
        $this->assertEquals('2027-03-29', Holiday::easterMonday(2027)->format('Y-m-d'));
        $this->assertEquals('2028-04-17', Holiday::easterMonday(2028)->format('Y-m-d'));
        $this->assertEquals('2029-04-02', Holiday::easterMonday(2029)->format('Y-m-d'));
        $this->assertEquals('2030-04-22', Holiday::easterMonday(2030)->format('Y-m-d'));
    }
}
