<?php

namespace cloudposse\wild_west_reseller_api;

class ArrayOfNS implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var NS[] $NS
     */
    protected $NS = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NS[]
     */
    public function getNS()
    {
      return $this->NS;
    }

    /**
     * @param NS[] $NS
     * @return \cloudposse\wild_west_reseller_api\ArrayOfNS
     */
    public function setNS(array $NS = null)
    {
      $this->NS = $NS;
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
      return isset($this->NS[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return NS
     */
    public function offsetGet($offset)
    {
      return $this->NS[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param NS $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->NS[] = $value;
      } else {
        $this->NS[$offset] = $value;
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
      unset($this->NS[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return NS Return the current element
     */
    public function current()
    {
      return current($this->NS);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->NS);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->NS);
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
      reset($this->NS);
    }

    /**
     * Countable implementation
     *
     * @return NS Return count of elements
     */
    public function count()
    {
      return count($this->NS);
    }

}
