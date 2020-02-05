<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Communication\Plugin\Url;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Product\Dependency\Plugin\ProductAbstractPluginCreateInterface;

/**
 * @method \FondOfSpryker\Zed\ProductUrlStore\Business\ProductStoreUrlFacadInterface getFacade()
 * @method \FondOfSpryker\Zed\ProductUrlStore\ProductUrlStoreConfig getConfig()
 * @method \FondOfSpryker\Zed\ProductUrlStore\Persistence\ProductUrlStoreQueryContainerInterface getQueryContainer()
 */
class UrlProductAbstractAfterCreatePlugin extends AbstractPlugin implements ProductAbstractPluginCreateInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function create(ProductAbstractTransfer $productAbstractTransfer): ProductAbstractTransfer
    {
        $this->getFacade()->createProductAbstractUrl($productAbstractTransfer);

        return $productAbstractTransfer;
    }
}
