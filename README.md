# CALNEDAR HELPER

_Function collections for working with a calendar._

## Installation

```shell
composer require fzed51/canlendar-helper
```

## Use

### Is a bisextile year

```php
\CalendarHelper\Calendar::isBisextile(2020);
\CalendarHelper\Calendar::isBisextile(new Date());
```

return boolean

### Number of days in the month

```php
\CalendarHelper\Calendar::numberOfDays(2020,06);
\CalendarHelper\Calendar::numberOfDays(new Date());
```

return int

### Is a holidays

```php
\CalendarHelper\Calendar::numberOfDays(2020,07,14);
\CalendarHelper\Calendar::numberOfDays(new Date());
```

return boolean

### List the holidays of a year

```php
\CalendarHelper\Calendar::holidaysList();
```

return \DateTime[]
