<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Persistence;

use Spryker\Zed\Product\Persistence\ProductQueryContainerInterface as SprykerProductQueryContainerInterface;

interface ProductUrlStoreQueryContainerInterface extends SprykerProductQueryContainerInterface
{
    /**
     * @api
     *
     * @param int $idProductAbstract
     * @param int $idStore
     * @param int $idLocale
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery
     */
    public function queryUrlByIdProductAbstractidStoreAndIdLocale($idProductAbstract, $idStore, $idLocale);
}
