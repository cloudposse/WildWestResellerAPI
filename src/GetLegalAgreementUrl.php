<?php

namespace cloudposse\wild_west_reseller_api;

class GetLegalAgreementUrl
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
     * @param string $sCLTRID
     * @param Credential $credential
     */
    public function __construct($sCLTRID, $credential)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
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
     * @return \cloudposse\wild_west_reseller_api\GetLegalAgreementUrl
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
     * @return \cloudposse\wild_west_reseller_api\GetLegalAgreementUrl
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

}
