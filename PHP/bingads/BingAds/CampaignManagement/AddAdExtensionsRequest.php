<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ad extensions to an account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.90).aspx AddAdExtensionsRequest Request Object
 */
final class AddAdExtensionsRequest
{
    /**
     * The identifier of the account to add the extensions to.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions of any type to add to the account. You can specify a maximum of 100 extensions per call.
     * @var AdExtension[]
     */
    public $AdExtensions;
}
