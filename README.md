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
    
TODO
---------
1. 阅读 EvaEngine 源代码，更深刻地理解该框架
2. 设置 Model 之间 hasMany，hasOne 等映射关系
3. 检查为什么 / 路径没有被 router 解析到
5. 阅读 Phalcon 的文档和代码，理解其框架
6. Phalcon 和 EvaEngine 里让代码更完善和健壮的 Common Practice

Screenshots
---------

![Alt text](/screen_shots/index-index.png?raw=true "index-index")

![Alt text](/screen_shots/user-register.png?raw=true "user-register")

![Alt text](/screen_shots/article-create.png?raw=true "article-create")

![Alt text](/screen_shots/article-view.png?raw=true "article-view")
