<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetKeywordsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.90).aspx GetKeywordsByAdGroupIdResponse Response Object
 */
final class GetKeywordsByAdGroupIdResponse
{
    /**
     * An array of Keyword objects that represents the retrieved keywords. If no keywords exist, an empty array is returned.
     * @var Keyword[]
     */
    public $Keywords;
}
