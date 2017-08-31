<?php

namespace cloudposse\wild_west_reseller_api;

class MoveEmailAccountResponse
{

    /**
     * @var string $MoveEmailAccountResult
     */
    protected $MoveEmailAccountResult = null;

    /**
     * @param string $MoveEmailAccountResult
     */
    public function __construct($MoveEmailAccountResult)
    {
      $this->MoveEmailAccountResult = $MoveEmailAccountResult;
    }

    /**
     * @return string
     */
    public function getMoveEmailAccountResult()
    {
      return $this->MoveEmailAccountResult;
    }

    /**
     * @param string $MoveEmailAccountResult
     * @return \cloudposse\wild_west_reseller_api\MoveEmailAccountResponse
     */
    public function setMoveEmailAccountResult($MoveEmailAccountResult)
    {
      $this->MoveEmailAccountResult = $MoveEmailAccountResult;
      return $this;
    }

}
