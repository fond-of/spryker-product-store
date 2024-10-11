<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use FondOfSpryker\Zed\Product\Business\Product\Url\ProductUrlManagerInterface;
use FondOfSpryker\Zed\Product\Business\ProductBusinessFactory;
use FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\ProductUrlStoreToStoreFacadeInterface;
use FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\ProductUrlStoreToUrlFacadeInterface;
use FondOfSpryker\Zed\ProductUrlStore\ProductUrlStoreDependencyProvider;

/**
 * @method \Spryker\Zed\Product\ProductConfig getConfig()
 * @method \FondOfSpryker\Zed\ProductUrlStore\Persistence\ProductUrlStoreQueryContainer getQueryContainer()
 */
class ProductUrlStoreBusinessFactory extends ProductBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\Product\Business\Product\Url\ProductUrlManagerInterface
     */
    public function createProductUrlManager(): ProductUrlManagerInterface
    {
        return new ProductUrlManager(
            $this->getUrlFacade(),
            $this->getTouchFacade(),
            $this->getLocaleFacade(),
            $this->getQueryContainer(),
            $this->createProductUrlGenerator(),
            $this->createProductEventTrigger(),
            $this->getStoreFacade(),
        );
    }

    /**
     * @return \FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade\ProductUrlStoreToStoreFacadeInterface
     */
    protected function getStoreFacade(): ProductUrlStoreToStoreFacadeInterface
    {
        return $this->getProvidedDependency(ProductUrlStoreDependencyProvider::FACADE_STORE);
    }
}
