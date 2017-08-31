<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfDomainTransfer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainTransfer[] $DomainTransfer
     */
    protected $DomainTransfer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainTransfer[]
     */
    public function getDomainTransfer()
    {
      return $this->DomainTransfer;
    }

    /**
     * @param DomainTransfer[] $DomainTransfer
     * @return \cloudposse\wild_west_reseller_api\ArrayOfDomainTransfer
     */
    public function setDomainTransfer(array $DomainTransfer = null)
    {
      $this->DomainTransfer = $DomainTransfer;
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
      return isset($this->DomainTransfer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainTransfer
     */
    public function offsetGet($offset)
    {
      return $this->DomainTransfer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainTransfer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainTransfer[] = $value;
      } else {
        $this->DomainTransfer[$offset] = $value;
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
      unset($this->DomainTransfer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainTransfer Return the current element
     */
    public function current()
    {
      return current($this->DomainTransfer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainTransfer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainTransfer);
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
      reset($this->DomainTransfer);
    }

    /**
     * Countable implementation
     *
     * @return DomainTransfer Return count of elements
     */
    public function count()
    {
      return count($this->DomainTransfer);
    }

}
