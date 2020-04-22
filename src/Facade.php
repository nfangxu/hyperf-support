<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Fangx\Facade;

use Hyperf\Utils\ApplicationContext;

abstract class Facade
{
    public static function __callStatic($method, $args)
    {
        $instance = static::getFacadeRoot();

        if (! $instance) {
            throw new \RuntimeException('A facade root has not been set.');
        }

        return $instance->{$method}(...$args);
    }

    protected static function getFacadeRoot()
    {
        return static::resolveFacadeInstance(static::getFacadeAccessor());
    }

    protected static function resolveFacadeInstance($name)
    {
        if (is_object($name)) {
            return $name;
        }

        return ApplicationContext::getContainer()->get($name);
    }

    abstract protected static function getFacadeAccessor();
}
