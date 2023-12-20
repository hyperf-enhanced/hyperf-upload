# hyperf-pro-yy/upload

* 安装
composer require hyperf-pro-yy/upload

* 发布
php bin/hyperf.php vendor:publish hyperf-pro-yy/upload

* 上传配置：upload.php 上传驱动 disk 目前仅支持 oss


* 文件配置：file.php 使用方式和hyperf上传模块一致



* POST {{host}}/upload/file  参数：file

* POST {{host}}/upload/token  参数：file

