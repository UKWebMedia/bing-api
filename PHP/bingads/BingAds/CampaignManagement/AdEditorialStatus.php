<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the editorial review status values of an ad.
 * @link http://msdn.microsoft.com/en-us/library/cc565084(v=msads.90).aspx AdEditorialStatus Value Set
 */
final class AdEditorialStatus
{
    /** The ad passed editorial review. */
    const Active = 'Active';

    /** The ad failed editorial review. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the ad is undergoing editorial review. */
    const Inactive = 'Inactive';
}
