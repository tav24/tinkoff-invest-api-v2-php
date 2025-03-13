<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: users.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о пользователе.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetInfoResponse</code>
 */
class GetInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Признак премиум клиента.
     *
     * Generated from protobuf field <code>bool prem_status = 1;</code>
     */
    protected $prem_status = false;
    /**
     *Признак квалифицированного инвестора.
     *
     * Generated from protobuf field <code>bool qual_status = 2;</code>
     */
    protected $qual_status = false;
    /**
     *Набор требующих тестирования инструментов и возможностей, с которыми может работать пользователь. [Подробнее](/invest/services/accounts/faq_users).
     *
     * Generated from protobuf field <code>repeated string qualified_for_work_with = 3;</code>
     */
    private $qualified_for_work_with;
    /**
     *Наименование тарифа пользователя.
     *
     * Generated from protobuf field <code>string tariff = 4;</code>
     */
    protected $tariff = '';
    /**
     *Идентификатор пользователя.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     */
    protected $user_id = '';
    /**
     * Категория риска.
     *
     * Generated from protobuf field <code>string risk_level_code = 12;</code>
     */
    protected $risk_level_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $prem_status
     *          Признак премиум клиента.
     *     @type bool $qual_status
     *          Признак квалифицированного инвестора.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $qualified_for_work_with
     *          Набор требующих тестирования инструментов и возможностей, с которыми может работать пользователь. [Подробнее](/invest/services/accounts/faq_users).
     *     @type string $tariff
     *          Наименование тарифа пользователя.
     *     @type string $user_id
     *          Идентификатор пользователя.
     *     @type string $risk_level_code
     *           Категория риска.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users::initOnce();
        parent::__construct($data);
    }

    /**
     *Признак премиум клиента.
     *
     * Generated from protobuf field <code>bool prem_status = 1;</code>
     * @return bool
     */
    public function getPremStatus()
    {
        return $this->prem_status;
    }

    /**
     *Признак премиум клиента.
     *
     * Generated from protobuf field <code>bool prem_status = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPremStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->prem_status = $var;

        return $this;
    }

    /**
     *Признак квалифицированного инвестора.
     *
     * Generated from protobuf field <code>bool qual_status = 2;</code>
     * @return bool
     */
    public function getQualStatus()
    {
        return $this->qual_status;
    }

    /**
     *Признак квалифицированного инвестора.
     *
     * Generated from protobuf field <code>bool qual_status = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setQualStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->qual_status = $var;

        return $this;
    }

    /**
     *Набор требующих тестирования инструментов и возможностей, с которыми может работать пользователь. [Подробнее](/invest/services/accounts/faq_users).
     *
     * Generated from protobuf field <code>repeated string qualified_for_work_with = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQualifiedForWorkWith()
    {
        return $this->qualified_for_work_with;
    }

    /**
     *Набор требующих тестирования инструментов и возможностей, с которыми может работать пользователь. [Подробнее](/invest/services/accounts/faq_users).
     *
     * Generated from protobuf field <code>repeated string qualified_for_work_with = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQualifiedForWorkWith($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->qualified_for_work_with = $arr;

        return $this;
    }

    /**
     *Наименование тарифа пользователя.
     *
     * Generated from protobuf field <code>string tariff = 4;</code>
     * @return string
     */
    public function getTariff()
    {
        return $this->tariff;
    }

    /**
     *Наименование тарифа пользователя.
     *
     * Generated from protobuf field <code>string tariff = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTariff($var)
    {
        GPBUtil::checkString($var, True);
        $this->tariff = $var;

        return $this;
    }

    /**
     *Идентификатор пользователя.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     *Идентификатор пользователя.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Категория риска.
     *
     * Generated from protobuf field <code>string risk_level_code = 12;</code>
     * @return string
     */
    public function getRiskLevelCode()
    {
        return $this->risk_level_code;
    }

    /**
     * Категория риска.
     *
     * Generated from protobuf field <code>string risk_level_code = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setRiskLevelCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->risk_level_code = $var;

        return $this;
    }

}

