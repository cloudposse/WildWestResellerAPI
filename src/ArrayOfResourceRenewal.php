<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfResourceRenewal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResourceRenewal[] $ResourceRenewal
     */
    protected $ResourceRenewal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResourceRenewal[]
     */
    public function getResourceRenewal()
    {
      return $this->ResourceRenewal;
    }

    /**
     * @param ResourceRenewal[] $ResourceRenewal
     * @return \cloudposse\wild_west_reseller_api\ArrayOfResourceRenewal
     */
    public function setResourceRenewal(array $ResourceRenewal = null)
    {
      $this->ResourceRenewal = $ResourceRenewal;
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
      return isset($this->ResourceRenewal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResourceRenewal
     */
    public function offsetGet($offset)
    {
      return $this->ResourceRenewal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResourceRenewal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResourceRenewal[] = $value;
      } else {
        $this->ResourceRenewal[$offset] = $value;
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
      unset($this->ResourceRenewal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResourceRenewal Return the current element
     */
    public function current()
    {
      return current($this->ResourceRenewal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResourceRenewal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResourceRenewal);
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
      reset($this->ResourceRenewal);
    }

    /**
     * Countable implementation
     *
     * @return ResourceRenewal Return count of elements
     */
    public function count()
    {
      return count($this->ResourceRenewal);
    }

}
