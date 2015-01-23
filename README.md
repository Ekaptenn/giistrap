# giiStrap
Another fun CRUD generator for YiiStrap.
`Support Bootstrap 2.3.2`
`Support YiiFramework 1.1.16`

#1. Download

[Download](https://github.com/Ekaptenn/giistrap/archive/master.zip) the package and unzip its contents in your extensions folder. 
`You can also clone the git repository.`

```
  protected
  └── extensions
      └── giiStrap
          └── bootstrap
```
#2. Configuration

Open your application configuration in **protected/config/main.php** and modify it according to the following example:

```php
'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'123',
            'generatorPaths' => array(
              'ext.giiStrap', 
            ),
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
```

#3. Example
![alt text](http://i.imgur.com/NZWjeNf.png "GiiStrap Generator!")
#4. Credits

* [YiiStrap](http://www.getyiistrap.com/)
* [TCPDF](http://www.tcpdf.org/)
* [Sirin K](https://twitter.com/sirin_ibin)
* [Ekaptenn](https://github.com/Ekaptenn/)

#5. Enjoy!

![alt text](http://i.imgur.com/4yfFvbE.jpg "If u like?, FAV Please!")

