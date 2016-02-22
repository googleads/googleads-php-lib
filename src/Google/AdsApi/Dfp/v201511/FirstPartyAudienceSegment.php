<?php

namespace Google\AdsApi\Dfp\v201511;

abstract class FirstPartyAudienceSegment extends \Google\AdsApi\Dfp\v201511\AudienceSegment
{

    /**
     * @param int $id
     * @param string $name
     * @param long[] $categoryIds
     * @param string $description
     * @param string $status
     * @param int $size
     * @param \Google\AdsApi\Dfp\v201511\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $dataProvider, $type);
    }

}
