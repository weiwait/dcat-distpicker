# Dcat Admin Extension

### 演示地址
[demo: http://dcat.weiwait.cn (admin:admin)](http://dcat.weiwait.cn/admin/demo-distpickers/create 'user: admin psw: admin')

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
        ->height(500) // 设置地图高度 默认300
        ->disableMap() // 关闭地图
```

![示例图片](https://github.com/weiwait/images/blob/main/dcat-distpicker.png?raw=true)

### Donate
![示例图片](https://github.com/weiwait/images/blob/main/donate.png?raw=true)

### Dcat-admin 扩展列表
1. [单图裁剪](https://github.com/weiwait/dcat-cropper)
2. [区划级联+坐标拾取](https://github.com/weiwait/dcat-distpicker)
3. [smtp快速便捷配置](https://github.com/weiwait/dcat-smtp)
4. [sms channel 快速便捷配置](https://github.com/weiwait/dcat-easy-sms)
