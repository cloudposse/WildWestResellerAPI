<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfDomainRedemption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainRedemption[] $DomainRedemption
     */
    protected $DomainRedemption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainRedemption[]
     */
    public function getDomainRedemption()
    {
      return $this->DomainRedemption;
    }

    /**
     * @param DomainRedemption[] $DomainRedemption
     * @return \cloudposse\wild_west_reseller_api\ArrayOfDomainRedemption
     */
    public function setDomainRedemption(array $DomainRedemption = null)
    {
      $this->DomainRedemption = $DomainRedemption;
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
      return isset($this->DomainRedemption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainRedemption
     */
    public function offsetGet($offset)
    {
      return $this->DomainRedemption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainRedemption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainRedemption[] = $value;
      } else {
        $this->DomainRedemption[$offset] = $value;
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
      unset($this->DomainRedemption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainRedemption Return the current element
     */
    public function current()
    {
      return current($this->DomainRedemption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainRedemption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainRedemption);
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
      reset($this->DomainRedemption);
    }

    /**
     * Countable implementation
     *
     * @return DomainRedemption Return count of elements
     */
    public function count()
    {
      return count($this->DomainRedemption);
    }

}
