<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.OrderBookType</code>
 */
class OrderBookType
{
    /**
     *Не определён.
     *
     * Generated from protobuf enum <code>ORDERBOOK_TYPE_UNSPECIFIED = 0;</code>
     */
    const ORDERBOOK_TYPE_UNSPECIFIED = 0;
    /**
     *Биржевой стакан.
     *
     * Generated from protobuf enum <code>ORDERBOOK_TYPE_EXCHANGE = 1;</code>
     */
    const ORDERBOOK_TYPE_EXCHANGE = 1;
    /**
     *Стакан дилера.
     *
     * Generated from protobuf enum <code>ORDERBOOK_TYPE_DEALER = 2;</code>
     */
    const ORDERBOOK_TYPE_DEALER = 2;
    /**
     *Стакан биржевой и дилера.
     *
     * Generated from protobuf enum <code>ORDERBOOK_TYPE_ALL = 3;</code>
     */
    const ORDERBOOK_TYPE_ALL = 3;

    private static $valueToName = [
        self::ORDERBOOK_TYPE_UNSPECIFIED => 'ORDERBOOK_TYPE_UNSPECIFIED',
        self::ORDERBOOK_TYPE_EXCHANGE => 'ORDERBOOK_TYPE_EXCHANGE',
        self::ORDERBOOK_TYPE_DEALER => 'ORDERBOOK_TYPE_DEALER',
        self::ORDERBOOK_TYPE_ALL => 'ORDERBOOK_TYPE_ALL',
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

