<?php

namespace cloudposse\wild_west_reseller_api;

class DescribeResponse
{

    /**
     * @var string $DescribeResult
     */
    protected $DescribeResult = null;

    /**
     * @param string $DescribeResult
     */
    public function __construct($DescribeResult)
    {
      $this->DescribeResult = $DescribeResult;
    }

    /**
     * @return string
     */
    public function getDescribeResult()
    {
      return $this->DescribeResult;
    }

    /**
     * @param string $DescribeResult
     * @return \cloudposse\wild_west_reseller_api\DescribeResponse
     */
    public function setDescribeResult($DescribeResult)
    {
      $this->DescribeResult = $DescribeResult;
      return $this;
    }

}
