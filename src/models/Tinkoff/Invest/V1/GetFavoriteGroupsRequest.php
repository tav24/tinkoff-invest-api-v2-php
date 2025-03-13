<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetFavoriteGroupsRequest</code>
 */
class GetFavoriteGroupsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив идентификаторов инструментов. Принимает значение `figi` или `instrument_uid`. Если в группе будет хотя бы один из инструментов массива, то в ответе у группы вернется признак `containsInstrument = true`.
     *
     * Generated from protobuf field <code>repeated string instrument_id = 1;</code>
     */
    private $instrument_id;
    /**
     *Массив идентификаторов групп, которые необходимо исключить из ответа.
     *
     * Generated from protobuf field <code>repeated string excluded_group_id = 2;</code>
     */
    private $excluded_group_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $instrument_id
     *          Массив идентификаторов инструментов. Принимает значение `figi` или `instrument_uid`. Если в группе будет хотя бы один из инструментов массива, то в ответе у группы вернется признак `containsInstrument = true`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $excluded_group_id
     *          Массив идентификаторов групп, которые необходимо исключить из ответа.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив идентификаторов инструментов. Принимает значение `figi` или `instrument_uid`. Если в группе будет хотя бы один из инструментов массива, то в ответе у группы вернется признак `containsInstrument = true`.
     *
     * Generated from protobuf field <code>repeated string instrument_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Массив идентификаторов инструментов. Принимает значение `figi` или `instrument_uid`. Если в группе будет хотя бы один из инструментов массива, то в ответе у группы вернется признак `containsInstrument = true`.
     *
     * Generated from protobuf field <code>repeated string instrument_id = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstrumentId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instrument_id = $arr;

        return $this;
    }

    /**
     *Массив идентификаторов групп, которые необходимо исключить из ответа.
     *
     * Generated from protobuf field <code>repeated string excluded_group_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludedGroupId()
    {
        return $this->excluded_group_id;
    }

    /**
     *Массив идентификаторов групп, которые необходимо исключить из ответа.
     *
     * Generated from protobuf field <code>repeated string excluded_group_id = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludedGroupId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->excluded_group_id = $arr;

        return $this;
    }

}

