<?php

/**
 * This file is part of the Arachne
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\LinkNewTab\DI;

use Nette\DI\CompilerExtension;

/**
 * @author Jáchym Toušek <enumag@gmail.com>
 */
class LinkNewTabExtension extends CompilerExtension
{
    public function beforeCompile()
    {
        $builder = $this->getContainerBuilder();

        $builder->getDefinition($builder->getByType('Nette\Bridges\ApplicationLatte\ILatteFactory'))
            ->addSetup('?->onCompile[] = function ($engine) { \Arachne\LinkNewTab\Latte\LinkNewTabMacro::install($engine->getCompiler()); }', ['@self']);
    }
}
