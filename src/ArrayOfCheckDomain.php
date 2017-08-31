<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfCheckDomain implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CheckDomain[] $CheckDomain
     */
    protected $CheckDomain = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CheckDomain[]
     */
    public function getCheckDomain()
    {
      return $this->CheckDomain;
    }

    /**
     * @param CheckDomain[] $CheckDomain
     * @return \cloudposse\wild_west_reseller_api\ArrayOfCheckDomain
     */
    public function setCheckDomain(array $CheckDomain = null)
    {
      $this->CheckDomain = $CheckDomain;
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
      return isset($this->CheckDomain[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CheckDomain
     */
    public function offsetGet($offset)
    {
      return $this->CheckDomain[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CheckDomain $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CheckDomain[] = $value;
      } else {
        $this->CheckDomain[$offset] = $value;
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
      unset($this->CheckDomain[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CheckDomain Return the current element
     */
    public function current()
    {
      return current($this->CheckDomain);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CheckDomain);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CheckDomain);
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
      reset($this->CheckDomain);
    }

    /**
     * Countable implementation
     *
     * @return CheckDomain Return count of elements
     */
    public function count()
    {
      return count($this->CheckDomain);
    }

}
