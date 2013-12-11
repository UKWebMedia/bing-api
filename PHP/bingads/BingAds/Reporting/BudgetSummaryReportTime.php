<?php

namespace BingAds\Reporting;

/**
 * Defines the date range values of a budget summary report request.
 * @link http://msdn.microsoft.com/en-us/library/bb671928(v=msads.80).aspx BudgetSummaryReportTime Data Object
 */
final class BudgetSummaryReportTime
{
    /**
     * The end date of a date range.
     */
    public $CustomDateRangeEnd;

    /**
     * The start date of a date range.
     */
    public $CustomDateRangeStart;

    /**
     * A predefined date range.
     * @var BudgetSummaryReportTimePeriod
     */
    public $PredefinedTime;
}
