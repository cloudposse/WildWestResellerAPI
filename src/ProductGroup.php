<?php

namespace cloudposse\wild_west_reseller_api;

class ProductGroup
{

    /**
     * @var OrderItem $OrderItem
     */
    protected $OrderItem = null;

    /**
     * @var ArrayOfOrderItem $OrderItemAddOnArray
     */
    protected $OrderItemAddOnArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderItem
     */
    public function getOrderItem()
    {
      return $this->OrderItem;
    }

    /**
     * @param OrderItem $OrderItem
     * @return \cloudposse\wild_west_reseller_api\ProductGroup
     */
    public function setOrderItem($OrderItem)
    {
      $this->OrderItem = $OrderItem;
      return $this;
    }

    /**
     * @return ArrayOfOrderItem
     */
    public function getOrderItemAddOnArray()
    {
      return $this->OrderItemAddOnArray;
    }

    /**
     * @param ArrayOfOrderItem $OrderItemAddOnArray
     * @return \cloudposse\wild_west_reseller_api\ProductGroup
     */
    public function setOrderItemAddOnArray($OrderItemAddOnArray)
    {
      $this->OrderItemAddOnArray = $OrderItemAddOnArray;
      return $this;
    }

}
