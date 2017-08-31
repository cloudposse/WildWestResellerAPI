<?php

namespace cloudposse\wild_west_reseller_api;

class ContactInfo
{

    /**
     * @var string $fname
     */
    protected $fname = null;

    /**
     * @var string $lname
     */
    protected $lname = null;

    /**
     * @var string $org
     */
    protected $org = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $sa1
     */
    protected $sa1 = null;

    /**
     * @var string $sa2
     */
    protected $sa2 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $sp
     */
    protected $sp = null;

    /**
     * @var string $pc
     */
    protected $pc = null;

    /**
     * @var string $cc
     */
    protected $cc = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFname()
    {
      return $this->fname;
    }

    /**
     * @param string $fname
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setFname($fname)
    {
      $this->fname = $fname;
      return $this;
    }

    /**
     * @return string
     */
    public function getLname()
    {
      return $this->lname;
    }

    /**
     * @param string $lname
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setLname($lname)
    {
      $this->lname = $lname;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrg()
    {
      return $this->org;
    }

    /**
     * @param string $org
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setOrg($org)
    {
      $this->org = $org;
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
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getSa1()
    {
      return $this->sa1;
    }

    /**
     * @param string $sa1
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setSa1($sa1)
    {
      $this->sa1 = $sa1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSa2()
    {
      return $this->sa2;
    }

    /**
     * @param string $sa2
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setSa2($sa2)
    {
      $this->sa2 = $sa2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getSp()
    {
      return $this->sp;
    }

    /**
     * @param string $sp
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setSp($sp)
    {
      $this->sp = $sp;
      return $this;
    }

    /**
     * @return string
     */
    public function getPc()
    {
      return $this->pc;
    }

    /**
     * @param string $pc
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setPc($pc)
    {
      $this->pc = $pc;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc()
    {
      return $this->cc;
    }

    /**
     * @param string $cc
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setCc($cc)
    {
      $this->cc = $cc;
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
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \cloudposse\wild_west_reseller_api\ContactInfo
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

}
