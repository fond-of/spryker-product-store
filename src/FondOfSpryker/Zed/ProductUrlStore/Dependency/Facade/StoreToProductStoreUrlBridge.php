<?php

namespace FondOfSpryker\Zed\ProductUrlStore\Dependency\Facade;

use Spryker\Zed\Store\Business\StoreFacadeInterface;

class StoreToProductStoreUrlBridge implements StoreToProductStoreUrlBridgeInterface
{
    /**
     * @var \Spryker\Zed\Store\Business\StoreFacadeInterface
     */
    protected $storeFacade;

    /**
     * StoreToProductStoreUrlBridge constructor.
     *
     * @param \Spryker\Zed\Store\Business\StoreFacadeInterface $storeFacade
     */
    public function __construct(StoreFacadeInterface $storeFacade)
    {
        $this->storeFacade = $storeFacade;
    }

    /**
     * @return \Generated\Shared\Transfer\StoreTransfer[]
     */
    public function getAllStores(): array
    {
        return $this->storeFacade->getAllStores();
    }
}
