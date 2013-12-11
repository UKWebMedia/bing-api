<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the negative keywords of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/ee703986(v=MSADS.80).aspx SetNegativeKeywordsToAdGroupsRequest Request Object
 */
final class SetNegativeKeywordsToAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of AdGroupNegativeKeywords objects that identify the ad groups to update with the specified negative keywords.
     * @var AdGroupNegativeKeywords[]
     */
    public $AdGroupNegativeKeywords;
}