<?php

namespace cloudposse\wild_west_reseller_api;

class CheckDomain
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $idnScript
     */
    protected $idnScript = null;

    
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
     * @return \cloudposse\wild_west_reseller_api\CheckDomain
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdnScript()
    {
      return $this->idnScript;
    }

    /**
     * @param string $idnScript
     * @return \cloudposse\wild_west_reseller_api\CheckDomain
     */
    public function setIdnScript($idnScript)
    {
      $this->idnScript = $idnScript;
      return $this;
    }

}
