<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Пакет свечей в рамках стрима.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Candle</code>
 */
class Candle extends \Google\Protobuf\Internal\Message
{
    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Интервал свечи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionInterval interval = 2;</code>
     */
    protected $interval = 0;
    /**
     *Цена открытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation open = 3;</code>
     */
    protected $open = null;
    /**
     *Максимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation high = 4;</code>
     */
    protected $high = null;
    /**
     *Минимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation low = 5;</code>
     */
    protected $low = null;
    /**
     *Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close = 6;</code>
     */
    protected $close = null;
    /**
     *Объем сделок в лотах.
     *
     * Generated from protobuf field <code>int64 volume = 7;</code>
     */
    protected $volume = 0;
    /**
     *Время начала интервала свечи по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 8;</code>
     */
    protected $time = null;
    /**
     *Время последней сделки, вошедшей в свечу по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_trade_ts = 9;</code>
     */
    protected $last_trade_ts = null;
    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 10;</code>
     */
    protected $instrument_uid = '';
    /**
     *Источник свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleSource candle_source_type = 19;</code>
     */
    protected $candle_source_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          FIGI-идентификатор инструмента.
     *     @type int $interval
     *          Интервал свечи.
     *     @type \Tinkoff\Invest\V1\Quotation $open
     *          Цена открытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $high
     *          Максимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $low
     *          Минимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $close
     *          Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type int|string $volume
     *          Объем сделок в лотах.
     *     @type \Google\Protobuf\Timestamp $time
     *          Время начала интервала свечи по UTC.
     *     @type \Google\Protobuf\Timestamp $last_trade_ts
     *          Время последней сделки, вошедшей в свечу по UTC.
     *     @type string $instrument_uid
     *          UID инструмента.
     *     @type int $candle_source_type
     *          Источник свечей.
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
     *Интервал свечи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionInterval interval = 2;</code>
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     *Интервал свечи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionInterval interval = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SubscriptionInterval::class);
        $this->interval = $var;

        return $this;
    }

    /**
     *Цена открытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation open = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getOpen()
    {
        return isset($this->open) ? $this->open : null;
    }

    public function hasOpen()
    {
        return isset($this->open);
    }

    public function clearOpen()
    {
        unset($this->open);
    }

    /**
     *Цена открытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation open = 3;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setOpen($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->open = $var;

        return $this;
    }

    /**
     *Максимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation high = 4;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getHigh()
    {
        return isset($this->high) ? $this->high : null;
    }

    public function hasHigh()
    {
        return isset($this->high);
    }

    public function clearHigh()
    {
        unset($this->high);
    }

    /**
     *Максимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation high = 4;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setHigh($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->high = $var;

        return $this;
    }

    /**
     *Минимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation low = 5;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getLow()
    {
        return isset($this->low) ? $this->low : null;
    }

    public function hasLow()
    {
        return isset($this->low);
    }

    public function clearLow()
    {
        unset($this->low);
    }

    /**
     *Минимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation low = 5;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setLow($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->low = $var;

        return $this;
    }

    /**
     *Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close = 6;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getClose()
    {
        return isset($this->close) ? $this->close : null;
    }

    public function hasClose()
    {
        return isset($this->close);
    }

    public function clearClose()
    {
        unset($this->close);
    }

    /**
     *Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close = 6;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setClose($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->close = $var;

        return $this;
    }

    /**
     *Объем сделок в лотах.
     *
     * Generated from protobuf field <code>int64 volume = 7;</code>
     * @return int|string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     *Объем сделок в лотах.
     *
     * Generated from protobuf field <code>int64 volume = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkInt64($var);
        $this->volume = $var;

        return $this;
    }

    /**
     *Время начала интервала свечи по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return isset($this->time) ? $this->time : null;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     *Время начала интервала свечи по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     *Время последней сделки, вошедшей в свечу по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_trade_ts = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastTradeTs()
    {
        return isset($this->last_trade_ts) ? $this->last_trade_ts : null;
    }

    public function hasLastTradeTs()
    {
        return isset($this->last_trade_ts);
    }

    public function clearLastTradeTs()
    {
        unset($this->last_trade_ts);
    }

    /**
     *Время последней сделки, вошедшей в свечу по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_trade_ts = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastTradeTs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_trade_ts = $var;

        return $this;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 10;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_uid = $var;

        return $this;
    }

    /**
     *Источник свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleSource candle_source_type = 19;</code>
     * @return int
     */
    public function getCandleSourceType()
    {
        return $this->candle_source_type;
    }

    /**
     *Источник свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleSource candle_source_type = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setCandleSourceType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\CandleSource::class);
        $this->candle_source_type = $var;

        return $this;
    }

}

