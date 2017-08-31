<?php

namespace cloudposse\wild_west_reseller_api;

class RemoveEmailAddressResponse
{

    /**
     * @var string $RemoveEmailAddressResult
     */
    protected $RemoveEmailAddressResult = null;

    /**
     * @param string $RemoveEmailAddressResult
     */
    public function __construct($RemoveEmailAddressResult)
    {
      $this->RemoveEmailAddressResult = $RemoveEmailAddressResult;
    }

    /**
     * @return string
     */
    public function getRemoveEmailAddressResult()
    {
      return $this->RemoveEmailAddressResult;
    }

    /**
     * @param string $RemoveEmailAddressResult
     * @return \cloudposse\wild_west_reseller_api\RemoveEmailAddressResponse
     */
    public function setRemoveEmailAddressResult($RemoveEmailAddressResult)
    {
      $this->RemoveEmailAddressResult = $RemoveEmailAddressResult;
      return $this;
    }

}
