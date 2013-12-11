<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified ads from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.90).aspx GetAdsByIdsRequest Request Object
 */
final class GetAdsByIdsRequest
{
    /**
     * The identifier of the ad group that contains the ads to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 20 identifiers of the ads to get.
     * @var long[]
     */
    public $AdIds;
}
