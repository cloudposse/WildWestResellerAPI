<?php

namespace cloudposse\wild_west_reseller_api;

class NameGen
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
     * @var string $sSLD
     */
    protected $sSLD = null;

    /**
     * @var string $sTLD
     */
    protected $sTLD = null;

    /**
     * @var string $sTLDs
     */
    protected $sTLDs = null;

    /**
     * @var int $nRows
     */
    protected $nRows = null;

    /**
     * @var boolean $bHypens
     */
    protected $bHypens = null;

    /**
     * @var boolean $bNumbers
     */
    protected $bNumbers = null;

    /**
     * @var int $nMaxLen
     */
    protected $nMaxLen = null;

    /**
     * @var boolean $bIntelliSearch
     */
    protected $bIntelliSearch = null;

    /**
     * @var int $nPage
     */
    protected $nPage = null;

    /**
     * @var string $sTime
     */
    protected $sTime = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sSLD
     * @param string $sTLD
     * @param string $sTLDs
     * @param int $nRows
     * @param boolean $bHypens
     * @param boolean $bNumbers
     * @param int $nMaxLen
     * @param boolean $bIntelliSearch
     * @param int $nPage
     * @param string $sTime
     */
    public function __construct($sCLTRID, $credential, $sSLD, $sTLD, $sTLDs, $nRows, $bHypens, $bNumbers, $nMaxLen, $bIntelliSearch, $nPage, $sTime)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sSLD = $sSLD;
      $this->sTLD = $sTLD;
      $this->sTLDs = $sTLDs;
      $this->nRows = $nRows;
      $this->bHypens = $bHypens;
      $this->bNumbers = $bNumbers;
      $this->nMaxLen = $nMaxLen;
      $this->bIntelliSearch = $bIntelliSearch;
      $this->nPage = $nPage;
      $this->sTime = $sTime;
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
     * @return \cloudposse\wild_west_reseller_api\NameGen
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
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSSLD()
    {
      return $this->sSLD;
    }

    /**
     * @param string $sSLD
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setSSLD($sSLD)
    {
      $this->sSLD = $sSLD;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTLD()
    {
      return $this->sTLD;
    }

    /**
     * @param string $sTLD
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setSTLD($sTLD)
    {
      $this->sTLD = $sTLD;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTLDs()
    {
      return $this->sTLDs;
    }

    /**
     * @param string $sTLDs
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setSTLDs($sTLDs)
    {
      $this->sTLDs = $sTLDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getNRows()
    {
      return $this->nRows;
    }

    /**
     * @param int $nRows
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setNRows($nRows)
    {
      $this->nRows = $nRows;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBHypens()
    {
      return $this->bHypens;
    }

    /**
     * @param boolean $bHypens
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setBHypens($bHypens)
    {
      $this->bHypens = $bHypens;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBNumbers()
    {
      return $this->bNumbers;
    }

    /**
     * @param boolean $bNumbers
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setBNumbers($bNumbers)
    {
      $this->bNumbers = $bNumbers;
      return $this;
    }

    /**
     * @return int
     */
    public function getNMaxLen()
    {
      return $this->nMaxLen;
    }

    /**
     * @param int $nMaxLen
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setNMaxLen($nMaxLen)
    {
      $this->nMaxLen = $nMaxLen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBIntelliSearch()
    {
      return $this->bIntelliSearch;
    }

    /**
     * @param boolean $bIntelliSearch
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setBIntelliSearch($bIntelliSearch)
    {
      $this->bIntelliSearch = $bIntelliSearch;
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
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setNPage($nPage)
    {
      $this->nPage = $nPage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTime()
    {
      return $this->sTime;
    }

    /**
     * @param string $sTime
     * @return \cloudposse\wild_west_reseller_api\NameGen
     */
    public function setSTime($sTime)
    {
      $this->sTime = $sTime;
      return $this;
    }

}
