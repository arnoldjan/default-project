<?php

namespace Ja\DefaultProject\Bundle\MainBundle\DependencyInjection;

use Ja\DefaultProject\Bundle\MainBundle\DependencyInjection\Compiler\ValidatorPass;
use Mi\PuliBundlePlugins\ServiceBundlePlugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MainPlugin extends ServiceBundlePlugin
{

    /**
     * @inheritDoc
     */
    public function name()
    {
        return 'main';
    }

    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ValidatorPass($this->discovery));
    }

    /**
     * @param array            $pluginConfiguration The part of the bundle configuration for this plugin
     * @param ContainerBuilder $container
     */
    protected function loadInternal(array $pluginConfiguration, ContainerBuilder $container)
    {

    }

}
