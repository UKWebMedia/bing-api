<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more website-placement bids from an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.90).aspx DeleteSitePlacementsRequest Request Object
 */
final class DeleteSitePlacementsRequest
{
    /**
     * The identifier of the ad group from which to delete the website placement bids.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of long values that specifies the site placement bids to be removed.
     * @var long[]
     */
    public $SitePlacementIds;
}
