## Overview

This is an example project that uses PHPUnit to test classes which abide by the underscore-based naming convention.
I generated the example by copying and simplifying a test from larger project.

You will see a few key files:

* `CRM/Utils/String.php`: Defines a utility class (`CRM_Utils_String`) with some string-munging helpers (eg `ellipsify($string, $maxLen)`).
* `tests/phpunit/CRM/Utils/StringTest.php`: Defines a corresponding unit-test (`CRM_Utils_StringTest`) in the `tests/phpunit/` folder.

The example works in PHPUnit 5.x-8.x and fails in 9.x. (Output and commands shown below.)

## Setup

```
git clone https://FIXME/
cd phpunit-underscore-namespace
composer install
```

## Running with PHPUnit 8 

Running all tests:

```
$ phpunit8
PHPUnit 8.5.27 #StandWithUkraine

.                                                                   1 / 1 (100%)

Time: 195 ms, Memory: 12.00 MB

OK (1 test, 4 assertions)
```

Running tests by folder:

```
$ phpunit8 tests/phpunit/CRM/
PHPUnit 8.5.27 #StandWithUkraine

.                                                                   1 / 1 (100%)

Time: 147 ms, Memory: 12.00 MB

OK (1 test, 4 assertions)
```

Running tests by file:

```
$ phpunit8 tests/phpunit/CRM/Utils/StringTest.php
PHPUnit 8.5.27 #StandWithUkraine

.                                                                   1 / 1 (100%)

Time: 166 ms, Memory: 12.00 MB

OK (1 test, 4 assertions)
```

## Running with PHPUnit 9

Running all tests:

```
phpunit9
PHPUnit 9.5.21 #StandWithUkraine

Warning:       Your XML configuration validates against a deprecated schema.
Suggestion:    Migrate your XML configuration using "--migrate-configuration"!

.                                                                   1 / 1 (100%)

Time: 00:00.001, Memory: 20.00 MB

OK (1 test, 4 assertions)
```

Running tests by folder:

```
$ phpunit9 tests/phpunit/CRM/
PHPUnit 9.5.21 #StandWithUkraine

Warning:       Your XML configuration validates against a deprecated schema.
Suggestion:    Migrate your XML configuration using "--migrate-configuration"!

Warning:       Test case class not matching filename is deprecated
               in /home/me/tmp/testexample/tests/phpunit/CRM/Utils/StringTest.php
               Class name was 'CRM_Utils_StringTest', expected 'StringTest'

.                                                                   1 / 1 (100%)

Time: 00:00.001, Memory: 20.00 MB

OK (1 test, 4 assertions)
```

Running tests by file:

```
$ phpunit9 tests/phpunit/CRM/Utils/StringTest.php
Class 'StringTest' could not be found in '/home/me/tmp/testexample/tests/phpunit/CRM/Utils/StringTest.php'.
```
