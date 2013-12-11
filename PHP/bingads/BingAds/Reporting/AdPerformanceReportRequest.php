<?php

namespace BingAds\Reporting;

/**
 * Defines an ad performance report request that aggregates the performance data by ad for a specified time period. You can use this report to identify ads that are performing well (in terms of clicks, conversions, and spend), and those that you may need to adjust to improve the click-through rate.
 * @link http://msdn.microsoft.com/en-us/library/bb672006(v=msads.90).aspx AdPerformanceReportRequest Data Object
 */
final class AdPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AdPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}
