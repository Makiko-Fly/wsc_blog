wsc_blog
=========

A demo using EvaEngine

Env Setup
---------

####Step0. Prepare PHP
version requirement: 
5.5 or plus.

php.ini:
short_open_tag = On

####Step1. Build Phalcon
use version 1.3, newer version doesn't work with current EvaEngine.

    git clone https://github.com/phalcon/cphalcon.git
    git checkout phalcon-v1.3.2
    cd build
    sudo ./install

####Step2. Install dependency libs

    php composer.phar install

Screenshots
---------

![Alt text](/screen_shots/index-index.png?raw=true "index-index")

![Alt text](/screen_shots/user-register.png?raw=true "user-register")
