<?php

namespace cloudposse\wild_west_reseller_api;

class GetDomainAlertCredits
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
     * @var string $sUser
     */
    protected $sUser = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sUser
     */
    public function __construct($sCLTRID, $credential, $sUser)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sUser = $sUser;
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
     * @return \cloudposse\wild_west_reseller_api\GetDomainAlertCredits
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
     * @return \cloudposse\wild_west_reseller_api\GetDomainAlertCredits
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUser()
    {
      return $this->sUser;
    }

    /**
     * @param string $sUser
     * @return \cloudposse\wild_west_reseller_api\GetDomainAlertCredits
     */
    public function setSUser($sUser)
    {
      $this->sUser = $sUser;
      return $this;
    }

}
