<?php

namespace Ja\DefaultProject\Bundle\MainBundle\DependencyInjection\Compiler;

use Puli\Discovery\Api\Discovery;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

abstract class PuliPass implements CompilerPassInterface
{
    /**
     * @var Discovery
     */
    protected $discovery;

    /**
     *
     * @param Discovery $discovery
     */
    public function __construct($discovery)
    {
        $this->discovery = $discovery;
    }
}
