<?php

namespace cloudposse\wild_west_reseller_api;

class RemoveSmtpRelayResponse
{

    /**
     * @var string $RemoveSmtpRelayResult
     */
    protected $RemoveSmtpRelayResult = null;

    /**
     * @param string $RemoveSmtpRelayResult
     */
    public function __construct($RemoveSmtpRelayResult)
    {
      $this->RemoveSmtpRelayResult = $RemoveSmtpRelayResult;
    }

    /**
     * @return string
     */
    public function getRemoveSmtpRelayResult()
    {
      return $this->RemoveSmtpRelayResult;
    }

    /**
     * @param string $RemoveSmtpRelayResult
     * @return \cloudposse\wild_west_reseller_api\RemoveSmtpRelayResponse
     */
    public function setRemoveSmtpRelayResult($RemoveSmtpRelayResult)
    {
      $this->RemoveSmtpRelayResult = $RemoveSmtpRelayResult;
      return $this;
    }

}
