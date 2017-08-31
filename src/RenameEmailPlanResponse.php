<?php

namespace cloudposse\wild_west_reseller_api;

class RenameEmailPlanResponse
{

    /**
     * @var string $RenameEmailPlanResult
     */
    protected $RenameEmailPlanResult = null;

    /**
     * @param string $RenameEmailPlanResult
     */
    public function __construct($RenameEmailPlanResult)
    {
      $this->RenameEmailPlanResult = $RenameEmailPlanResult;
    }

    /**
     * @return string
     */
    public function getRenameEmailPlanResult()
    {
      return $this->RenameEmailPlanResult;
    }

    /**
     * @param string $RenameEmailPlanResult
     * @return \cloudposse\wild_west_reseller_api\RenameEmailPlanResponse
     */
    public function setRenameEmailPlanResult($RenameEmailPlanResult)
    {
      $this->RenameEmailPlanResult = $RenameEmailPlanResult;
      return $this;
    }

}
