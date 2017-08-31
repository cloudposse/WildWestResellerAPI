<?php

namespace cloudposse\wild_west_reseller_api;

class Nexus
{

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var string $use
     */
    protected $use = null;

    /**
     * @var string $country
     */
    protected $country = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \cloudposse\wild_west_reseller_api\Nexus
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return string
     */
    public function getUse()
    {
      return $this->use;
    }

    /**
     * @param string $use
     * @return \cloudposse\wild_west_reseller_api\Nexus
     */
    public function setUse($use)
    {
      $this->use = $use;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \cloudposse\wild_west_reseller_api\Nexus
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

}
