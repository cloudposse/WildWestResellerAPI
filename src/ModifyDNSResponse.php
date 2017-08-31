<?php

namespace cloudposse\wild_west_reseller_api;

class ModifyDNSResponse
{

    /**
     * @var string $ModifyDNSResult
     */
    protected $ModifyDNSResult = null;

    /**
     * @param string $ModifyDNSResult
     */
    public function __construct($ModifyDNSResult)
    {
      $this->ModifyDNSResult = $ModifyDNSResult;
    }

    /**
     * @return string
     */
    public function getModifyDNSResult()
    {
      return $this->ModifyDNSResult;
    }

    /**
     * @param string $ModifyDNSResult
     * @return \cloudposse\wild_west_reseller_api\ModifyDNSResponse
     */
    public function setModifyDNSResult($ModifyDNSResult)
    {
      $this->ModifyDNSResult = $ModifyDNSResult;
      return $this;
    }

}
