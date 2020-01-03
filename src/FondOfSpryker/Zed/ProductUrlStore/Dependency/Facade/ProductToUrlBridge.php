<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade;

use Generated\Shared\Transfer\UrlTransfer;
use Spryker\Zed\Product\Dependency\Facade\ProductToUrlBridge as SprykerProductToUrlBridge;

class ProductToUrlBridge extends SprykerProductToUrlBridge implements ProductToUrlInterface
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
