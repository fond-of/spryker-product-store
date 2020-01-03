<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade;

interface StoreToProductStoreUrlBridgeInterface
{
    /**
     * @return \Generated\Shared\Transfer\StoreTransfer[]
     */
    public function getAllStores(): array;
}
