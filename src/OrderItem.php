<?php

namespace cloudposse\wild_west_reseller_api;

class OrderItem extends Order
{

    /**
     * @var int $productid
     */
    protected $productid = null;

    /**
     * @var string $parent_resource_id
     */
    protected $parent_resource_id = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var string $riid
     */
    protected $riid = null;

    /**
     * @var float $duration
     */
    protected $duration = null;

    /**
     * @param int $productid
     * @param int $quantity
     * @param float $duration
     */
    public function __construct($productid, $quantity, $duration)
    {
      $this->productid = $productid;
      $this->quantity = $quantity;
      $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getProductid()
    {
      return $this->productid;
    }

    /**
     * @param int $productid
     * @return \cloudposse\wild_west_reseller_api\OrderItem
     */
    public function setProductid($productid)
    {
      $this->productid = $productid;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent_resource_id()
    {
      return $this->parent_resource_id;
    }

    /**
     * @param string $parent_resource_id
     * @return \cloudposse\wild_west_reseller_api\OrderItem
     */
    public function setParent_resource_id($parent_resource_id)
    {
      $this->parent_resource_id = $parent_resource_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \cloudposse\wild_west_reseller_api\OrderItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getRiid()
    {
      return $this->riid;
    }

    /**
     * @param string $riid
     * @return \cloudposse\wild_west_reseller_api\OrderItem
     */
    public function setRiid($riid)
    {
      $this->riid = $riid;
      return $this;
    }

    /**
     * @return float
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param float $duration
     * @return \cloudposse\wild_west_reseller_api\OrderItem
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

}
