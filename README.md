# wuguoqiang/util-laravel

这里是对于框架的介绍

# 对于框架的 要求

Laravel >= 5.1 & PHP > 7.1.3 

# 安装的方式

```yml
composer require "wuguoqiang/util-laravel"
```

# 配置方式
5.5手动配置laravel对于``WuGuoQiang\\UtilLaravel\\Providers\\UtilServiceProvider::class``服务放到config/app.php中

解释路由
```php
<?php
Route::get('/', 'SutilController@index');
Route::post('/', 'SutilController@store')->name('junit.store');
?>
```

# git -> 注册一个GitHub账号
