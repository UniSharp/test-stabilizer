# PHPUnit Stabilizer

Make your tests more stable.

[![Build Status](https://travis-ci.org/UniSharp/test-stabilizer.svg?branch=master)](https://travis-ci.org/UniSharp/test-stabilizer)

![test-stabilizer](https://i.imgur.com/1CSkLH5.png)

## Installation

```bash
composer require unisharp/test-stabilizer --dev
```

Once installed, add the following attributes to the <phpunit> element in your phpunit.xml file:

```
printerFile="vendor/unisharp/test-stabilizer/src/PHPUnit/ResultPrinter.php"
printerClass="UniSharp\PHPUnit\ResultPrinter"
```
