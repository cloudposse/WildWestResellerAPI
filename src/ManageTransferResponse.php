<?php

namespace cloudposse\wild_west_reseller_api;

class ManageTransferResponse
{

    /**
     * @var string $ManageTransferResult
     */
    protected $ManageTransferResult = null;

    /**
     * @param string $ManageTransferResult
     */
    public function __construct($ManageTransferResult)
    {
      $this->ManageTransferResult = $ManageTransferResult;
    }

    /**
     * @return string
     */
    public function getManageTransferResult()
    {
      return $this->ManageTransferResult;
    }

    /**
     * @param string $ManageTransferResult
     * @return \cloudposse\wild_west_reseller_api\ManageTransferResponse
     */
    public function setManageTransferResult($ManageTransferResult)
    {
      $this->ManageTransferResult = $ManageTransferResult;
      return $this;
    }

}
