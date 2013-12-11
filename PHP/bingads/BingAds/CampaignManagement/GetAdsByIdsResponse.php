<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671475(v=MSADS.80).aspx GetAdsByIdsResponse Response Object
 */
final class GetAdsByIdsResponse
{
    /**
     * An array of Ad objects that corresponds directly to the ad identifiers that you specified in the request. If an ad does not exist, the corresponding element of the array is set to NULL.
     * @var Ad[]
     */
    public $Ads;
}
