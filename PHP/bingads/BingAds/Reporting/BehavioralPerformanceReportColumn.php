<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a behavioral segment performance report.
 * @link http://msdn.microsoft.com/en-us/library/dd796960(v=msads.80).aspx BehavioralPerformanceReportColumn Value Set
 */
final class BehavioralPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the Bing Ads website that displayed the ad. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the behavioral segment identifier. */
    const BehavioralId = 'BehavioralId';

    /** The report will include a column that contains the behavioral segment name. */
    const BehavioralName = 'BehavioralName';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the destination URL. */
    const DestinationUrl = 'DestinationUrl';

    /** The report will include a column that contains the maximum cost-per-click for the behavioral segment. */
    const CurrentMaxCpc = 'CurrentMaxCpc';

    /** The report will include a column that contains the currency code. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the match type. */
    const MatchType = 'MatchType';

    /** The report will include a column that contains the ad distribution medium. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of impressions. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The click-through rate (CTR) is the ratio of the number of times that an ad is clicked to the number of ad impressions. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click. */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total amount of money spent for the time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad in paid results. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the ad type. */
    const AdType = 'AdType';

    /** Specifies the cost-per-thousand-impressions. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';
}
