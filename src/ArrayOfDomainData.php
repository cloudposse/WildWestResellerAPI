<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfDomainData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainData[] $DomainData
     */
    protected $DomainData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainData[]
     */
    public function getDomainData()
    {
      return $this->DomainData;
    }

    /**
     * @param DomainData[] $DomainData
     * @return \cloudposse\wild_west_reseller_api\ArrayOfDomainData
     */
    public function setDomainData(array $DomainData = null)
    {
      $this->DomainData = $DomainData;
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
      return isset($this->DomainData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainData
     */
    public function offsetGet($offset)
    {
      return $this->DomainData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainData[] = $value;
      } else {
        $this->DomainData[$offset] = $value;
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
      unset($this->DomainData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainData Return the current element
     */
    public function current()
    {
      return current($this->DomainData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainData);
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
      reset($this->DomainData);
    }

    /**
     * Countable implementation
     *
     * @return DomainData Return count of elements
     */
    public function count()
    {
      return count($this->DomainData);
    }

}
