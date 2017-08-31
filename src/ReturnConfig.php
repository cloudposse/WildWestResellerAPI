<?php

namespace cloudposse\wild_west_reseller_api;

class ReturnConfig
{

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @var int $resultsPerPage
     */
    protected $resultsPerPage = null;

    /**
     * @var string $orderBy
     */
    protected $orderBy = null;

    /**
     * @var string $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @param int $pageNumber
     * @param int $resultsPerPage
     */
    public function __construct($pageNumber, $resultsPerPage)
    {
      $this->pageNumber = $pageNumber;
      $this->resultsPerPage = $resultsPerPage;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return \cloudposse\wild_west_reseller_api\ReturnConfig
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultsPerPage()
    {
      return $this->resultsPerPage;
    }

    /**
     * @param int $resultsPerPage
     * @return \cloudposse\wild_west_reseller_api\ReturnConfig
     */
    public function setResultsPerPage($resultsPerPage)
    {
      $this->resultsPerPage = $resultsPerPage;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param string $orderBy
     * @return \cloudposse\wild_west_reseller_api\ReturnConfig
     */
    public function setOrderBy($orderBy)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
      return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return \cloudposse\wild_west_reseller_api\ReturnConfig
     */
    public function setSortOrder($sortOrder)
    {
      $this->sortOrder = $sortOrder;
      return $this;
    }

}
