<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Режим торгов инструмента
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.SecurityTradingStatus</code>
 */
class SecurityTradingStatus
{
    /**
     *Торговый статус не определен.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_UNSPECIFIED = 0;</code>
     */
    const SECURITY_TRADING_STATUS_UNSPECIFIED = 0;
    /**
     *Недоступен для торгов.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_NOT_AVAILABLE_FOR_TRADING = 1;</code>
     */
    const SECURITY_TRADING_STATUS_NOT_AVAILABLE_FOR_TRADING = 1;
    /**
     *Период открытия торгов.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_OPENING_PERIOD = 2;</code>
     */
    const SECURITY_TRADING_STATUS_OPENING_PERIOD = 2;
    /**
     *Период закрытия торгов.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_CLOSING_PERIOD = 3;</code>
     */
    const SECURITY_TRADING_STATUS_CLOSING_PERIOD = 3;
    /**
     *Перерыв в торговле.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_BREAK_IN_TRADING = 4;</code>
     */
    const SECURITY_TRADING_STATUS_BREAK_IN_TRADING = 4;
    /**
     *Нормальная торговля.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_NORMAL_TRADING = 5;</code>
     */
    const SECURITY_TRADING_STATUS_NORMAL_TRADING = 5;
    /**
     *Аукцион закрытия.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_CLOSING_AUCTION = 6;</code>
     */
    const SECURITY_TRADING_STATUS_CLOSING_AUCTION = 6;
    /**
     *Аукцион крупных пакетов.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_DARK_POOL_AUCTION = 7;</code>
     */
    const SECURITY_TRADING_STATUS_DARK_POOL_AUCTION = 7;
    /**
     *Дискретный аукцион.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_DISCRETE_AUCTION = 8;</code>
     */
    const SECURITY_TRADING_STATUS_DISCRETE_AUCTION = 8;
    /**
     *Аукцион открытия.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_OPENING_AUCTION_PERIOD = 9;</code>
     */
    const SECURITY_TRADING_STATUS_OPENING_AUCTION_PERIOD = 9;
    /**
     *Период торгов по цене аукциона закрытия.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_TRADING_AT_CLOSING_AUCTION_PRICE = 10;</code>
     */
    const SECURITY_TRADING_STATUS_TRADING_AT_CLOSING_AUCTION_PRICE = 10;
    /**
     *Сессия назначена.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_SESSION_ASSIGNED = 11;</code>
     */
    const SECURITY_TRADING_STATUS_SESSION_ASSIGNED = 11;
    /**
     *Сессия закрыта.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_SESSION_CLOSE = 12;</code>
     */
    const SECURITY_TRADING_STATUS_SESSION_CLOSE = 12;
    /**
     *Сессия открыта.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_SESSION_OPEN = 13;</code>
     */
    const SECURITY_TRADING_STATUS_SESSION_OPEN = 13;
    /**
     *Доступна торговля в режиме внутренней ликвидности брокера.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_DEALER_NORMAL_TRADING = 14;</code>
     */
    const SECURITY_TRADING_STATUS_DEALER_NORMAL_TRADING = 14;
    /**
     *Перерыв торговли в режиме внутренней ликвидности брокера.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_DEALER_BREAK_IN_TRADING = 15;</code>
     */
    const SECURITY_TRADING_STATUS_DEALER_BREAK_IN_TRADING = 15;
    /**
     *Недоступна торговля в режиме внутренней ликвидности брокера.
     *
     * Generated from protobuf enum <code>SECURITY_TRADING_STATUS_DEALER_NOT_AVAILABLE_FOR_TRADING = 16;</code>
     */
    const SECURITY_TRADING_STATUS_DEALER_NOT_AVAILABLE_FOR_TRADING = 16;

    private static $valueToName = [
        self::SECURITY_TRADING_STATUS_UNSPECIFIED => 'SECURITY_TRADING_STATUS_UNSPECIFIED',
        self::SECURITY_TRADING_STATUS_NOT_AVAILABLE_FOR_TRADING => 'SECURITY_TRADING_STATUS_NOT_AVAILABLE_FOR_TRADING',
        self::SECURITY_TRADING_STATUS_OPENING_PERIOD => 'SECURITY_TRADING_STATUS_OPENING_PERIOD',
        self::SECURITY_TRADING_STATUS_CLOSING_PERIOD => 'SECURITY_TRADING_STATUS_CLOSING_PERIOD',
        self::SECURITY_TRADING_STATUS_BREAK_IN_TRADING => 'SECURITY_TRADING_STATUS_BREAK_IN_TRADING',
        self::SECURITY_TRADING_STATUS_NORMAL_TRADING => 'SECURITY_TRADING_STATUS_NORMAL_TRADING',
        self::SECURITY_TRADING_STATUS_CLOSING_AUCTION => 'SECURITY_TRADING_STATUS_CLOSING_AUCTION',
        self::SECURITY_TRADING_STATUS_DARK_POOL_AUCTION => 'SECURITY_TRADING_STATUS_DARK_POOL_AUCTION',
        self::SECURITY_TRADING_STATUS_DISCRETE_AUCTION => 'SECURITY_TRADING_STATUS_DISCRETE_AUCTION',
        self::SECURITY_TRADING_STATUS_OPENING_AUCTION_PERIOD => 'SECURITY_TRADING_STATUS_OPENING_AUCTION_PERIOD',
        self::SECURITY_TRADING_STATUS_TRADING_AT_CLOSING_AUCTION_PRICE => 'SECURITY_TRADING_STATUS_TRADING_AT_CLOSING_AUCTION_PRICE',
        self::SECURITY_TRADING_STATUS_SESSION_ASSIGNED => 'SECURITY_TRADING_STATUS_SESSION_ASSIGNED',
        self::SECURITY_TRADING_STATUS_SESSION_CLOSE => 'SECURITY_TRADING_STATUS_SESSION_CLOSE',
        self::SECURITY_TRADING_STATUS_SESSION_OPEN => 'SECURITY_TRADING_STATUS_SESSION_OPEN',
        self::SECURITY_TRADING_STATUS_DEALER_NORMAL_TRADING => 'SECURITY_TRADING_STATUS_DEALER_NORMAL_TRADING',
        self::SECURITY_TRADING_STATUS_DEALER_BREAK_IN_TRADING => 'SECURITY_TRADING_STATUS_DEALER_BREAK_IN_TRADING',
        self::SECURITY_TRADING_STATUS_DEALER_NOT_AVAILABLE_FOR_TRADING => 'SECURITY_TRADING_STATUS_DEALER_NOT_AVAILABLE_FOR_TRADING',
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

