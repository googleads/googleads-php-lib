<?php

namespace Google\AdsApi\AdWords\v201601\express;

class Creative
{

    /**
     * @var string $headline
     */
    protected $headline = null;

    /**
     * @var string $line1
     */
    protected $line1 = null;

    /**
     * @var string $line2
     */
    protected $line2 = null;

    /**
     * @param string $headline
     * @param string $line1
     * @param string $line2
     */
    public function __construct($headline = null, $line1 = null, $line2 = null)
    {
      $this->headline = $headline;
      $this->line1 = $line1;
      $this->line2 = $line2;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
      return $this->headline;
    }

    /**
     * @param string $headline
     * @return \Google\AdsApi\AdWords\v201601\express\Creative
     */
    public function setHeadline($headline)
    {
      $this->headline = $headline;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
      return $this->line1;
    }

    /**
     * @param string $line1
     * @return \Google\AdsApi\AdWords\v201601\express\Creative
     */
    public function setLine1($line1)
    {
      $this->line1 = $line1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
      return $this->line2;
    }

    /**
     * @param string $line2
     * @return \Google\AdsApi\AdWords\v201601\express\Creative
     */
    public function setLine2($line2)
    {
      $this->line2 = $line2;
      return $this;
    }

}
