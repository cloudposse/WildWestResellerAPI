<?php

namespace cloudposse\wild_west_reseller_api;

class DomainData
{

    /**
     * @var string $sld
     */
    protected $sld = null;

    /**
     * @var string $tld
     */
    protected $tld = null;

    /**
     * @var int $period
     */
    protected $period = null;

    /**
     * @param int $period
     */
    public function __construct($period)
    {
      $this->period = $period;
    }

    /**
     * @return string
     */
    public function getSld()
    {
      return $this->sld;
    }

    /**
     * @param string $sld
     * @return \cloudposse\wild_west_reseller_api\DomainData
     */
    public function setSld($sld)
    {
      $this->sld = $sld;
      return $this;
    }

    /**
     * @return string
     */
    public function getTld()
    {
      return $this->tld;
    }

    /**
     * @param string $tld
     * @return \cloudposse\wild_west_reseller_api\DomainData
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param int $period
     * @return \cloudposse\wild_west_reseller_api\DomainData
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

}
