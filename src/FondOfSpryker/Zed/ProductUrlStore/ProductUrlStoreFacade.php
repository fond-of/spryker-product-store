<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Product\Business\ProductFacade as SprykerProductFacade;

/**
 * @method \FondOfSpryker\Zed\ProductUrlStore\Business\ProductUrlStoreBusinessFactory getFactory()
 */
class ProductUrlStoreFacade extends SprykerProductFacade implements ProductUrlStoreFacadeInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductUrlTransfer
     */
    public function createProductUrl(ProductAbstractTransfer $productAbstractTransfer)
    {
        return $this->getFactory()
            ->createProductUrlManager()
            ->createProductUrl($productAbstractTransfer);
    }
}
