<?php

namespace cloudposse\wild_west_reseller_api;

class GetDiskUsageForEmailResponse
{

    /**
     * @var string $GetDiskUsageForEmailResult
     */
    protected $GetDiskUsageForEmailResult = null;

    /**
     * @param string $GetDiskUsageForEmailResult
     */
    public function __construct($GetDiskUsageForEmailResult)
    {
      $this->GetDiskUsageForEmailResult = $GetDiskUsageForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetDiskUsageForEmailResult()
    {
      return $this->GetDiskUsageForEmailResult;
    }

    /**
     * @param string $GetDiskUsageForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetDiskUsageForEmailResponse
     */
    public function setGetDiskUsageForEmailResult($GetDiskUsageForEmailResult)
    {
      $this->GetDiskUsageForEmailResult = $GetDiskUsageForEmailResult;
      return $this;
    }

}
