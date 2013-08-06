<?php
return array(

    /*
     * Is not required IF 'di->instance->facebook' config section is set.
     * User configuration layout will be propagated to 'di->instance->facebook' IF 'di->instance->facebook->config' is not set.
     */
    'FacebookBundle' => array(
        'appId'                => 'your_app_id',
        'secret'               => 'your_secret',
    )
);
