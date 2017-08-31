<?php

namespace cloudposse\wild_west_reseller_api;

class RenameEmailPlan
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
     * @var string $sShopper
     */
    protected $sShopper = null;

    /**
     * @var string $sResourceID
     */
    protected $sResourceID = null;

    /**
     * @var string $sName
     */
    protected $sName = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sShopper
     * @param string $sResourceID
     * @param string $sName
     */
    public function __construct($sCLTRID, $credential, $sShopper, $sResourceID, $sName)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sShopper = $sShopper;
      $this->sResourceID = $sResourceID;
      $this->sName = $sName;
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
     * @return \cloudposse\wild_west_reseller_api\RenameEmailPlan
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
     * @return \cloudposse\wild_west_reseller_api\RenameEmailPlan
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSShopper()
    {
      return $this->sShopper;
    }

    /**
     * @param string $sShopper
     * @return \cloudposse\wild_west_reseller_api\RenameEmailPlan
     */
    public function setSShopper($sShopper)
    {
      $this->sShopper = $sShopper;
      return $this;
    }

    /**
     * @return string
     */
    public function getSResourceID()
    {
      return $this->sResourceID;
    }

    /**
     * @param string $sResourceID
     * @return \cloudposse\wild_west_reseller_api\RenameEmailPlan
     */
    public function setSResourceID($sResourceID)
    {
      $this->sResourceID = $sResourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSName()
    {
      return $this->sName;
    }

    /**
     * @param string $sName
     * @return \cloudposse\wild_west_reseller_api\RenameEmailPlan
     */
    public function setSName($sName)
    {
      $this->sName = $sName;
      return $this;
    }

}
