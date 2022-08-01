<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Результат подписки.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.SubscriptionStatus</code>
 */
class SubscriptionStatus
{
    /**
     *Статус подписки не определён.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_UNSPECIFIED = 0;</code>
     */
    const SUBSCRIPTION_STATUS_UNSPECIFIED = 0;
    /**
     *Успешно.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_SUCCESS = 1;</code>
     */
    const SUBSCRIPTION_STATUS_SUCCESS = 1;
    /**
     *Инструмент не найден.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_INSTRUMENT_NOT_FOUND = 2;</code>
     */
    const SUBSCRIPTION_STATUS_INSTRUMENT_NOT_FOUND = 2;
    /**
     *Некорректный статус подписки, список возможных значений: [SubscriptionAction](https://tinkoff.github.io/investAPI/marketdata#subscriptionaction).
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_SUBSCRIPTION_ACTION_IS_INVALID = 3;</code>
     */
    const SUBSCRIPTION_STATUS_SUBSCRIPTION_ACTION_IS_INVALID = 3;
    /**
     *Некорректная глубина стакана, доступные значения: 1, 10, 20, 30, 40, 50.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_DEPTH_IS_INVALID = 4;</code>
     */
    const SUBSCRIPTION_STATUS_DEPTH_IS_INVALID = 4;
    /**
     *Некорректный интервал свечей, список возможных значений: [SubscriptionInterval](https://tinkoff.github.io/investAPI/marketdata#subscriptioninterval).
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_INTERVAL_IS_INVALID = 5;</code>
     */
    const SUBSCRIPTION_STATUS_INTERVAL_IS_INVALID = 5;
    /**
     *Превышен лимит на общее количество подписок в рамках стрима, подробнее: [Лимитная политика](https://tinkoff.github.io/investAPI/limits/).
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_LIMIT_IS_EXCEEDED = 6;</code>
     */
    const SUBSCRIPTION_STATUS_LIMIT_IS_EXCEEDED = 6;
    /**
     *Внутренняя ошибка сервиса.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_INTERNAL_ERROR = 7;</code>
     */
    const SUBSCRIPTION_STATUS_INTERNAL_ERROR = 7;
    /**
     *Превышен лимит на количество запросов на подписки в течение установленного отрезка времени
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_TOO_MANY_REQUESTS = 8;</code>
     */
    const SUBSCRIPTION_STATUS_TOO_MANY_REQUESTS = 8;

    private static $valueToName = [
        self::SUBSCRIPTION_STATUS_UNSPECIFIED => 'SUBSCRIPTION_STATUS_UNSPECIFIED',
        self::SUBSCRIPTION_STATUS_SUCCESS => 'SUBSCRIPTION_STATUS_SUCCESS',
        self::SUBSCRIPTION_STATUS_INSTRUMENT_NOT_FOUND => 'SUBSCRIPTION_STATUS_INSTRUMENT_NOT_FOUND',
        self::SUBSCRIPTION_STATUS_SUBSCRIPTION_ACTION_IS_INVALID => 'SUBSCRIPTION_STATUS_SUBSCRIPTION_ACTION_IS_INVALID',
        self::SUBSCRIPTION_STATUS_DEPTH_IS_INVALID => 'SUBSCRIPTION_STATUS_DEPTH_IS_INVALID',
        self::SUBSCRIPTION_STATUS_INTERVAL_IS_INVALID => 'SUBSCRIPTION_STATUS_INTERVAL_IS_INVALID',
        self::SUBSCRIPTION_STATUS_LIMIT_IS_EXCEEDED => 'SUBSCRIPTION_STATUS_LIMIT_IS_EXCEEDED',
        self::SUBSCRIPTION_STATUS_INTERNAL_ERROR => 'SUBSCRIPTION_STATUS_INTERNAL_ERROR',
        self::SUBSCRIPTION_STATUS_TOO_MANY_REQUESTS => 'SUBSCRIPTION_STATUS_TOO_MANY_REQUESTS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

