# WordPress Multi-Tenancy

Setup a new WordPress installation via Composer

## Requirements

PHP 5.3.2+

## Prerequisites

Install Composer by running `curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer` on Linux/Unix/OSX

## Installation

```bash
$ composer install
```

## Configuration

- Create a new folder in the sites directory and copy over the files from the site template.
- Setup the domain in the hosts file on the server.
- Configure the web server to route requests for the domain to the appropriate site folder.
- Ensure that the site's MySQL database is created and wp-config-local.php is updated.