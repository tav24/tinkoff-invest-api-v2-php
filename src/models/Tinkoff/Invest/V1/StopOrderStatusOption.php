<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Статус стоп-заяки.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.StopOrderStatusOption</code>
 */
class StopOrderStatusOption
{
    /**
     *Значение не указано.
     *
     * Generated from protobuf enum <code>STOP_ORDER_STATUS_UNSPECIFIED = 0;</code>
     */
    const STOP_ORDER_STATUS_UNSPECIFIED = 0;
    /**
     *Все заявки.
     *
     * Generated from protobuf enum <code>STOP_ORDER_STATUS_ALL = 1;</code>
     */
    const STOP_ORDER_STATUS_ALL = 1;
    /**
     *Активные заявки.
     *
     * Generated from protobuf enum <code>STOP_ORDER_STATUS_ACTIVE = 2;</code>
     */
    const STOP_ORDER_STATUS_ACTIVE = 2;
    /**
     *Исполненные заявки.
     *
     * Generated from protobuf enum <code>STOP_ORDER_STATUS_EXECUTED = 3;</code>
     */
    const STOP_ORDER_STATUS_EXECUTED = 3;
    /**
     *Отмененные заявки.
     *
     * Generated from protobuf enum <code>STOP_ORDER_STATUS_CANCELED = 4;</code>
     */
    const STOP_ORDER_STATUS_CANCELED = 4;
    /**
     *Истекшие заявки.
     *
     * Generated from protobuf enum <code>STOP_ORDER_STATUS_EXPIRED = 5;</code>
     */
    const STOP_ORDER_STATUS_EXPIRED = 5;

    private static $valueToName = [
        self::STOP_ORDER_STATUS_UNSPECIFIED => 'STOP_ORDER_STATUS_UNSPECIFIED',
        self::STOP_ORDER_STATUS_ALL => 'STOP_ORDER_STATUS_ALL',
        self::STOP_ORDER_STATUS_ACTIVE => 'STOP_ORDER_STATUS_ACTIVE',
        self::STOP_ORDER_STATUS_EXECUTED => 'STOP_ORDER_STATUS_EXECUTED',
        self::STOP_ORDER_STATUS_CANCELED => 'STOP_ORDER_STATUS_CANCELED',
        self::STOP_ORDER_STATUS_EXPIRED => 'STOP_ORDER_STATUS_EXPIRED',
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

