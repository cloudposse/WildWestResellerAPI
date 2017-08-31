<?php

namespace cloudposse\wild_west_reseller_api;

class GetExpiringNameList
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
     * @var int $nLength
     */
    protected $nLength = null;

    /**
     * @var string $sDashes
     */
    protected $sDashes = null;

    /**
     * @var string $sNumbers
     */
    protected $sNumbers = null;

    /**
     * @var string $sWildCardSearch
     */
    protected $sWildCardSearch = null;

    /**
     * @var string $sSearchCriteria
     */
    protected $sSearchCriteria = null;

    /**
     * @var string $sTLDs
     */
    protected $sTLDs = null;

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
     * @param int $nLength
     * @param string $sDashes
     * @param string $sNumbers
     * @param string $sWildCardSearch
     * @param string $sSearchCriteria
     * @param string $sTLDs
     * @param int $nPage
     * @param int $nRowsPerPage
     */
    public function __construct($sCLTRID, $credential, $sUser, $nLength, $sDashes, $sNumbers, $sWildCardSearch, $sSearchCriteria, $sTLDs, $nPage, $nRowsPerPage)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sUser = $sUser;
      $this->nLength = $nLength;
      $this->sDashes = $sDashes;
      $this->sNumbers = $sNumbers;
      $this->sWildCardSearch = $sWildCardSearch;
      $this->sSearchCriteria = $sSearchCriteria;
      $this->sTLDs = $sTLDs;
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
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
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
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
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
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setSUser($sUser)
    {
      $this->sUser = $sUser;
      return $this;
    }

    /**
     * @return int
     */
    public function getNLength()
    {
      return $this->nLength;
    }

    /**
     * @param int $nLength
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setNLength($nLength)
    {
      $this->nLength = $nLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getSDashes()
    {
      return $this->sDashes;
    }

    /**
     * @param string $sDashes
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setSDashes($sDashes)
    {
      $this->sDashes = $sDashes;
      return $this;
    }

    /**
     * @return string
     */
    public function getSNumbers()
    {
      return $this->sNumbers;
    }

    /**
     * @param string $sNumbers
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setSNumbers($sNumbers)
    {
      $this->sNumbers = $sNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getSWildCardSearch()
    {
      return $this->sWildCardSearch;
    }

    /**
     * @param string $sWildCardSearch
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setSWildCardSearch($sWildCardSearch)
    {
      $this->sWildCardSearch = $sWildCardSearch;
      return $this;
    }

    /**
     * @return string
     */
    public function getSSearchCriteria()
    {
      return $this->sSearchCriteria;
    }

    /**
     * @param string $sSearchCriteria
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setSSearchCriteria($sSearchCriteria)
    {
      $this->sSearchCriteria = $sSearchCriteria;
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
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setSTLDs($sTLDs)
    {
      $this->sTLDs = $sTLDs;
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
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
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
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameList
     */
    public function setNRowsPerPage($nRowsPerPage)
    {
      $this->nRowsPerPage = $nRowsPerPage;
      return $this;
    }

}
