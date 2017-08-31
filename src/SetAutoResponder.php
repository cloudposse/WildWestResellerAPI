<?php

namespace cloudposse\wild_west_reseller_api;

class SetAutoResponder
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
     * @var string $sEmailAddress
     */
    protected $sEmailAddress = null;

    /**
     * @var int $nAR_Status
     */
    protected $nAR_Status = null;

    /**
     * @var string $sAR_Message
     */
    protected $sAR_Message = null;

    /**
     * @var string $sAR_Subject
     */
    protected $sAR_Subject = null;

    /**
     * @var string $sAR_Start
     */
    protected $sAR_Start = null;

    /**
     * @var string $sAR_End
     */
    protected $sAR_End = null;

    /**
     * @var string $sAR_From
     */
    protected $sAR_From = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sShopper
     * @param string $sEmailAddress
     * @param int $nAR_Status
     * @param string $sAR_Message
     * @param string $sAR_Subject
     * @param string $sAR_Start
     * @param string $sAR_End
     * @param string $sAR_From
     */
    public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $nAR_Status, $sAR_Message, $sAR_Subject, $sAR_Start, $sAR_End, $sAR_From)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sShopper = $sShopper;
      $this->sEmailAddress = $sEmailAddress;
      $this->nAR_Status = $nAR_Status;
      $this->sAR_Message = $sAR_Message;
      $this->sAR_Subject = $sAR_Subject;
      $this->sAR_Start = $sAR_Start;
      $this->sAR_End = $sAR_End;
      $this->sAR_From = $sAR_From;
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
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
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
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
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
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setSShopper($sShopper)
    {
      $this->sShopper = $sShopper;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEmailAddress()
    {
      return $this->sEmailAddress;
    }

    /**
     * @param string $sEmailAddress
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setSEmailAddress($sEmailAddress)
    {
      $this->sEmailAddress = $sEmailAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getNAR_Status()
    {
      return $this->nAR_Status;
    }

    /**
     * @param int $nAR_Status
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setNAR_Status($nAR_Status)
    {
      $this->nAR_Status = $nAR_Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAR_Message()
    {
      return $this->sAR_Message;
    }

    /**
     * @param string $sAR_Message
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setSAR_Message($sAR_Message)
    {
      $this->sAR_Message = $sAR_Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAR_Subject()
    {
      return $this->sAR_Subject;
    }

    /**
     * @param string $sAR_Subject
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setSAR_Subject($sAR_Subject)
    {
      $this->sAR_Subject = $sAR_Subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAR_Start()
    {
      return $this->sAR_Start;
    }

    /**
     * @param string $sAR_Start
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setSAR_Start($sAR_Start)
    {
      $this->sAR_Start = $sAR_Start;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAR_End()
    {
      return $this->sAR_End;
    }

    /**
     * @param string $sAR_End
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setSAR_End($sAR_End)
    {
      $this->sAR_End = $sAR_End;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAR_From()
    {
      return $this->sAR_From;
    }

    /**
     * @param string $sAR_From
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponder
     */
    public function setSAR_From($sAR_From)
    {
      $this->sAR_From = $sAR_From;
      return $this;
    }

}
