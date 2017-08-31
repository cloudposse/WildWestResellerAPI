<?php

namespace cloudposse\wild_west_reseller_api;

class DNSRequest
{

    /**
     * @var string $recType
     */
    protected $recType = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var int $ttl
     */
    protected $ttl = null;

    /**
     * @var string $recValue
     */
    protected $recValue = null;

    /**
     * @param int $ttl
     */
    public function __construct($ttl)
    {
      $this->ttl = $ttl;
    }

    /**
     * @return string
     */
    public function getRecType()
    {
      return $this->recType;
    }

    /**
     * @param string $recType
     * @return \cloudposse\wild_west_reseller_api\DNSRequest
     */
    public function setRecType($recType)
    {
      $this->recType = $recType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param string $action
     * @return \cloudposse\wild_west_reseller_api\DNSRequest
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \cloudposse\wild_west_reseller_api\DNSRequest
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return int
     */
    public function getTtl()
    {
      return $this->ttl;
    }

    /**
     * @param int $ttl
     * @return \cloudposse\wild_west_reseller_api\DNSRequest
     */
    public function setTtl($ttl)
    {
      $this->ttl = $ttl;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecValue()
    {
      return $this->recValue;
    }

    /**
     * @param string $recValue
     * @return \cloudposse\wild_west_reseller_api\DNSRequest
     */
    public function setRecValue($recValue)
    {
      $this->recValue = $recValue;
      return $this;
    }

}
