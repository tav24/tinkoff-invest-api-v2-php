<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Тип инструмента.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.InstrumentType</code>
 */
class InstrumentType
{
    /**
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const INSTRUMENT_TYPE_UNSPECIFIED = 0;
    /**
     *Облигация.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_BOND = 1;</code>
     */
    const INSTRUMENT_TYPE_BOND = 1;
    /**
     *Акция.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_SHARE = 2;</code>
     */
    const INSTRUMENT_TYPE_SHARE = 2;
    /**
     *Валюта.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_CURRENCY = 3;</code>
     */
    const INSTRUMENT_TYPE_CURRENCY = 3;
    /**
     *Exchange-traded fund. Фонд.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_ETF = 4;</code>
     */
    const INSTRUMENT_TYPE_ETF = 4;
    /**
     *Фьючерс.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_FUTURES = 5;</code>
     */
    const INSTRUMENT_TYPE_FUTURES = 5;
    /**
     *Структурная нота.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_SP = 6;</code>
     */
    const INSTRUMENT_TYPE_SP = 6;
    /**
     *Опцион.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_OPTION = 7;</code>
     */
    const INSTRUMENT_TYPE_OPTION = 7;
    /**
     *Clearing certificate.
     *
     * Generated from protobuf enum <code>INSTRUMENT_TYPE_CLEARING_CERTIFICATE = 8;</code>
     */
    const INSTRUMENT_TYPE_CLEARING_CERTIFICATE = 8;

    private static $valueToName = [
        self::INSTRUMENT_TYPE_UNSPECIFIED => 'INSTRUMENT_TYPE_UNSPECIFIED',
        self::INSTRUMENT_TYPE_BOND => 'INSTRUMENT_TYPE_BOND',
        self::INSTRUMENT_TYPE_SHARE => 'INSTRUMENT_TYPE_SHARE',
        self::INSTRUMENT_TYPE_CURRENCY => 'INSTRUMENT_TYPE_CURRENCY',
        self::INSTRUMENT_TYPE_ETF => 'INSTRUMENT_TYPE_ETF',
        self::INSTRUMENT_TYPE_FUTURES => 'INSTRUMENT_TYPE_FUTURES',
        self::INSTRUMENT_TYPE_SP => 'INSTRUMENT_TYPE_SP',
        self::INSTRUMENT_TYPE_OPTION => 'INSTRUMENT_TYPE_OPTION',
        self::INSTRUMENT_TYPE_CLEARING_CERTIFICATE => 'INSTRUMENT_TYPE_CLEARING_CERTIFICATE',
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

