<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Данные о позиции портфеля.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PositionData</code>
 */
class PositionData extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор счета.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     *Массив валютных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsMoney money = 2;</code>
     */
    private $money;
    /**
     *Список ценно-бумажных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsSecurities securities = 3;</code>
     */
    private $securities;
    /**
     *Список фьючерсов портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsFutures futures = 4;</code>
     */
    private $futures;
    /**
     *Список опционов портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsOptions options = 5;</code>
     */
    private $options;
    /**
     *Дата и время операции в формате UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     */
    protected $date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *          Идентификатор счета.
     *     @type \Tinkoff\Invest\V1\PositionsMoney[]|\Google\Protobuf\Internal\RepeatedField $money
     *          Массив валютных позиций портфеля.
     *     @type \Tinkoff\Invest\V1\PositionsSecurities[]|\Google\Protobuf\Internal\RepeatedField $securities
     *          Список ценно-бумажных позиций портфеля.
     *     @type \Tinkoff\Invest\V1\PositionsFutures[]|\Google\Protobuf\Internal\RepeatedField $futures
     *          Список фьючерсов портфеля.
     *     @type \Tinkoff\Invest\V1\PositionsOptions[]|\Google\Protobuf\Internal\RepeatedField $options
     *          Список опционов портфеля.
     *     @type \Google\Protobuf\Timestamp $date
     *          Дата и время операции в формате UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор счета.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Идентификатор счета.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     *Массив валютных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsMoney money = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     *Массив валютных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsMoney money = 2;</code>
     * @param \Tinkoff\Invest\V1\PositionsMoney[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMoney($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\PositionsMoney::class);
        $this->money = $arr;

        return $this;
    }

    /**
     *Список ценно-бумажных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsSecurities securities = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecurities()
    {
        return $this->securities;
    }

    /**
     *Список ценно-бумажных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsSecurities securities = 3;</code>
     * @param \Tinkoff\Invest\V1\PositionsSecurities[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecurities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\PositionsSecurities::class);
        $this->securities = $arr;

        return $this;
    }

    /**
     *Список фьючерсов портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsFutures futures = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFutures()
    {
        return $this->futures;
    }

    /**
     *Список фьючерсов портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsFutures futures = 4;</code>
     * @param \Tinkoff\Invest\V1\PositionsFutures[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFutures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\PositionsFutures::class);
        $this->futures = $arr;

        return $this;
    }

    /**
     *Список опционов портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsOptions options = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     *Список опционов портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PositionsOptions options = 5;</code>
     * @param \Tinkoff\Invest\V1\PositionsOptions[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\PositionsOptions::class);
        $this->options = $arr;

        return $this;
    }

    /**
     *Дата и время операции в формате UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }

    public function hasDate()
    {
        return isset($this->date);
    }

    public function clearDate()
    {
        unset($this->date);
    }

    /**
     *Дата и время операции в формате UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date = $var;

        return $this;
    }

}

