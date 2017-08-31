<?php

namespace cloudposse\wild_west_reseller_api;

class SetServiceAddOnQtyResponse
{

    /**
     * @var string $SetServiceAddOnQtyResult
     */
    protected $SetServiceAddOnQtyResult = null;

    /**
     * @param string $SetServiceAddOnQtyResult
     */
    public function __construct($SetServiceAddOnQtyResult)
    {
      $this->SetServiceAddOnQtyResult = $SetServiceAddOnQtyResult;
    }

    /**
     * @return string
     */
    public function getSetServiceAddOnQtyResult()
    {
      return $this->SetServiceAddOnQtyResult;
    }

    /**
     * @param string $SetServiceAddOnQtyResult
     * @return \cloudposse\wild_west_reseller_api\SetServiceAddOnQtyResponse
     */
    public function setSetServiceAddOnQtyResult($SetServiceAddOnQtyResult)
    {
      $this->SetServiceAddOnQtyResult = $SetServiceAddOnQtyResult;
      return $this;
    }

}
