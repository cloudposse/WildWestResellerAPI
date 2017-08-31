<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfDomainByProxy implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainByProxy[] $DomainByProxy
     */
    protected $DomainByProxy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainByProxy[]
     */
    public function getDomainByProxy()
    {
      return $this->DomainByProxy;
    }

    /**
     * @param DomainByProxy[] $DomainByProxy
     * @return \cloudposse\wild_west_reseller_api\ArrayOfDomainByProxy
     */
    public function setDomainByProxy(array $DomainByProxy = null)
    {
      $this->DomainByProxy = $DomainByProxy;
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
      return isset($this->DomainByProxy[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainByProxy
     */
    public function offsetGet($offset)
    {
      return $this->DomainByProxy[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainByProxy $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainByProxy[] = $value;
      } else {
        $this->DomainByProxy[$offset] = $value;
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
      unset($this->DomainByProxy[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainByProxy Return the current element
     */
    public function current()
    {
      return current($this->DomainByProxy);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainByProxy);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainByProxy);
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
      reset($this->DomainByProxy);
    }

    /**
     * Countable implementation
     *
     * @return DomainByProxy Return count of elements
     */
    public function count()
    {
      return count($this->DomainByProxy);
    }

}
