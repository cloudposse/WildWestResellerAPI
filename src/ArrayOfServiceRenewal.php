<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfServiceRenewal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceRenewal[] $ServiceRenewal
     */
    protected $ServiceRenewal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceRenewal[]
     */
    public function getServiceRenewal()
    {
      return $this->ServiceRenewal;
    }

    /**
     * @param ServiceRenewal[] $ServiceRenewal
     * @return \cloudposse\wild_west_reseller_api\ArrayOfServiceRenewal
     */
    public function setServiceRenewal(array $ServiceRenewal = null)
    {
      $this->ServiceRenewal = $ServiceRenewal;
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
      return isset($this->ServiceRenewal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceRenewal
     */
    public function offsetGet($offset)
    {
      return $this->ServiceRenewal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceRenewal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceRenewal[] = $value;
      } else {
        $this->ServiceRenewal[$offset] = $value;
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
      unset($this->ServiceRenewal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceRenewal Return the current element
     */
    public function current()
    {
      return current($this->ServiceRenewal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceRenewal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceRenewal);
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
      reset($this->ServiceRenewal);
    }

    /**
     * Countable implementation
     *
     * @return ServiceRenewal Return count of elements
     */
    public function count()
    {
      return count($this->ServiceRenewal);
    }

}
