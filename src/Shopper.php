<?php

namespace cloudposse\wild_west_reseller_api;

class Shopper
{

    /**
     * @var string $acceptOrderTOS
     */
    protected $acceptOrderTOS = null;

    /**
     * @var string $user
     */
    protected $user = null;

    /**
     * @var string $pwd
     */
    protected $pwd = null;

    /**
     * @var string $pwdhint
     */
    protected $pwdhint = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $lastname
     */
    protected $lastname = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $pin
     */
    protected $pin = null;

    /**
     * @var string $dbpuser
     */
    protected $dbpuser = null;

    /**
     * @var string $dbppwd
     */
    protected $dbppwd = null;

    /**
     * @var string $dbppwdhint
     */
    protected $dbppwdhint = null;

    /**
     * @var string $dbpemail
     */
    protected $dbpemail = null;

    /**
     * @var string $dbppin
     */
    protected $dbppin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAcceptOrderTOS()
    {
      return $this->acceptOrderTOS;
    }

    /**
     * @param string $acceptOrderTOS
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setAcceptOrderTOS($acceptOrderTOS)
    {
      $this->acceptOrderTOS = $acceptOrderTOS;
      return $this;
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
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return string
     */
    public function getPwd()
    {
      return $this->pwd;
    }

    /**
     * @param string $pwd
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setPwd($pwd)
    {
      $this->pwd = $pwd;
      return $this;
    }

    /**
     * @return string
     */
    public function getPwdhint()
    {
      return $this->pwdhint;
    }

    /**
     * @param string $pwdhint
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setPwdhint($pwdhint)
    {
      $this->pwdhint = $pwdhint;
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
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
      return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
      return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPin()
    {
      return $this->pin;
    }

    /**
     * @param string $pin
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setPin($pin)
    {
      $this->pin = $pin;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbpuser()
    {
      return $this->dbpuser;
    }

    /**
     * @param string $dbpuser
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setDbpuser($dbpuser)
    {
      $this->dbpuser = $dbpuser;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbppwd()
    {
      return $this->dbppwd;
    }

    /**
     * @param string $dbppwd
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setDbppwd($dbppwd)
    {
      $this->dbppwd = $dbppwd;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbppwdhint()
    {
      return $this->dbppwdhint;
    }

    /**
     * @param string $dbppwdhint
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setDbppwdhint($dbppwdhint)
    {
      $this->dbppwdhint = $dbppwdhint;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbpemail()
    {
      return $this->dbpemail;
    }

    /**
     * @param string $dbpemail
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setDbpemail($dbpemail)
    {
      $this->dbpemail = $dbpemail;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbppin()
    {
      return $this->dbppin;
    }

    /**
     * @param string $dbppin
     * @return \cloudposse\wild_west_reseller_api\Shopper
     */
    public function setDbppin($dbppin)
    {
      $this->dbppin = $dbppin;
      return $this;
    }

}
