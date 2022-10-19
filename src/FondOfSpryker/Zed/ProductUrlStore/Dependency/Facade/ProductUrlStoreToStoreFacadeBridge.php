<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade;

use Spryker\Zed\Product\Dependency\Facade\ProductToStoreBridge;

class ProductUrlStoreToStoreFacadeBridge extends ProductToStoreBridge implements ProductUrlStoreToStoreFacadeInterface
{
    /**
     * @return array<\Generated\Shared\Transfer\StoreTransfer>
     */
    public function getAllStores(): array
    {
        return $this->storeFacade->getAllStores();
    }
}
