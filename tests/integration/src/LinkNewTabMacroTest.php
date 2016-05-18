<?php

namespace Tests\Integration;

use Arachne\Bootstrap\Configurator;
use Codeception\Test\Unit;
use Nette\Bridges\ApplicationLatte\ILatteFactory;

/**
 * @author Jáchym Toušek <enumag@gmail.com>
 */
class LinkNewTabMacroTest extends Unit
{
    public function testMacro()
    {
        $container = $this->createContainer('config.neon');

        $this->assertSame(
            '<a href="http://google.com" target="_blank" rel="noopener noreferrer">google</a>',
            trim($container->getByType(ILatteFactory::class)->create()->renderToString(__DIR__ . '/../templates/template.latte'))
        );
    }

    private function createContainer($file)
    {
        $config = new Configurator();
        $config->setTempDirectory(TEMP_DIR);
        $config->addConfig(__DIR__ . '/../config/' . $file);
        return $config->createContainer();
    }
}
