<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductUrlTransfer;
use Spryker\Zed\Product\Business\ProductFacade as SprykerProductFacade;

/**
 * @method \FondOfSpryker\Zed\ProductUrlStore\Business\ProductUrlBusinessFactory getFactory()
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
    public function createProductAbstractUrl(ProductAbstractTransfer $productAbstractTransfer): ProductUrlTransfer
    {
        return $this->getFactory()
            ->createProductUrlManager()
            ->createProductUrl($productAbstractTransfer);
    }
}
