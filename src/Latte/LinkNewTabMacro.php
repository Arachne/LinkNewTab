<?php

/**
 * This file is part of the Arachne
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\LinkNewTab\Latte;

use Latte\Compiler;
use Latte\MacroNode;
use Latte\Macros\MacroSet;
use Latte\PhpWriter;

/**
 * @author Jáchym Toušek <enumag@gmail.com>
 */
class LinkNewTabMacro extends MacroSet
{
    public static function install(Compiler $compiler)
    {
        (new static($compiler))
            ->addMacro(
                'linkNewTab',
                null,
                null,
                function (MacroNode $node, PhpWriter $writer) {
                    return $writer->write('echo \' href="\' . %node.word . \'" target="_blank" rel="noopener noreferrer"\';');
                }
            );
    }
}
