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
use Fangx\Facade\Service\CommandService;
use Hyperf\Utils\ApplicationContext;

/**
 * @method static CommandService call($command, array $parameters = [], $outputBuffer = null)
 */
class Command extends Facade
{
    public static function getFacadeAccessor()
    {
        return ApplicationContext::getContainer()->get(CommandService::class);
    }
}
