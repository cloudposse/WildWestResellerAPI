<?php

namespace cloudposse\wild_west_reseller_api;

class GetIDNLanguageList
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
     * @var string $sTld
     */
    protected $sTld = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sTld
     */
    public function __construct($sCLTRID, $credential, $sTld)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sTld = $sTld;
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
     * @return \cloudposse\wild_west_reseller_api\GetIDNLanguageList
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
     * @return \cloudposse\wild_west_reseller_api\GetIDNLanguageList
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTld()
    {
      return $this->sTld;
    }

    /**
     * @param string $sTld
     * @return \cloudposse\wild_west_reseller_api\GetIDNLanguageList
     */
    public function setSTld($sTld)
    {
      $this->sTld = $sTld;
      return $this;
    }

}
