<?php

namespace cloudposse\wild_west_reseller_api;

class NS
{

    /**
     * @var string $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \cloudposse\wild_west_reseller_api\NS
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
