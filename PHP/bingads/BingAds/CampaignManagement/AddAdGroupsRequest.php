<?php

namespace BingAds\CampaignManagement;

/**
 * Adds new ad groups to a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb671739(v=MSADS.80).aspx AddAdGroupsRequest Request Object
 */
final class AddAdGroupsRequest
{
    /**
     * The identifier of the campaign to add the ad groups to.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of AdGroup objects to add to the specified campaign.
     * @var AdGroup[]
     */
    public $AdGroups;
}
