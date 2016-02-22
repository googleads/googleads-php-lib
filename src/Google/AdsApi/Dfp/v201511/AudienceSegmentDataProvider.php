<?php

namespace Google\AdsApi\Dfp\v201511;

class AudienceSegmentDataProvider
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\Dfp\v201511\AudienceSegmentDataProvider
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
