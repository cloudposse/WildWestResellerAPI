<?php

namespace cloudposse\wild_west_reseller_api;

class SetSmtpRelaysResponse
{

    /**
     * @var string $SetSmtpRelaysResult
     */
    protected $SetSmtpRelaysResult = null;

    /**
     * @param string $SetSmtpRelaysResult
     */
    public function __construct($SetSmtpRelaysResult)
    {
      $this->SetSmtpRelaysResult = $SetSmtpRelaysResult;
    }

    /**
     * @return string
     */
    public function getSetSmtpRelaysResult()
    {
      return $this->SetSmtpRelaysResult;
    }

    /**
     * @param string $SetSmtpRelaysResult
     * @return \cloudposse\wild_west_reseller_api\SetSmtpRelaysResponse
     */
    public function setSetSmtpRelaysResult($SetSmtpRelaysResult)
    {
      $this->SetSmtpRelaysResult = $SetSmtpRelaysResult;
      return $this;
    }

}
