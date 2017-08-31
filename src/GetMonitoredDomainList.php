<?php

namespace cloudposse\wild_west_reseller_api;

class GetMonitoredDomainList
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
     * @var int $nPage
     */
    protected $nPage = null;

    /**
     * @var int $nRowsPerPage
     */
    protected $nRowsPerPage = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sUser
     * @param int $nPage
     * @param int $nRowsPerPage
     */
    public function __construct($sCLTRID, $credential, $sUser, $nPage, $nRowsPerPage)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sUser = $sUser;
      $this->nPage = $nPage;
      $this->nRowsPerPage = $nRowsPerPage;
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
     * @return \cloudposse\wild_west_reseller_api\GetMonitoredDomainList
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
     * @return \cloudposse\wild_west_reseller_api\GetMonitoredDomainList
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
     * @return \cloudposse\wild_west_reseller_api\GetMonitoredDomainList
     */
    public function setSUser($sUser)
    {
      $this->sUser = $sUser;
      return $this;
    }

    /**
     * @return int
     */
    public function getNPage()
    {
      return $this->nPage;
    }

    /**
     * @param int $nPage
     * @return \cloudposse\wild_west_reseller_api\GetMonitoredDomainList
     */
    public function setNPage($nPage)
    {
      $this->nPage = $nPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getNRowsPerPage()
    {
      return $this->nRowsPerPage;
    }

    /**
     * @param int $nRowsPerPage
     * @return \cloudposse\wild_west_reseller_api\GetMonitoredDomainList
     */
    public function setNRowsPerPage($nRowsPerPage)
    {
      $this->nRowsPerPage = $nRowsPerPage;
      return $this;
    }

}
