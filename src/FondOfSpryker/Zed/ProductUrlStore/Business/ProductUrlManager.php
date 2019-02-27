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

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductUrlTransfer
     */
    public function updateProductUrl(ProductAbstractTransfer $productAbstractTransfer)
    {
        $this->productQueryContainer->getConnection()->beginTransaction();

        $productUrl = $this->urlGenerator->generateProductUrl($productAbstractTransfer);

        foreach ($productAbstractTransfer->getStoreRelation()->getIdStores() as $idStore) {
            foreach ($productUrl->getUrls() as $localizedUrlTransfer) {
                $urlTransfer = $this->getUrlByIdProductAbstractIdStoreAndIdLocale(
                    $productAbstractTransfer->requireIdProductAbstract()->getIdProductAbstract(),
                    $idStore,
                    $localizedUrlTransfer->getLocale()->getIdLocale()
                );

                $urlTransfer
                    ->setUrl($localizedUrlTransfer->getUrl())
                    ->setFkLocale($localizedUrlTransfer->getLocale()->getIdLocale())
                    ->setFkStore($idStore)
                    ->setFkResourceProductAbstract($productAbstractTransfer->getIdProductAbstract());

                if ($urlTransfer->getIdUrl()) {
                    $this->urlFacade->updateUrl($urlTransfer);
                } else {
                    $this->urlFacade->createUrl($urlTransfer);
                }
            }
        }

        $this->productQueryContainer->getConnection()->commit();

        return $productUrl;
    }

    /**
     * @param int $idProductAbstract
     * @param int $idStore
     * @param int $idLocale
     *
     * @return \Generated\Shared\Transfer\UrlTransfer
     */
    protected function getUrlByIdProductAbstractIdStoreAndIdLocale($idProductAbstract, $idStore, $idLocale)
    {
        $urlEntity = $this->productQueryContainer
            ->queryUrlByIdProductAbstractIdStoreAndIdLocale($idProductAbstract, $idStore, $idLocale)
            ->findOneOrCreate();

        $urlTransfer = (new UrlTransfer())
            ->fromArray($urlEntity->toArray(), true);

        return $urlTransfer;
    }

}
