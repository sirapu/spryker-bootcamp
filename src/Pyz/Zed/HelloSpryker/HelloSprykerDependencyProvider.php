<?php

namespace Pyz\Zed\HelloSpryker;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class HelloSprykerDependencyProvider extends AbstractBundleDependencyProvider
{

    public const FACADE_STRING_REVERSER = 'FACADE_STRING_REVERSER';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideCommunicationLayerDependencies(Container $container)
    {
        //TODO Provide dependencies

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container)
    {
        $container = $this->addStringReverserFacade($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addStringReverserFacade(Container $container): Container
    {
        $container->set(static::FACADE_STRING_REVERSER, function(Container $container) {
            return $container->getLocator()->stringReverser()->facade();
        });

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function providePersistenceLayerDependencies(Container $container)
    {
        //TODO Provide dependencies

        return $container;
    }

}
