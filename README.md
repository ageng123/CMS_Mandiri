
# Folder Structure

```
codeigniter/
├── application/
├── composer.json
├── composer.lock
├── public/
│   ├── .htaccess
│   └── index.php
└── vendor/
    └── codeigniter/
        └── framework/
            └── system/
```

## Requirements

* PHP 5.3.7 or later
* `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
* Git
* Bootstrap 4.5

## How to Use

### Install CodeIgniter
1. Pull github from repository : 
```
$ git clone git@github.com:ageng123/CMS_Mandiri.git
```
or 
```
$ git clone https://github.com/ageng123/CMS_Mandiri.git
```
2. Then Update with :
```
$ composer update
```
#### Install Translations for System Messages

If you want to install translations for system messages:

```
$ cd /path/to/codeigniter
$ php bin/install.php translations 3.1.0
```

#### Install Third Party Libraries

[Codeigniter Matches CLI](https://github.com/avenirer/codeigniter-matches-cli):

```
$ php bin/install.php matches-cli master
```

[CodeIgniter HMVC Modules](https://github.com/jenssegers/codeigniter-hmvc-modules):

```
$ php bin/install.php hmvc-modules master
```

[Modular Extensions - HMVC](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc):

```
$ php bin/install.php modular-extensions-hmvc codeigniter-3.x
```

[Ion Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth):

```
$ php bin/install.php ion-auth 2
```

[CodeIgniter3 Filename Checker](https://github.com/kenjis/codeigniter3-filename-checker):

```
$ php bin/install.php filename-checker master
```

[CodeIgniter Rest Server](https://github.com/chriskacerguis/codeigniter-restserver):

```
$ php bin/install.php restserver 2.7.2
```
[CodeIgniter Developer Toolbar](https://github.com/JCSama/CodeIgniter-develbar):

```
$ php bin/install.php codeigniter-develbar master
```

### Run PHP built-in server (PHP 5.4 or later)

```
$ cd /path/to/codeigniter
$ bin/server.sh
```