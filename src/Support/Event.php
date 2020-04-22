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

namespace Fangx\Facade\Support;

use Fangx\Facade\Facade;
use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Class Event.
 *
 * @method static void dispatch(object $event)
 */
class Event extends Facade
{
    public static function getFacadeAccessor()
    {
        return EventDispatcherInterface::class;
    }
}
