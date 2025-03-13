<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос установки stream-соединения.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PortfolioStreamRequest</code>
 */
class PortfolioStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив идентификаторов счетов пользователя.
     *
     * Generated from protobuf field <code>repeated string accounts = 1;</code>
     */
    private $accounts;
    /**
     *Запрос настройки пинга.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PingDelaySettings ping_settings = 15;</code>
     */
    protected $ping_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $accounts
     *          Массив идентификаторов счетов пользователя.
     *     @type \Tinkoff\Invest\V1\PingDelaySettings $ping_settings
     *          Запрос настройки пинга.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив идентификаторов счетов пользователя.
     *
     * Generated from protobuf field <code>repeated string accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     *Массив идентификаторов счетов пользователя.
     *
     * Generated from protobuf field <code>repeated string accounts = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->accounts = $arr;

        return $this;
    }

    /**
     *Запрос настройки пинга.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PingDelaySettings ping_settings = 15;</code>
     * @return \Tinkoff\Invest\V1\PingDelaySettings|null
     */
    public function getPingSettings()
    {
        return isset($this->ping_settings) ? $this->ping_settings : null;
    }

    public function hasPingSettings()
    {
        return isset($this->ping_settings);
    }

    public function clearPingSettings()
    {
        unset($this->ping_settings);
    }

    /**
     *Запрос настройки пинга.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PingDelaySettings ping_settings = 15;</code>
     * @param \Tinkoff\Invest\V1\PingDelaySettings $var
     * @return $this
     */
    public function setPingSettings($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\PingDelaySettings::class);
        $this->ping_settings = $var;

        return $this;
    }

}

