<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * The metric to be aggregated for this request.
 */
class Metric1Enum
{
    public const VIEWS = 'views';

    public const UNIQUE_VIEWS = 'unique_views';

    public const DOWNSCALE_PERCENTAGE = 'downscale_percentage';

    public const UPSCALE_PERCENTAGE = 'upscale_percentage';

    public const REBUFFER_PERCENTAGE = 'rebuffer_percentage';

    public const STARTUP_TIME = 'startup_time';

    public const PLAYER_STARTUP_TIME = 'player_startup_time';

    public const SEEK_LATENCY = 'seek_latency';

    public const EXITS_BEFORE_STARTUP = 'exits_before_startup';

    public const PLAYBACK_FAILURE_PERCENTAGE = 'playback_failure_percentage';

    public const COMPLETION_PERCENT = 'completion_percent';

    public const COMPLETION_PERCENT_BY_VIEWS = 'completion_percent_by_views';

    public const REBUFFER_DURATION = 'rebuffer_duration';

    public const PLAYING_TIME = 'playing_time';

    public const REBUFFER_COUNT = 'rebuffer_count';

    public const REBUFFER_FREQUENCY = 'rebuffer_frequency';

    public const AVERAGE_BITRATE = 'average_bitrate';

    public const CONCURRENT_USERS = 'concurrent_users';

    public const PLAYBACK_RATE = 'playback_rate';

    private const _ALL_VALUES = [
        self::VIEWS,
        self::UNIQUE_VIEWS,
        self::DOWNSCALE_PERCENTAGE,
        self::UPSCALE_PERCENTAGE,
        self::REBUFFER_PERCENTAGE,
        self::STARTUP_TIME,
        self::PLAYER_STARTUP_TIME,
        self::SEEK_LATENCY,
        self::EXITS_BEFORE_STARTUP,
        self::PLAYBACK_FAILURE_PERCENTAGE,
        self::COMPLETION_PERCENT,
        self::COMPLETION_PERCENT_BY_VIEWS,
        self::REBUFFER_DURATION,
        self::PLAYING_TIME,
        self::REBUFFER_COUNT,
        self::REBUFFER_FREQUENCY,
        self::AVERAGE_BITRATE,
        self::CONCURRENT_USERS,
        self::PLAYBACK_RATE
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for Metric1Enum.");
    }
}
