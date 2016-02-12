wsc_blog
=========

A demo using EvaEngine

Env Setup
---------

(Make sure PHP5.5 or plus is installed on the system.)

####Step1. Build Phalcon
use version 1.3, newer version doesn't work with current EvaEngine.

    git clone https://github.com/phalcon/cphalcon.git
    git checkout phalcon-v1.3.2
    cd build
    sudo ./install

####Step2. Install dependency libs

php composer.phar install
