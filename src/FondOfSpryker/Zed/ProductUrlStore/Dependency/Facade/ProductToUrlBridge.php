<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade;

use Generated\Shared\Transfer\UrlTransfer;
use FondOfSpryker\Zed\Product\Dependency\Facade\ProductToUrlBridge as FondOfSprykerProductToUrlBridge;

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
