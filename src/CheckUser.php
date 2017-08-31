<?php

namespace cloudposse\wild_west_reseller_api;

class CheckUser
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
     * @var string $sType
     */
    protected $sType = null;

    /**
     * @var string $sUser
     */
    protected $sUser = null;

    /**
     * @var string $sPwd
     */
    protected $sPwd = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sType
     * @param string $sUser
     * @param string $sPwd
     */
    public function __construct($sCLTRID, $credential, $sType, $sUser, $sPwd)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sType = $sType;
      $this->sUser = $sUser;
      $this->sPwd = $sPwd;
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
     * @return \cloudposse\wild_west_reseller_api\CheckUser
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
     * @return \cloudposse\wild_west_reseller_api\CheckUser
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSType()
    {
      return $this->sType;
    }

    /**
     * @param string $sType
     * @return \cloudposse\wild_west_reseller_api\CheckUser
     */
    public function setSType($sType)
    {
      $this->sType = $sType;
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
     * @return \cloudposse\wild_west_reseller_api\CheckUser
     */
    public function setSUser($sUser)
    {
      $this->sUser = $sUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getSPwd()
    {
      return $this->sPwd;
    }

    /**
     * @param string $sPwd
     * @return \cloudposse\wild_west_reseller_api\CheckUser
     */
    public function setSPwd($sPwd)
    {
      $this->sPwd = $sPwd;
      return $this;
    }

}
