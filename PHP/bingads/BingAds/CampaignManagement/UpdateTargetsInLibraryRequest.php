<?php

namespace BingAds\CampaignManagement;

/**
 * Updates targets in your target library.
 * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.90).aspx UpdateTargetsInLibraryRequest Request Object
 */
final class UpdateTargetsInLibraryRequest
{
    /**
     * An array of Target objects that contains the updated target information.
     * @var Target[]
     */
    public $Targets;
}
