<?php

namespace cloudposse\wild_west_reseller_api;

class NameGenDBWithTimeLimit
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
     * @var string $sKey
     */
    protected $sKey = null;

    /**
     * @var int $nMaxResults
     */
    protected $nMaxResults = null;

    /**
     * @var boolean $bExcludeTaken
     */
    protected $bExcludeTaken = null;

    /**
     * @var string $sTLDs
     */
    protected $sTLDs = null;

    /**
     * @var boolean $bAddPrefix
     */
    protected $bAddPrefix = null;

    /**
     * @var boolean $bAddSuffix
     */
    protected $bAddSuffix = null;

    /**
     * @var boolean $bAddDashes
     */
    protected $bAddDashes = null;

    /**
     * @var boolean $bAddRelated
     */
    protected $bAddRelated = null;

    /**
     * @var boolean $bAdvancedSplit
     */
    protected $bAdvancedSplit = null;

    /**
     * @var boolean $bBaseOnTop
     */
    protected $bBaseOnTop = null;

    /**
     * @var int $nMaxWaitSeconds
     */
    protected $nMaxWaitSeconds = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sKey
     * @param int $nMaxResults
     * @param boolean $bExcludeTaken
     * @param string $sTLDs
     * @param boolean $bAddPrefix
     * @param boolean $bAddSuffix
     * @param boolean $bAddDashes
     * @param boolean $bAddRelated
     * @param boolean $bAdvancedSplit
     * @param boolean $bBaseOnTop
     * @param int $nMaxWaitSeconds
     */
    public function __construct($sCLTRID, $credential, $sKey, $nMaxResults, $bExcludeTaken, $sTLDs, $bAddPrefix, $bAddSuffix, $bAddDashes, $bAddRelated, $bAdvancedSplit, $bBaseOnTop, $nMaxWaitSeconds)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sKey = $sKey;
      $this->nMaxResults = $nMaxResults;
      $this->bExcludeTaken = $bExcludeTaken;
      $this->sTLDs = $sTLDs;
      $this->bAddPrefix = $bAddPrefix;
      $this->bAddSuffix = $bAddSuffix;
      $this->bAddDashes = $bAddDashes;
      $this->bAddRelated = $bAddRelated;
      $this->bAdvancedSplit = $bAdvancedSplit;
      $this->bBaseOnTop = $bBaseOnTop;
      $this->nMaxWaitSeconds = $nMaxWaitSeconds;
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
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
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
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKey()
    {
      return $this->sKey;
    }

    /**
     * @param string $sKey
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setSKey($sKey)
    {
      $this->sKey = $sKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getNMaxResults()
    {
      return $this->nMaxResults;
    }

    /**
     * @param int $nMaxResults
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setNMaxResults($nMaxResults)
    {
      $this->nMaxResults = $nMaxResults;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBExcludeTaken()
    {
      return $this->bExcludeTaken;
    }

    /**
     * @param boolean $bExcludeTaken
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setBExcludeTaken($bExcludeTaken)
    {
      $this->bExcludeTaken = $bExcludeTaken;
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
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setSTLDs($sTLDs)
    {
      $this->sTLDs = $sTLDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBAddPrefix()
    {
      return $this->bAddPrefix;
    }

    /**
     * @param boolean $bAddPrefix
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setBAddPrefix($bAddPrefix)
    {
      $this->bAddPrefix = $bAddPrefix;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBAddSuffix()
    {
      return $this->bAddSuffix;
    }

    /**
     * @param boolean $bAddSuffix
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setBAddSuffix($bAddSuffix)
    {
      $this->bAddSuffix = $bAddSuffix;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBAddDashes()
    {
      return $this->bAddDashes;
    }

    /**
     * @param boolean $bAddDashes
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setBAddDashes($bAddDashes)
    {
      $this->bAddDashes = $bAddDashes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBAddRelated()
    {
      return $this->bAddRelated;
    }

    /**
     * @param boolean $bAddRelated
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setBAddRelated($bAddRelated)
    {
      $this->bAddRelated = $bAddRelated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBAdvancedSplit()
    {
      return $this->bAdvancedSplit;
    }

    /**
     * @param boolean $bAdvancedSplit
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setBAdvancedSplit($bAdvancedSplit)
    {
      $this->bAdvancedSplit = $bAdvancedSplit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBBaseOnTop()
    {
      return $this->bBaseOnTop;
    }

    /**
     * @param boolean $bBaseOnTop
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setBBaseOnTop($bBaseOnTop)
    {
      $this->bBaseOnTop = $bBaseOnTop;
      return $this;
    }

    /**
     * @return int
     */
    public function getNMaxWaitSeconds()
    {
      return $this->nMaxWaitSeconds;
    }

    /**
     * @param int $nMaxWaitSeconds
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit
     */
    public function setNMaxWaitSeconds($nMaxWaitSeconds)
    {
      $this->nMaxWaitSeconds = $nMaxWaitSeconds;
      return $this;
    }

}
