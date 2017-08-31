<?php

namespace cloudposse\wild_west_reseller_api;

class ShopperNoDBP
{

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

    
    public function __construct()
    {
    
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
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
     * @return \cloudposse\wild_west_reseller_api\ShopperNoDBP
     */
    public function setPin($pin)
    {
      $this->pin = $pin;
      return $this;
    }

}
