# CALENDAR HELPER

_Function collections for working with a calendar._

## Installation

```shell
composer require fzed51/calendar-helper
```

## Use

### Calendar

#### Is a bisextile year

```php
\CalendarHelper\Calendar::isBisextile(2020);
// => true

\CalendarHelper\Calendar::isBisextile(new \DateTime('2020-06-15'));
// => true

\CalendarHelper\Calendar::isBisextile(2019);
// => false
```

Returns `bool`.

#### Number of days in the month

```php
\CalendarHelper\Calendar::numberOfDays(2020, 2);
// => 29

\CalendarHelper\Calendar::numberOfDays(new \DateTime('2020-02-15'));
// => 29

\CalendarHelper\Calendar::numberOfDays(2019, 2);
// => 28
```

Returns `int`.

#### Is a holiday

```php
\CalendarHelper\Calendar::isHolidays(2020, 7, 14);
// => true  (Bastille Day)

\CalendarHelper\Calendar::isHolidays(new \DateTime('2020-07-14'));
// => true

\CalendarHelper\Calendar::isHolidays(2020, 7, 15);
// => false
```

Returns `bool`.

#### List the holidays of a year

```php
\CalendarHelper\Calendar::holidaysList(2020);
// => [
//      DateTimeImmutable('2020-01-01'),  // New Year's Day
//      DateTimeImmutable('2020-04-13'),  // Easter Monday
//      DateTimeImmutable('2020-05-01'),  // May Day
//      DateTimeImmutable('2020-11-11'),  // Armistice 1918
//      DateTimeImmutable('2020-05-21'),  // Ascension
//      DateTimeImmutable('2020-06-01'),  // Whit Monday
//      DateTimeImmutable('2020-07-14'),  // Bastille Day
//      DateTimeImmutable('2020-08-15'),  // Assumption
//      DateTimeImmutable('2020-11-01'),  // All Saints' Day
//      DateTimeImmutable('2020-05-08'),  // Armistice 1945
//      DateTimeImmutable('2020-12-25'),  // Christmas Day
//    ]
```

Returns `\DateTimeImmutable[]`.

---

### Holiday

The `Holiday` class provides static methods to get the date of each French public holiday for a given year.
Each method accepts either an `int` year or a `\DateTimeInterface` object and returns a `\DateTimeImmutable`.

#### New Year's Day (1st January)

```php
\CalendarHelper\Holiday::newYearsDay(2020);
// => DateTimeImmutable('2020-01-01')

\CalendarHelper\Holiday::newYearsDay(new \DateTime('2020-06-15'));
// => DateTimeImmutable('2020-01-01')
```

#### Easter Sunday

```php
\CalendarHelper\Holiday::easterDay(2020);
// => DateTimeImmutable('2020-04-12')
```

#### Easter Monday

```php
\CalendarHelper\Holiday::easterMonday(2020);
// => DateTimeImmutable('2020-04-13')
```

#### May Day / Labour Day (1st May)

```php
\CalendarHelper\Holiday::mayDay(2020);
// => DateTimeImmutable('2020-05-01')
```

#### Armistice 1945 / Victory in Europe Day (8th May)

```php
\CalendarHelper\Holiday::armisticeDe1945(2020);
// => DateTimeImmutable('2020-05-08')
```

#### Ascension (39 days after Easter)

```php
\CalendarHelper\Holiday::ascension(2020);
// => DateTimeImmutable('2020-05-21')
```

#### Pentecost / Whit Sunday (49 days after Easter)

```php
\CalendarHelper\Holiday::pentecote(2020);
// => DateTimeImmutable('2020-05-31')
```

#### Whit Monday / Lundi de Pentecôte (50 days after Easter)

```php
\CalendarHelper\Holiday::lundiDePentecote(2020);
// => DateTimeImmutable('2020-06-01')
```

#### Bastille Day (14th July)

```php
\CalendarHelper\Holiday::bastilleDay(2020);
// => DateTimeImmutable('2020-07-14')
```

#### Assumption (15th August)

```php
\CalendarHelper\Holiday::assomption(2020);
// => DateTimeImmutable('2020-08-15')
```

#### All Saints' Day / Toussaint (1st November)

```php
\CalendarHelper\Holiday::tousSaint(2020);
// => DateTimeImmutable('2020-11-01')
```

#### Armistice 1918 (11th November)

```php
\CalendarHelper\Holiday::armisticeDe1918(2020);
// => DateTimeImmutable('2020-11-11')
```

#### Christmas Day (25th December)

```php
\CalendarHelper\Holiday::christmasDay(2020);
// => DateTimeImmutable('2020-12-25')
```
