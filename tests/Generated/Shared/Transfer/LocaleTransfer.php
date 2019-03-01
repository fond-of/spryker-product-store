<?php

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

class LocaleTransfer extends AbstractTransfer
{
    public const ID_LOCALE = 'idLocale';

    public const LOCALE_NAME = 'localeName';

    /**
     * @var int|null
     */
    protected $idLocale;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @module Locale|Product
     *
     * @param int|null $idLocale
     *
     * @return $this
     */
    public function setIdLocale($idLocale)
    {
        $this->idLocale = $idLocale;
        $this->modifiedProperties[self::ID_LOCALE] = true;

        return $this;
    }

    /**
     * @module Locale|Product
     *
     * @return int|null
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * @module Locale|Money|Product
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module Locale|Money|Product
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

}
