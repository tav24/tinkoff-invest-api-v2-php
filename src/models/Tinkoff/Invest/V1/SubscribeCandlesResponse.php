<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Результат изменения статус подписки на свечи.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.SubscribeCandlesResponse</code>
 */
class SubscribeCandlesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     */
    protected $tracking_id = '';
    /**
     *Массив статусов подписки на свечи.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.CandleSubscription candles_subscriptions = 2;</code>
     */
    private $candles_subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tracking_id
     *          Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *     @type \Tinkoff\Invest\V1\CandleSubscription[]|\Google\Protobuf\Internal\RepeatedField $candles_subscriptions
     *          Массив статусов подписки на свечи.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @return string
     */
    public function getTrackingId()
    {
        return $this->tracking_id;
    }

    /**
     *Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_id = $var;

        return $this;
    }

    /**
     *Массив статусов подписки на свечи.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.CandleSubscription candles_subscriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCandlesSubscriptions()
    {
        return $this->candles_subscriptions;
    }

    /**
     *Массив статусов подписки на свечи.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.CandleSubscription candles_subscriptions = 2;</code>
     * @param \Tinkoff\Invest\V1\CandleSubscription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCandlesSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\CandleSubscription::class);
        $this->candles_subscriptions = $arr;

        return $this;
    }

}

