# Hyperf 下 facade 支持

>  与 laravel 中的使用方法大致相同, 直接使用静态方式调用, 免去 di 的过程

```
composer require fangx/facade
```

# 内置

- `Fangx\Facade\Support\Event` => `Psr\EventDispatcher\EventDispatcherInterface`
- `Fangx\Facade\Support\Log` => `Psr\Log\LoggerInterface`
- `Fangx\Facade\Support\File` => `League\Flysystem\Filesystem`
    - 需要安装并配置 `hyperf/filesystem`