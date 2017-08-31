<?php

namespace cloudposse\wild_west_reseller_api;

class ModifyDNS
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
     * @var ArrayOfDNSRequest $dnsRequestArray
     */
    protected $dnsRequestArray = null;

    /**
     * @var string $sDomain
     */
    protected $sDomain = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfDNSRequest $dnsRequestArray
     * @param string $sDomain
     */
    public function __construct($sCLTRID, $credential, $dnsRequestArray, $sDomain)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->dnsRequestArray = $dnsRequestArray;
      $this->sDomain = $sDomain;
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
     * @return \cloudposse\wild_west_reseller_api\ModifyDNS
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
     * @return \cloudposse\wild_west_reseller_api\ModifyDNS
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return ArrayOfDNSRequest
     */
    public function getDnsRequestArray()
    {
      return $this->dnsRequestArray;
    }

    /**
     * @param ArrayOfDNSRequest $dnsRequestArray
     * @return \cloudposse\wild_west_reseller_api\ModifyDNS
     */
    public function setDnsRequestArray($dnsRequestArray)
    {
      $this->dnsRequestArray = $dnsRequestArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getSDomain()
    {
      return $this->sDomain;
    }

    /**
     * @param string $sDomain
     * @return \cloudposse\wild_west_reseller_api\ModifyDNS
     */
    public function setSDomain($sDomain)
    {
      $this->sDomain = $sDomain;
      return $this;
    }

}
