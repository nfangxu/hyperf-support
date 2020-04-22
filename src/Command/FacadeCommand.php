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

namespace Fangx\Facade\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Devtool\Generator\GeneratorCommand;

/**
 * @Command
 */
class FacadeCommand extends GeneratorCommand
{
    public function __construct()
    {
        parent::__construct('gen:facade');
        $this->setDescription('Create a new facade class');
    }

    protected function getStub(): string
    {
        return $this->getConfig()['stub'] ?? __DIR__ . '/stub/facade.stub';
    }

    protected function getDefaultNamespace(): string
    {
        return $this->getConfig()['namespace'] ?? 'App\\Facade';
    }
}
