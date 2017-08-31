<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfDomainBackOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainBackOrder[] $DomainBackOrder
     */
    protected $DomainBackOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainBackOrder[]
     */
    public function getDomainBackOrder()
    {
      return $this->DomainBackOrder;
    }

    /**
     * @param DomainBackOrder[] $DomainBackOrder
     * @return \cloudposse\wild_west_reseller_api\ArrayOfDomainBackOrder
     */
    public function setDomainBackOrder(array $DomainBackOrder = null)
    {
      $this->DomainBackOrder = $DomainBackOrder;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DomainBackOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainBackOrder
     */
    public function offsetGet($offset)
    {
      return $this->DomainBackOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainBackOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainBackOrder[] = $value;
      } else {
        $this->DomainBackOrder[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DomainBackOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainBackOrder Return the current element
     */
    public function current()
    {
      return current($this->DomainBackOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainBackOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainBackOrder);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DomainBackOrder);
    }

    /**
     * Countable implementation
     *
     * @return DomainBackOrder Return count of elements
     */
    public function count()
    {
      return count($this->DomainBackOrder);
    }

}
