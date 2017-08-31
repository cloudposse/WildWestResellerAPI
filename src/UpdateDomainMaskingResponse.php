<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainMaskingResponse
{

    /**
     * @var string $UpdateDomainMaskingResult
     */
    protected $UpdateDomainMaskingResult = null;

    /**
     * @param string $UpdateDomainMaskingResult
     */
    public function __construct($UpdateDomainMaskingResult)
    {
      $this->UpdateDomainMaskingResult = $UpdateDomainMaskingResult;
    }

    /**
     * @return string
     */
    public function getUpdateDomainMaskingResult()
    {
      return $this->UpdateDomainMaskingResult;
    }

    /**
     * @param string $UpdateDomainMaskingResult
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMaskingResponse
     */
    public function setUpdateDomainMaskingResult($UpdateDomainMaskingResult)
    {
      $this->UpdateDomainMaskingResult = $UpdateDomainMaskingResult;
      return $this;
    }

}
