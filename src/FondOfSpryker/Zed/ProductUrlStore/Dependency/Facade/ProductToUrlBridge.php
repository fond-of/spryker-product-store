<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade;

use FondOfSpryker\Zed\Product\Dependency\Facade\ProductToUrlBridge as FondOfSprykerProductToUrlBridge;
use Generated\Shared\Transfer\UrlTransfer;

class ProductToUrlBridge extends FondOfSprykerProductToUrlBridge implements ProductToUrlInterface
{
    /**
     * @param \Generated\Shared\Transfer\UrlTransfer $urlTransfer
     *
     * @return \Generated\Shared\Transfer\UrlTransfer|null
     */
    public function findUrl(UrlTransfer $urlTransfer): ?UrlTransfer
    {
        return $this->urlFacade->findUrl($urlTransfer);
    }
}
