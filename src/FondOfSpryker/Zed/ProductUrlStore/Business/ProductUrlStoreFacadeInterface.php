<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductUrlTransfer;
use Spryker\Zed\Product\Business\ProductFacadeInterface as SprykerProductFacadeInterface;

interface ProductUrlStoreFacadeInterface extends SprykerProductFacadeInterface
{
    /**
     * Specification:
     * - Adds abstract product url.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductUrlTransfer
     */
    public function createProductAbstractUrl(ProductAbstractTransfer $productAbstractTransfer): ProductUrlTransfer;

}
