# Dcat Admin Extension

### 演示地址
[demo: http://dcat.weiwait.cn](http://dcat.weiwait.cn/admin/demo-distpickers/create 'user: admin psw: admin')

### 通过 composer 安装扩展
```shell
  composer require weiwait/dcat-distpicker
```
### 发布静态资源
```shell
  php artisan vendor:publish --tag=weiwait.dcat-distpicker
```

### 更新 dcat-admin ide-helper
```shell
  php artisan admin:ide-helper
```

```php
    $form->distpicker(['province', 'city', 'district'], 'label')
        ->deitail('detail') // 使用地址详细
        ->coordinate(['longitude', 'latitude']) // 使用经度纬度坐标
        ->height(500); // 设置地图高度 默认300
```

![示例图片](https://github.com/weiwait/images/blob/main/dcat-distpicker.png?raw=true)
