<?php

namespace cloudposse\wild_west_reseller_api;

class Poll
{

    /**
     * @var string $sCLTRID
     */
    protected $sCLTRID = null;

    /**
     * @var Credential $credential
     */
    protected $credential = null;

    /**
     * @var string $sOp
     */
    protected $sOp = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sOp
     */
    public function __construct($sCLTRID, $credential, $sOp)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sOp = $sOp;
    }

    /**
     * @return string
     */
    public function getSCLTRID()
    {
      return $this->sCLTRID;
    }

    /**
     * @param string $sCLTRID
     * @return \cloudposse\wild_west_reseller_api\Poll
     */
    public function setSCLTRID($sCLTRID)
    {
      $this->sCLTRID = $sCLTRID;
      return $this;
    }

    /**
     * @return Credential
     */
    public function getCredential()
    {
      return $this->credential;
    }

    /**
     * @param Credential $credential
     * @return \cloudposse\wild_west_reseller_api\Poll
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSOp()
    {
      return $this->sOp;
    }

    /**
     * @param string $sOp
     * @return \cloudposse\wild_west_reseller_api\Poll
     */
    public function setSOp($sOp)
    {
      $this->sOp = $sOp;
      return $this;
    }

}
