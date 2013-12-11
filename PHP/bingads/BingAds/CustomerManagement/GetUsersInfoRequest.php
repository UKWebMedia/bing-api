<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
 * @link http://msdn.microsoft.com/en-us/library/dn451283(v=msads.90).aspx GetUsersInfoRequest Request Object
 */
final class GetUsersInfoRequest
{
    /**
     * The identifier of the customer to which the users belong.
     * @var long
     */
    public $CustomerId;

    /**
     * The status value that the operation uses to filter the list of users that it returns. The operation returns only those users with the specified status.
     * @var UserLifeCycleStatus
     */
    public $StatusFilter;
}
