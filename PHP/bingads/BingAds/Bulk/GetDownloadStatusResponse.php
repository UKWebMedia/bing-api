<?php

namespace BingAds\Bulk;

/**
 * Response object for the GetDownloadStatus service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.80).aspx GetDownloadStatusResponse Response Object
 */
final class GetDownloadStatusResponse
{
    /**
     * The URL that contains the download data. This element contains the URL when the Status element is Success.
     * @var string
     */
    public $DownloadUrl;

    /**
     * The status of the download. For possible values, see the DownloadStatus value set.
     * @var DownloadStatus
     */
    public $Status;
}
