<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\UrlTransfer;
use Spryker\Zed\Product\Business\Product\Url\ProductUrlManager as SprykerProductUrlMananger;

class ProductUrlManager extends SprykerProductUrlMananger implements ProductUrlManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductUrlTransfer
     */
    public function createProductUrl(ProductAbstractTransfer $productAbstractTransfer)
    {
        $this->productQueryContainer->getConnection()->beginTransaction();

        $productUrl = $this->urlGenerator->generateProductUrl($productAbstractTransfer);

        foreach ($productAbstractTransfer->getStoreRelation()->getIdStores() as $idStore) {
            foreach ($productUrl->getUrls() as $localizedUrlTransfer) {
                $urlTransfer = new UrlTransfer();
                $urlTransfer
                    ->setUrl($localizedUrlTransfer->getUrl())
                    ->setFkLocale($localizedUrlTransfer->getLocale()->getIdLocale())
                    ->setFkStore($idStore)
                    ->setFkResourceProductAbstract($productAbstractTransfer->requireIdProductAbstract()->getIdProductAbstract());

                $this->urlFacade->createUrl($urlTransfer);
            }
        }

        $this->productQueryContainer->getConnection()->commit();

        return $productUrl;
    }

}
