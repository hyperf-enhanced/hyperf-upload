<?php

return [
    // Disk in `config/filesystem.php`.
    'disk' => 'oss',
    'host' => '',
    'save_path' => '/upload',
    'uniqueName' => false,
    // 直传目录
    'directory' => [
        'image' => 'images',
        'file' => 'files',
    ],
    'image_size' => 1024 * 1024 * 5,
    'file_size' => 1024 * 1024 * 5,
    //文件上传类型
    'file_mimes' => 'txt,sql,zip,rar,ppt,word,xls,xlsx,doc,docx',
    //文件上传类型
    'image_mimes' => 'jpeg,bmp,png,gif,jpg',
    //直传回调域名
    'callback_url' => env('CALLBACK_URL',''),
    //直传token过期时间
    'token_expire' => env('TOKEN_EXPIRE', 30),
];