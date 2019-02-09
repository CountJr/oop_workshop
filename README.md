# oop_workshop

Installation / Usage
--------------------

1. Download and install Composer by following the [official instructions](https://getcomposer.org/download/).
2. Create a composer.json defining your dependencies.

    ``` json
    "require": {
        "CountJr/convert": "dev-master"
      },
      "repositories": [
        {
          "type": "vcs",
          "url": "https://github.com/CountJr/oop_workshop"
        }
      ],
    ```

3. Run Composer: `php composer.phar install`

Global installation of Composer (manual)
----------------------------------------

Follow instructions [in the documentation](https://getcomposer.org/doc/00-intro.md#globally)

CLI usage
---------

Run Converter: `php composer.phar exec ipgeo -i IpAddress`

Library usage
-------------

Build convert function:

```
$ipgeo = new \Countjr\Ipgep\Ipgeo();
$result = $ipgeo->getLocation('IpAddress');
```

Requirements
------------

PHP 7.2