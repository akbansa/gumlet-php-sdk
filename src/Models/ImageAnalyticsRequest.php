<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models;

use GumletRestApisLib\ApiHelper;
use stdClass;

class ImageAnalyticsRequest implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $metrics;

    /**
     * @var DateRange1
     */
    private $dateRange;

    /**
     * @param string[] $metrics
     * @param DateRange1 $dateRange
     */
    public function __construct(array $metrics, DateRange1 $dateRange)
    {
        $this->metrics = $metrics;
        $this->dateRange = $dateRange;
    }

    /**
     * Returns Metrics.
     * Define the metric you need the data for, currently we support "bandwidth_consumption",
     * "requests_count","status_4xx","status_5xx","avg_response_time""
     *
     * @return string[]
     */
    public function getMetrics(): array
    {
        return $this->metrics;
    }

    /**
     * Sets Metrics.
     * Define the metric you need the data for, currently we support "bandwidth_consumption",
     * "requests_count","status_4xx","status_5xx","avg_response_time""
     *
     * @required
     * @maps metrics
     *
     * @param string[] $metrics
     */
    public function setMetrics(array $metrics): void
    {
        $this->metrics = $metrics;
    }

    /**
     * Returns Date Range.
     * The timeframe to get the data for. Currently we only support a maximum of 30 days between `start_at`
     * and `end_at`.
     */
    public function getDateRange(): DateRange1
    {
        return $this->dateRange;
    }

    /**
     * Sets Date Range.
     * The timeframe to get the data for. Currently we only support a maximum of 30 days between `start_at`
     * and `end_at`.
     *
     * @required
     * @maps date_range
     */
    public function setDateRange(DateRange1 $dateRange): void
    {
        $this->dateRange = $dateRange;
    }

    /**
     * Converts the ImageAnalyticsRequest object to a human-readable string representation.
     *
     * @return string The string representation of the ImageAnalyticsRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ImageAnalyticsRequest',
            ['metrics' => $this->metrics, 'dateRange' => $this->dateRange]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['metrics']    = $this->metrics;
        $json['date_range'] = $this->dateRange;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
