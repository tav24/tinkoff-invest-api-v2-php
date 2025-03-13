<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о свече.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.HistoricCandle</code>
 */
class HistoricCandle extends \Google\Protobuf\Internal\Message
{
    /**
     *Цена открытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation open = 1;</code>
     */
    protected $open = null;
    /**
     *Максимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation high = 2;</code>
     */
    protected $high = null;
    /**
     *Минимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation low = 3;</code>
     */
    protected $low = null;
    /**
     *Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close = 4;</code>
     */
    protected $close = null;
    /**
     *Объем торгов в лотах.
     *
     * Generated from protobuf field <code>int64 volume = 5;</code>
     */
    protected $volume = 0;
    /**
     *Время свечи в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 6;</code>
     */
    protected $time = null;
    /**
     *Признак завершенности свечи. **false** — свеча за текущие интервал еще сформирована не полностью.
     *
     * Generated from protobuf field <code>bool is_complete = 7;</code>
     */
    protected $is_complete = false;
    /**
     *Тип источника свечи
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleSource candle_source = 9;</code>
     */
    protected $candle_source = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Quotation $open
     *          Цена открытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $high
     *          Максимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $low
     *          Минимальная цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type \Tinkoff\Invest\V1\Quotation $close
     *          Цена закрытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *     @type int|string $volume
     *          Объем торгов в лотах.
     *     @type \Google\Protobuf\Timestamp $time
     *          Время свечи в часовом поясе UTC.
     *     @type bool $is_complete
     *          Признак завершенности свечи. **false** — свеча за текущие интервал еще сформирована не полностью.
     *     @type int $candle_source
     *          Тип источника свечи
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Цена открытия за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента. [Подробнее про перевод цен в валюту](./faq_marketdata/#_15).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation open = 1;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation open = 1;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation high = 2;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation high = 2;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation low = 3;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation low = 3;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close = 4;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation close = 4;</code>
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
     *Объем торгов в лотах.
     *
     * Generated from protobuf field <code>int64 volume = 5;</code>
     * @return int|string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     *Объем торгов в лотах.
     *
     * Generated from protobuf field <code>int64 volume = 5;</code>
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
     *Время свечи в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 6;</code>
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
     *Время свечи в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 6;</code>
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
     *Признак завершенности свечи. **false** — свеча за текущие интервал еще сформирована не полностью.
     *
     * Generated from protobuf field <code>bool is_complete = 7;</code>
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->is_complete;
    }

    /**
     *Признак завершенности свечи. **false** — свеча за текущие интервал еще сформирована не полностью.
     *
     * Generated from protobuf field <code>bool is_complete = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsComplete($var)
    {
        GPBUtil::checkBool($var);
        $this->is_complete = $var;

        return $this;
    }

    /**
     *Тип источника свечи
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleSource candle_source = 9;</code>
     * @return int
     */
    public function getCandleSource()
    {
        return $this->candle_source;
    }

    /**
     *Тип источника свечи
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleSource candle_source = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCandleSource($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\CandleSource::class);
        $this->candle_source = $var;

        return $this;
    }

}

