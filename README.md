# Linux Dash

[![Linux Dash Gitter chat](https://badges.gitter.im/gitterHQ/gitter.png)](https://gitter.im/afaqurk/linux-dash)

A simple, low-overhead web dashboard for GNU / Linux. (~1MB)

[**DEMO**](http://linuxdash.afaqtariq.com) | [**Installation Instructions**](#installation) | [**Support**](#support)

![Linux Dash screenshot](https://raw.githubusercontent.com/afaqurk/screenshots/master/linux-dash/system-status-full.png)

## Features
* A beautiful, simple web-based dashboard for monitoring a linux server
* Only ~1MB on disk! *(.git removed)*
* Live graphs, refresh-able widgets, and a growing # of supported modules
* Drop-in installation for PHP (Apache, NGINX)

## Installation

### 1. Download Linux Dash

Clone the git repo: 
```shell
git clone https://github.com/afaqurk/linux-dash.git
```
*Alternatives*: 
- Install the [Composer](https://packagist.org/packages/afaqurk/linux-dash) package
```bash
composer create-project afaqurk/linux-dash -s dev
```
- Download the source at: https://github.com/afaqurk/linux-dash/archive/master.zip

### 2. Secure Linux Dash
*Rename "config_exaple.php" to "config.php" and edit your configuration.*
*Beware: secure login work only on PHP. Removed Node/Go files. *


### 3. Start Linux Dash
See the section for your platform. 

#### PHP
1. Make sure you have the `exec`, `shell_exec`, and `escapeshellarg` functions enabled
2. Restart your web server (Apache, nginx, etc.) 
  - For PHP + Apache setup follow the [Digital Ocean tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-linux-dash-on-ubuntu-14-04).
  - For help with nginx setup, see [this gist](https://gist.github.com/sergeifilippov/8909839) by [@sergeifilippov](https://github.com/sergeifilippov).

### 4. Optional
Replace img/logo.png with your logo

## Goals for v2.0
- [x] Backend ported to ~~Python~~ shell scripts & python from PHP
- [x] Add config file
- [x] Segregate core code-base and modules
- [ ] ~~Each module in a separate directory with front-end template, back-end file, bash script~~
- [ ] Add angular element to show info section for a module
- [ ] Angular tests
- [ ] Back-end tests
  - [ ] for shell files
  - [ ] for PHP, NodeJS, & Go
- [ ] "Quick Guide to Contributing" Wiki page
- Add project to package managers
  - [x] npm
  - [x] composer
  - [ ] aur
  - [ ] apt
- [x] Bonus: 
  - [x] multiple server side languages supported
  - [ ] use websockets in PHP & NodeJS

## Support

For help with general setup and configuration issues please use the [Linux Dash Gitter](https://gitter.im/afaqurk/linux-dash).

The following categories are targeted by the Linux Dash project:
* OS
 * Arch
 * Debian 6,7
 * Ubuntu 11.04+
 * Linux Mint 16+
 * CentOS 5, 6
* Backend
 * Node.js
 * Go
 * PHP 5
