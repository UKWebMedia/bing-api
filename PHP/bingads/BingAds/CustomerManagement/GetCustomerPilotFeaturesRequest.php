<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of the pilot programs in which the specified customer participates.
 * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeaturesRequest Request Object
 */
final class GetCustomerPilotFeaturesRequest
{
    /**
     * The identifier of the customer whose list of pilot programs you want to get.
     * @var long
     */
    public $CustomerId;
}
