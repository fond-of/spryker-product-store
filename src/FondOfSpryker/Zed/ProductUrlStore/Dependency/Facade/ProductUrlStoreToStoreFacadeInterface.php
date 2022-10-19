<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade;

use Spryker\Zed\Product\Dependency\Facade\ProductToStoreInterface;

interface ProductUrlStoreToStoreFacadeInterface extends ProductToStoreInterface
{
    /**
     * @return array<\Generated\Shared\Transfer\StoreTransfer>
     */
    public function getAllStores(): array;
}
