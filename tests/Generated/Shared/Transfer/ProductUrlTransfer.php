<?php

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

class ProductUrlTransfer extends AbstractTransfer
{
    public const ABSTRACT_SKU = 'abstractSku';

    public const URLS = 'urls';

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\LocalizedUrlTransfer[]
     */
    protected $urls;

    /**
     * @module Product
     *
     * @param string|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module Product
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\LocalizedUrlTransfer[] $urls
     *
     * @return $this
     */
    public function setUrls(ArrayObject $urls)
    {
        $this->urls = $urls;
        $this->modifiedProperties[self::URLS] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\LocalizedUrlTransfer[]
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @module Product
     *
     * @param \Generated\Shared\Transfer\LocalizedUrlTransfer $url
     *
     * @return $this
     */
    public function addUrl(LocalizedUrlTransfer $url)
    {
        $this->urls[] = $url;
        $this->modifiedProperties[self::URLS] = true;

        return $this;
    }
}
