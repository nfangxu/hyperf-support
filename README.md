# Hyperf 下 facade 支持

>  与 laravel 中的使用方法大致相同, 直接使用静态方式调用, 免去 di 的过程

```
composer require fangx/hyperf-support
```

# 内置

## v1.2
- `Fangx\Facade\Support\Schema` => `Hyperf\Database\Schema\Builder`, 使用方法等同于 `Hyperf\Database\Schema\Schema`

## v1.1
- `Fangx\Facade\Support\Command` => `Fangx\Facade\Service\CommandService`

## v1.0
- `Fangx\Facade\Support\Event` => `Psr\EventDispatcher\EventDispatcherInterface`
- `Fangx\Facade\Support\Log` => `Psr\Log\LoggerInterface`
- `Fangx\Facade\Support\File` => `League\Flysystem\Filesystem`
    - 需要安装并配置 `hyperf/filesystem`
