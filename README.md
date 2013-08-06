# FacebookBundle.
## Introduction
FacebookBundle is simple integration with [Facebook php-sdk](https://github.com/facebook/facebook-php-sdk) library.

## Requirements

  * Zend Framework 2 (https://github.com/zendframework/zf2). Tested on Zend Framework 2.0.0beta4.
  * PHP 5.3 or gather

## Installation

  1. `cd my/project/directory`
  2. Create a `composer.json` file with following content:
``` json
{
    "require": {
        "widmogrod/zf2-facebook-module": "dev-master"
    }
}
```
  3. Run `php composer.phar install`
  4. Open ``configs/application.config.php`` and add ``'FacebookBundle'`` to your ``'modules'`` parameter.


## How to setup
``` php
<?php
// configs/autoload/local.php
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'facebook' => 'Facebook',
            ),
            'facebook' => array(
                'config' => array(
                    'appId'                => 'your_app_id',
                    'secret'               => 'your_secret',
                )
            )
        ),
    ),
);
?>
```
## How to use

``` php
// in controller
$this->getServiceLocator()->get('facebook') // Facebook object
```