<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\ProductToUrlInterface;
use FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\StoreToProductStoreUrlBridgeInterface;
use FondOfSpryker\Zed\ProductUrlStore\ProductUrlStoreDependencyProvider;
use Spryker\Zed\Product\Business\ProductBusinessFactory as SprykerProductBusinessFactory;
use Spryker\Zed\Store\Business\StoreFacadeInterface;

/**
 * @method \Spryker\Zed\Product\ProductConfig getConfig()
 */
class ProductUrlStoreBusinessFactory extends SprykerProductBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\ProductUrlStore\Business\ProductUrlManagerInterface
     */
    public function createProductUrlManager(): ProductUrlManagerInterface
    {
        return new ProductUrlManager(
            $this->getUrlFacade(),
            $this->getTouchFacade(),
            $this->getLocaleFacade(),
            $this->getQueryContainer(),
            $this->createProductUrlGenerator(),
            $this->getStoreFacade()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\StoreToProductStoreUrlBridgeInterface
     * @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    protected function getStoreFacade(): StoreToProductStoreUrlBridgeInterface
    {
        return $this->getProvidedDependency(ProductUrlStoreDependencyProvider::FACADE_STORE);
    }

    /**
     * @return \FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\StoreToProductStoreUrlBridgeInterface
     * @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    protected function getUrlFacade(): ProductToUrlInterface
    {
        return $this->getProvidedDependency(ProductUrlStoreDependencyProvider::FACADE_URL);
    }
}
