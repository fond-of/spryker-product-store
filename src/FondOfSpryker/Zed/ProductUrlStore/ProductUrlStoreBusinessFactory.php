<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use Spryker\Zed\Product\Business\ProductBusinessFactory as SprykerProductBusinessFactory;
use FondOfSpryker\Zed\ProductUrlStore\Business\ProductUrlManager;

/**
 * @method \Spryker\Zed\Product\Persistence\ProductQueryContainerInterface getQueryContainer()
 */
class ProductUrlStoreBusinessFactory extends SprykerProductBusinessFactory
{

    /**
     * @return \Spryker\Zed\Product\Business\Product\Url\ProductUrlManagerInterface
     */
    public function createProductUrlManager()
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
