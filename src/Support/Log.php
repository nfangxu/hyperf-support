<?php
declare(strict_types=1);

namespace Fangx\Facade\Support;

use Fangx\Facade\Facade;
use Hyperf\Utils\ApplicationContext;

/**
 * Class Log.
 *
 * @method static emergency($message, array $context = array())
 * @method static alert($message, array $context = array())
 * @method static critical($message, array $context = array())
 * @method static error($message, array $context = array())
 * @method static warning($message, array $context = array())
 * @method static notice($message, array $context = array())
 * @method static info($message, array $context = array())
 * @method static debug($message, array $context = array())
 * @method static log($level, $message, array $context = array())
 *
 * @see \Psr\Log\LoggerInterface
 */
class Log extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ApplicationContext::getContainer()
            ->get(\Hyperf\Logger\LoggerFactory::class)
            ->get();
    }
}
