<?php

namespace cloudposse\wild_west_reseller_api;

class ResetPassword
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
     * @var string $sPwd
     */
    protected $sPwd = null;

    /**
     * @var string $sEmail
     */
    protected $sEmail = null;

    /**
     * @var string $sPwdHint
     */
    protected $sPwdHint = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sUser
     * @param string $sPwd
     * @param string $sEmail
     * @param string $sPwdHint
     */
    public function __construct($sCLTRID, $credential, $sUser, $sPwd, $sEmail, $sPwdHint)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sUser = $sUser;
      $this->sPwd = $sPwd;
      $this->sEmail = $sEmail;
      $this->sPwdHint = $sPwdHint;
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
     * @return \cloudposse\wild_west_reseller_api\ResetPassword
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
     * @return \cloudposse\wild_west_reseller_api\ResetPassword
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
     * @return \cloudposse\wild_west_reseller_api\ResetPassword
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
     * @return \cloudposse\wild_west_reseller_api\ResetPassword
     */
    public function setSPwd($sPwd)
    {
      $this->sPwd = $sPwd;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEmail()
    {
      return $this->sEmail;
    }

    /**
     * @param string $sEmail
     * @return \cloudposse\wild_west_reseller_api\ResetPassword
     */
    public function setSEmail($sEmail)
    {
      $this->sEmail = $sEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSPwdHint()
    {
      return $this->sPwdHint;
    }

    /**
     * @param string $sPwdHint
     * @return \cloudposse\wild_west_reseller_api\ResetPassword
     */
    public function setSPwdHint($sPwdHint)
    {
      $this->sPwdHint = $sPwdHint;
      return $this;
    }

}
