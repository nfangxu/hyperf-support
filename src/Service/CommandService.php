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

namespace Fangx\Facade\Service;

use Hyperf\Contract\ApplicationInterface;
use Hyperf\Utils\ApplicationContext;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;

class CommandService
{
    /**
     * @var OutputInterface
     */
    protected $lastOutput;

    /**
     * @var int
     */
    protected $exitCode;

    public function call($command, array $parameters = [], $outputBuffer = null)
    {
        $this->lastOutput = $outputBuffer ?: new BufferedOutput();

        $parameters['command'] = $command;

        $app = ApplicationContext::getContainer()
            ->get(ApplicationInterface::class);

        $app->setAutoExit(false);

        $this->exitCode = $app->run(new ArrayInput($parameters), $this->lastOutput);

        return $this;
    }

    public function code()
    {
        return $this->exitCode;
    }

    public function output()
    {
        return $this->lastOutput && method_exists($this->lastOutput, 'fetch')
            ? $this->lastOutput->fetch()
            : '';
    }
}
