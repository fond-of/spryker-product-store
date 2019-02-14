<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use Spryker\Zed\Product\Business\ProductBusinessFactory as SprykerProductBusinessFactory;

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
            $this->createProductUrlGenerator()
        );
    }
}
