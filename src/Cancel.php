<?php

namespace cloudposse\wild_west_reseller_api;

class Cancel
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
     * @var ArrayOfString $sIDArray
     */
    protected $sIDArray = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sType
     * @param ArrayOfString $sIDArray
     */
    public function __construct($sCLTRID, $credential, $sType, $sIDArray)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sType = $sType;
      $this->sIDArray = $sIDArray;
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
     * @return \cloudposse\wild_west_reseller_api\Cancel
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
     * @return \cloudposse\wild_west_reseller_api\Cancel
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
     * @return \cloudposse\wild_west_reseller_api\Cancel
     */
    public function setSType($sType)
    {
      $this->sType = $sType;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getSIDArray()
    {
      return $this->sIDArray;
    }

    /**
     * @param ArrayOfString $sIDArray
     * @return \cloudposse\wild_west_reseller_api\Cancel
     */
    public function setSIDArray($sIDArray)
    {
      $this->sIDArray = $sIDArray;
      return $this;
    }

}
