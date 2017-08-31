<?php

namespace cloudposse\wild_west_reseller_api;

class ProcessRequest
{

    /**
     * @var string $sRequestXML
     */
    protected $sRequestXML = null;

    /**
     * @param string $sRequestXML
     */
    public function __construct($sRequestXML)
    {
      $this->sRequestXML = $sRequestXML;
    }

    /**
     * @return string
     */
    public function getSRequestXML()
    {
      return $this->sRequestXML;
    }

    /**
     * @param string $sRequestXML
     * @return \cloudposse\wild_west_reseller_api\ProcessRequest
     */
    public function setSRequestXML($sRequestXML)
    {
      $this->sRequestXML = $sRequestXML;
      return $this;
    }

}
