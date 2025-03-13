<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о стакане.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetOrderBookResponse</code>
 */
class GetOrderBookResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     */
    protected $depth = 0;
    /**
     *Множество пар значений на покупку.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order bids = 3;</code>
     */
    private $bids;
    /**
     *Множество пар значений на продажу.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order asks = 4;</code>
     */
    private $asks;
    /**
     *Цена последней сделки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation last_price = 5;</code>
     */
    protected $last_price = null;
    /**
     *Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close_price = 6;</code>
     */
    protected $close_price = null;
    /**
     *Верхний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_up = 7;</code>
     */
    protected $limit_up = null;
    /**
     *Нижний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_down = 8;</code>
     */
    protected $limit_down = null;
    /**
     *Время получения цены последней сделки.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_price_ts = 21;</code>
     */
    protected $last_price_ts = null;
    /**
     *Время получения цены закрытия.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_price_ts = 22;</code>
     */
    protected $close_price_ts = null;
    /**
     *Время формирования стакана на бирже.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp orderbook_ts = 23;</code>
     */
    protected $orderbook_ts = null;
    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 9;</code>
     */
    protected $instrument_uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          FIGI-идентификатор инструмента.
     *     @type int $depth
     *          Глубина стакана.
     *     @type \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $bids
     *          Множество пар значений на покупку.
     *     @type \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $asks
     *          Множество пар значений на продажу.
     *     @type \Tinkoff\Invest\V1\Quotation $last_price
     *          Цена последней сделки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $close_price
     *          Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $limit_up
     *          Верхний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $limit_down
     *          Нижний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Google\Protobuf\Timestamp $last_price_ts
     *          Время получения цены последней сделки.
     *     @type \Google\Protobuf\Timestamp $close_price_ts
     *          Время получения цены закрытия.
     *     @type \Google\Protobuf\Timestamp $orderbook_ts
     *          Время формирования стакана на бирже.
     *     @type string $instrument_uid
     *          UID инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->depth = $var;

        return $this;
    }

    /**
     *Множество пар значений на покупку.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order bids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBids()
    {
        return $this->bids;
    }

    /**
     *Множество пар значений на покупку.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order bids = 3;</code>
     * @param \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Order::class);
        $this->bids = $arr;

        return $this;
    }

    /**
     *Множество пар значений на продажу.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order asks = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAsks()
    {
        return $this->asks;
    }

    /**
     *Множество пар значений на продажу.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order asks = 4;</code>
     * @param \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAsks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Order::class);
        $this->asks = $arr;

        return $this;
    }

    /**
     *Цена последней сделки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation last_price = 5;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getLastPrice()
    {
        return isset($this->last_price) ? $this->last_price : null;
    }

    public function hasLastPrice()
    {
        return isset($this->last_price);
    }

    public function clearLastPrice()
    {
        unset($this->last_price);
    }

    /**
     *Цена последней сделки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation last_price = 5;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setLastPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->last_price = $var;

        return $this;
    }

    /**
     *Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close_price = 6;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getClosePrice()
    {
        return isset($this->close_price) ? $this->close_price : null;
    }

    public function hasClosePrice()
    {
        return isset($this->close_price);
    }

    public function clearClosePrice()
    {
        unset($this->close_price);
    }

    /**
     *Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close_price = 6;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setClosePrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->close_price = $var;

        return $this;
    }

    /**
     *Верхний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_up = 7;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getLimitUp()
    {
        return isset($this->limit_up) ? $this->limit_up : null;
    }

    public function hasLimitUp()
    {
        return isset($this->limit_up);
    }

    public function clearLimitUp()
    {
        unset($this->limit_up);
    }

    /**
     *Верхний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_up = 7;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setLimitUp($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->limit_up = $var;

        return $this;
    }

    /**
     *Нижний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_down = 8;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getLimitDown()
    {
        return isset($this->limit_down) ? $this->limit_down : null;
    }

    public function hasLimitDown()
    {
        return isset($this->limit_down);
    }

    public function clearLimitDown()
    {
        unset($this->limit_down);
    }

    /**
     *Нижний лимит цены за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_down = 8;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setLimitDown($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->limit_down = $var;

        return $this;
    }

    /**
     *Время получения цены последней сделки.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_price_ts = 21;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastPriceTs()
    {
        return isset($this->last_price_ts) ? $this->last_price_ts : null;
    }

    public function hasLastPriceTs()
    {
        return isset($this->last_price_ts);
    }

    public function clearLastPriceTs()
    {
        unset($this->last_price_ts);
    }

    /**
     *Время получения цены последней сделки.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_price_ts = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastPriceTs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_price_ts = $var;

        return $this;
    }

    /**
     *Время получения цены закрытия.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_price_ts = 22;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getClosePriceTs()
    {
        return isset($this->close_price_ts) ? $this->close_price_ts : null;
    }

    public function hasClosePriceTs()
    {
        return isset($this->close_price_ts);
    }

    public function clearClosePriceTs()
    {
        unset($this->close_price_ts);
    }

    /**
     *Время получения цены закрытия.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_price_ts = 22;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setClosePriceTs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->close_price_ts = $var;

        return $this;
    }

    /**
     *Время формирования стакана на бирже.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp orderbook_ts = 23;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getOrderbookTs()
    {
        return isset($this->orderbook_ts) ? $this->orderbook_ts : null;
    }

    public function hasOrderbookTs()
    {
        return isset($this->orderbook_ts);
    }

    public function clearOrderbookTs()
    {
        unset($this->orderbook_ts);
    }

    /**
     *Время формирования стакана на бирже.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp orderbook_ts = 23;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setOrderbookTs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->orderbook_ts = $var;

        return $this;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 9;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_uid = $var;

        return $this;
    }

}

