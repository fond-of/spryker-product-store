<?php

namespace FondOfSpryker\Zed\ProductUrlStore;

use FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\ProductToUrlBridge;
use FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\StoreToProductStoreUrlBridge;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Product\ProductDependencyProvider as SprykerProductDependencyProvider;

class ProductUrlStoreDependencyProvider extends SprykerProductDependencyProvider
{
    public const FACADE_STORE = 'FACADE_STORE';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        $container = $this->addStoreFacade($container);
        $container = $this->addUrlFacade($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addStoreFacade(Container $container): Container
    {
        $container[self::FACADE_STORE] = function (Container $container) {
            return new StoreToProductStoreUrlBridge($container->getLocator()->store()->facade());
        };

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUrlFacade(Container $container): Container
    {
        $container[self::FACADE_URL] = function (Container $container) {
            return new ProductToUrlBridge($container->getLocator()->url()->facade());
        };

        return $container;
    }
}
