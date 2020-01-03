<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Persistence;

use Spryker\Zed\Product\Persistence\ProductQueryContainer as SprykerProductQueryContainer;

class ProductUrlStoreQueryContainer extends SprykerProductQueryContainer implements ProductUrlStoreQueryContainerInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $idProductAbstract
     * @param int $idStore
     * @param int $idLocale
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery
     */
    public function queryUrlByIdProductAbstractidStoreAndIdLocale($idProductAbstract, $idStore, $idLocale)
    {
        return $this->getFactory()
            ->getUrlQueryContainer()
            ->queryUrls()
            ->filterByFkResourceProductAbstract($idProductAbstract)
            ->filterByFkStore($idStore)
            ->filterByFkLocale($idLocale);
    }
}
