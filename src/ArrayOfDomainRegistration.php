<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfDomainRegistration implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainRegistration[] $DomainRegistration
     */
    protected $DomainRegistration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainRegistration[]
     */
    public function getDomainRegistration()
    {
      return $this->DomainRegistration;
    }

    /**
     * @param DomainRegistration[] $DomainRegistration
     * @return \cloudposse\wild_west_reseller_api\ArrayOfDomainRegistration
     */
    public function setDomainRegistration(array $DomainRegistration = null)
    {
      $this->DomainRegistration = $DomainRegistration;
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
      return isset($this->DomainRegistration[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainRegistration
     */
    public function offsetGet($offset)
    {
      return $this->DomainRegistration[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainRegistration $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainRegistration[] = $value;
      } else {
        $this->DomainRegistration[$offset] = $value;
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
      unset($this->DomainRegistration[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainRegistration Return the current element
     */
    public function current()
    {
      return current($this->DomainRegistration);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainRegistration);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainRegistration);
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
      reset($this->DomainRegistration);
    }

    /**
     * Countable implementation
     *
     * @return DomainRegistration Return count of elements
     */
    public function count()
    {
      return count($this->DomainRegistration);
    }

}
