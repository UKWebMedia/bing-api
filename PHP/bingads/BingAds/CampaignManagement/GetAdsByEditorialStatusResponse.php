<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdsByEditorialStatus service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.90).aspx GetAdsByEditorialStatusResponse Response Object
 */
final class GetAdsByEditorialStatusResponse
{
    /**
     * An array of Ad objects that represents the ads that have been retrieved. If the ad group doesn't contain ads that meet the criteria, this array is empty.
     * @var Ad[]
     */
    public $Ads;
}
