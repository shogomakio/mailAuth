<?php

return array(


    'pdf' => array(
        'enabled' => true,
        // 'binary'  => base_path('vendor/h4cc/wkhtmltopdf-i386/bin/wkhtmltopdf-i386'),
        // 'binary'  => '/usr/local/bin/wkhtmltopdf', 
        'binary' => 'C:/wkhtmltopdf/bin/wkhtmltopdf.exe',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary' => 'C:/wkhtmltopdf/bin/wkhtmltoimage.exe',
        // 'binary'  => base_path('vendor/h4cc/wkhtmltoimage-i386/bin/wkhtmltoimage-i386'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
