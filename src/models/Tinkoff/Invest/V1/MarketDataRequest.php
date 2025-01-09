<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос подписки или отписки на определённые биржевые данные.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.MarketDataRequest</code>
 */
class MarketDataRequest extends \Google\Protobuf\Internal\Message
{
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\SubscribeCandlesRequest $subscribe_candles_request
     *          Запрос подписки на свечи.
     *     @type \Tinkoff\Invest\V1\SubscribeOrderBookRequest $subscribe_order_book_request
     *          Запрос подписки на стаканы.
     *     @type \Tinkoff\Invest\V1\SubscribeTradesRequest $subscribe_trades_request
     *          Запрос подписки на ленту обезличенных сделок.
     *     @type \Tinkoff\Invest\V1\SubscribeInfoRequest $subscribe_info_request
     *          Запрос подписки на торговые статусы инструментов.
     *     @type \Tinkoff\Invest\V1\SubscribeLastPriceRequest $subscribe_last_price_request
     *          Запрос подписки на цены последних сделок.
     *     @type \Tinkoff\Invest\V1\GetMySubscriptions $get_my_subscriptions
     *          Запрос своих подписок.
     *     @type \Tinkoff\Invest\V1\PingRequest $ping
     *          Запрос проверки активности соединения.
     *     @type \Tinkoff\Invest\V1\PingDelaySettings $ping_settings
     *          Запрос настройки пинга.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Запрос подписки на свечи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeCandlesRequest subscribe_candles_request = 1;</code>
     * @return \Tinkoff\Invest\V1\SubscribeCandlesRequest|null
     */
    public function getSubscribeCandlesRequest()
    {
        return $this->readOneof(1);
    }

    public function hasSubscribeCandlesRequest()
    {
        return $this->hasOneof(1);
    }

    /**
     *Запрос подписки на свечи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeCandlesRequest subscribe_candles_request = 1;</code>
     * @param \Tinkoff\Invest\V1\SubscribeCandlesRequest $var
     * @return $this
     */
    public function setSubscribeCandlesRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeCandlesRequest::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *Запрос подписки на стаканы.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeOrderBookRequest subscribe_order_book_request = 2;</code>
     * @return \Tinkoff\Invest\V1\SubscribeOrderBookRequest|null
     */
    public function getSubscribeOrderBookRequest()
    {
        return $this->readOneof(2);
    }

    public function hasSubscribeOrderBookRequest()
    {
        return $this->hasOneof(2);
    }

    /**
     *Запрос подписки на стаканы.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeOrderBookRequest subscribe_order_book_request = 2;</code>
     * @param \Tinkoff\Invest\V1\SubscribeOrderBookRequest $var
     * @return $this
     */
    public function setSubscribeOrderBookRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeOrderBookRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *Запрос подписки на ленту обезличенных сделок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeTradesRequest subscribe_trades_request = 3;</code>
     * @return \Tinkoff\Invest\V1\SubscribeTradesRequest|null
     */
    public function getSubscribeTradesRequest()
    {
        return $this->readOneof(3);
    }

    public function hasSubscribeTradesRequest()
    {
        return $this->hasOneof(3);
    }

    /**
     *Запрос подписки на ленту обезличенных сделок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeTradesRequest subscribe_trades_request = 3;</code>
     * @param \Tinkoff\Invest\V1\SubscribeTradesRequest $var
     * @return $this
     */
    public function setSubscribeTradesRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeTradesRequest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     *Запрос подписки на торговые статусы инструментов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeInfoRequest subscribe_info_request = 4;</code>
     * @return \Tinkoff\Invest\V1\SubscribeInfoRequest|null
     */
    public function getSubscribeInfoRequest()
    {
        return $this->readOneof(4);
    }

    public function hasSubscribeInfoRequest()
    {
        return $this->hasOneof(4);
    }

    /**
     *Запрос подписки на торговые статусы инструментов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeInfoRequest subscribe_info_request = 4;</code>
     * @param \Tinkoff\Invest\V1\SubscribeInfoRequest $var
     * @return $this
     */
    public function setSubscribeInfoRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeInfoRequest::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     *Запрос подписки на цены последних сделок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeLastPriceRequest subscribe_last_price_request = 5;</code>
     * @return \Tinkoff\Invest\V1\SubscribeLastPriceRequest|null
     */
    public function getSubscribeLastPriceRequest()
    {
        return $this->readOneof(5);
    }

    public function hasSubscribeLastPriceRequest()
    {
        return $this->hasOneof(5);
    }

    /**
     *Запрос подписки на цены последних сделок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeLastPriceRequest subscribe_last_price_request = 5;</code>
     * @param \Tinkoff\Invest\V1\SubscribeLastPriceRequest $var
     * @return $this
     */
    public function setSubscribeLastPriceRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeLastPriceRequest::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     *Запрос своих подписок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetMySubscriptions get_my_subscriptions = 6;</code>
     * @return \Tinkoff\Invest\V1\GetMySubscriptions|null
     */
    public function getGetMySubscriptions()
    {
        return $this->readOneof(6);
    }

    public function hasGetMySubscriptions()
    {
        return $this->hasOneof(6);
    }

    /**
     *Запрос своих подписок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetMySubscriptions get_my_subscriptions = 6;</code>
     * @param \Tinkoff\Invest\V1\GetMySubscriptions $var
     * @return $this
     */
    public function setGetMySubscriptions($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\GetMySubscriptions::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     *Запрос проверки активности соединения.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PingRequest ping = 7;</code>
     * @return \Tinkoff\Invest\V1\PingRequest|null
     */
    public function getPing()
    {
        return $this->readOneof(7);
    }

    public function hasPing()
    {
        return $this->hasOneof(7);
    }

    /**
     *Запрос проверки активности соединения.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PingRequest ping = 7;</code>
     * @param \Tinkoff\Invest\V1\PingRequest $var
     * @return $this
     */
    public function setPing($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\PingRequest::class);
        $this->writeOneof(7, $var);

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
        return $this->readOneof(15);
    }

    public function hasPingSettings()
    {
        return $this->hasOneof(15);
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
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

