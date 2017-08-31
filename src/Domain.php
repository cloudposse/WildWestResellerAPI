<?php

namespace cloudposse\wild_west_reseller_api;

class Domain
{

    /**
     * @var string $resourceid
     */
    protected $resourceid = null;

    /**
     * @var string $mngTRID
     */
    protected $mngTRID = null;

    /**
     * @var string $transferKey
     */
    protected $transferKey = null;

    /**
     * @var string $newAuthInfo
     */
    protected $newAuthInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getResourceid()
    {
      return $this->resourceid;
    }

    /**
     * @param string $resourceid
     * @return \cloudposse\wild_west_reseller_api\Domain
     */
    public function setResourceid($resourceid)
    {
      $this->resourceid = $resourceid;
      return $this;
    }

    /**
     * @return string
     */
    public function getMngTRID()
    {
      return $this->mngTRID;
    }

    /**
     * @param string $mngTRID
     * @return \cloudposse\wild_west_reseller_api\Domain
     */
    public function setMngTRID($mngTRID)
    {
      $this->mngTRID = $mngTRID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferKey()
    {
      return $this->transferKey;
    }

    /**
     * @param string $transferKey
     * @return \cloudposse\wild_west_reseller_api\Domain
     */
    public function setTransferKey($transferKey)
    {
      $this->transferKey = $transferKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewAuthInfo()
    {
      return $this->newAuthInfo;
    }

    /**
     * @param string $newAuthInfo
     * @return \cloudposse\wild_west_reseller_api\Domain
     */
    public function setNewAuthInfo($newAuthInfo)
    {
      $this->newAuthInfo = $newAuthInfo;
      return $this;
    }

}
