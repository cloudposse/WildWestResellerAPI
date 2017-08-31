<?php

namespace cloudposse\wild_west_reseller_api;

class DomainAlert
{

    /**
     * @var string $user
     */
    protected $user = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $tld
     */
    protected $tld = null;

    /**
     * @var int $privateReg
     */
    protected $privateReg = null;

    /**
     * @var int $backorder
     */
    protected $backorder = null;

    /**
     * @param int $privateReg
     * @param int $backorder
     */
    public function __construct($privateReg, $backorder)
    {
      $this->privateReg = $privateReg;
      $this->backorder = $backorder;
    }

    /**
     * @return string
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param string $user
     * @return \cloudposse\wild_west_reseller_api\DomainAlert
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->domain;
    }

    /**
     * @param string $domain
     * @return \cloudposse\wild_west_reseller_api\DomainAlert
     */
    public function setDomain($domain)
    {
      $this->domain = $domain;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \cloudposse\wild_west_reseller_api\DomainAlert
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \cloudposse\wild_west_reseller_api\DomainAlert
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrivateReg()
    {
      return $this->privateReg;
    }

    /**
     * @param int $privateReg
     * @return \cloudposse\wild_west_reseller_api\DomainAlert
     */
    public function setPrivateReg($privateReg)
    {
      $this->privateReg = $privateReg;
      return $this;
    }

    /**
     * @return int
     */
    public function getBackorder()
    {
      return $this->backorder;
    }

    /**
     * @param int $backorder
     * @return \cloudposse\wild_west_reseller_api\DomainAlert
     */
    public function setBackorder($backorder)
    {
      $this->backorder = $backorder;
      return $this;
    }

}
