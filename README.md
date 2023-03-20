![PHP Version](https://img.shields.io/packagist/php-v/victormln/docker-php-testing)

# Introduction

Template repository to have PHP + Xdebug + Testing tools (PHPUnit + Infection)

## What is in this template

- PHP-fpm
- php.ini prepared to be edited by your own
- Composer
- Makefile
- Xdebug
- PHPUnit
- Infection

## Installation

1. From composer

```shell
$ composer create-project victormln/docker-php-testing your-project
```

OR with git:

```shell
$ git clone https://github.com/victormln/docker-php-testing.git your-project
```

2. Install repository

```shell
$ cd your-project
$ make install
```

3. Execute PHPUnit:

```shell
$ make test
```

4. Execute Infection:

```shell
$ make infection
```
