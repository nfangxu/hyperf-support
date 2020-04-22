<?php
declare(strict_types=1);

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
