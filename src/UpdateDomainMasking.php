<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainMasking
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
     * @var ArrayOfDomain $domainArray
     */
    protected $domainArray = null;

    /**
     * @var string $sAction
     */
    protected $sAction = null;

    /**
     * @var string $sForwardingURL
     */
    protected $sForwardingURL = null;

    /**
     * @var string $sMaskingMetatagTitle
     */
    protected $sMaskingMetatagTitle = null;

    /**
     * @var string $sMaskingMetatagDesc
     */
    protected $sMaskingMetatagDesc = null;

    /**
     * @var string $sMaskingMetatagKeyword
     */
    protected $sMaskingMetatagKeyword = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfDomain $domainArray
     * @param string $sAction
     * @param string $sForwardingURL
     * @param string $sMaskingMetatagTitle
     * @param string $sMaskingMetatagDesc
     * @param string $sMaskingMetatagKeyword
     */
    public function __construct($sCLTRID, $credential, $domainArray, $sAction, $sForwardingURL, $sMaskingMetatagTitle, $sMaskingMetatagDesc, $sMaskingMetatagKeyword)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainArray = $domainArray;
      $this->sAction = $sAction;
      $this->sForwardingURL = $sForwardingURL;
      $this->sMaskingMetatagTitle = $sMaskingMetatagTitle;
      $this->sMaskingMetatagDesc = $sMaskingMetatagDesc;
      $this->sMaskingMetatagKeyword = $sMaskingMetatagKeyword;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return ArrayOfDomain
     */
    public function getDomainArray()
    {
      return $this->domainArray;
    }

    /**
     * @param ArrayOfDomain $domainArray
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
     */
    public function setDomainArray($domainArray)
    {
      $this->domainArray = $domainArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAction()
    {
      return $this->sAction;
    }

    /**
     * @param string $sAction
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
     */
    public function setSAction($sAction)
    {
      $this->sAction = $sAction;
      return $this;
    }

    /**
     * @return string
     */
    public function getSForwardingURL()
    {
      return $this->sForwardingURL;
    }

    /**
     * @param string $sForwardingURL
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
     */
    public function setSForwardingURL($sForwardingURL)
    {
      $this->sForwardingURL = $sForwardingURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getSMaskingMetatagTitle()
    {
      return $this->sMaskingMetatagTitle;
    }

    /**
     * @param string $sMaskingMetatagTitle
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
     */
    public function setSMaskingMetatagTitle($sMaskingMetatagTitle)
    {
      $this->sMaskingMetatagTitle = $sMaskingMetatagTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getSMaskingMetatagDesc()
    {
      return $this->sMaskingMetatagDesc;
    }

    /**
     * @param string $sMaskingMetatagDesc
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
     */
    public function setSMaskingMetatagDesc($sMaskingMetatagDesc)
    {
      $this->sMaskingMetatagDesc = $sMaskingMetatagDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getSMaskingMetatagKeyword()
    {
      return $this->sMaskingMetatagKeyword;
    }

    /**
     * @param string $sMaskingMetatagKeyword
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainMasking
     */
    public function setSMaskingMetatagKeyword($sMaskingMetatagKeyword)
    {
      $this->sMaskingMetatagKeyword = $sMaskingMetatagKeyword;
      return $this;
    }

}
