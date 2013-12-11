<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetHistoricalSearchCount service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336988(v=msads.90).aspx GetHistoricalSearchCountResponse Response Object
 */
final class GetHistoricalSearchCountResponse
{
    /**
     * An array of KeywordSearchCount objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordSearchCount[]
     */
    public $KeywordSearchCounts;
}
