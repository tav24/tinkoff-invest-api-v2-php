<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signals.proto

namespace GPBMetadata;

class Signals
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
signals.proto%tinkoff.public.invest.api.contract.v1google/api/field_behavior.protocommon.proto"@
GetStrategiesRequest
strategy_id (	H �B
_strategy_id"\\
GetStrategiesResponseC

strategies (2/.tinkoff.public.invest.api.contract.v1.Strategy"�
Strategy
strategy_id (	B�A
strategy_name (	B�A!
strategy_description (	H �
strategy_url (	H�O
strategy_type (23.tinkoff.public.invest.api.contract.v1.StrategyTypeB�A
active_signals (B�A
total_signals (B�A
time_in_position (B�AS
average_signal_yield	 (20.tinkoff.public.invest.api.contract.v1.QuotationB�AX
average_signal_yield_year
 (20.tinkoff.public.invest.api.contract.v1.QuotationB�AD
yield (20.tinkoff.public.invest.api.contract.v1.QuotationB�AI

yield_year (20.tinkoff.public.invest.api.contract.v1.QuotationB�AB
_strategy_descriptionB
_strategy_url"�
GetSignalsRequest
	signal_id (	H �
strategy_id (	H�O
strategy_type (23.tinkoff.public.invest.api.contract.v1.StrategyTypeH�
instrument_uid (	H�-
from (2.google.protobuf.TimestampH�+
to (2.google.protobuf.TimestampH�N
	direction (26.tinkoff.public.invest.api.contract.v1.SignalDirectionH�G
active (22.tinkoff.public.invest.api.contract.v1.SignalStateH�@
paging	 (2+.tinkoff.public.invest.api.contract.v1.PageH�B

_signal_idB
_strategy_idB
_strategy_typeB
_instrument_uidB
_fromB
_toB

_directionB	
_activeB	
_paging"�
GetSignalsResponse>
signals (2-.tinkoff.public.invest.api.contract.v1.SignalC
paging (23.tinkoff.public.invest.api.contract.v1.PageResponse"�
Signal
	signal_id (	B�A
strategy_id (	B�A
strategy_name (	B�A
instrument_uid (	B�A2
	create_dt (2.google.protobuf.TimestampB�AN
	direction (26.tinkoff.public.invest.api.contract.v1.SignalDirectionB�AL
initial_price (20.tinkoff.public.invest.api.contract.v1.QuotationB�A
info (	H �
name	 (	B�AK
target_price
 (20.tinkoff.public.invest.api.contract.v1.QuotationB�A/
end_dt (2.google.protobuf.TimestampB�A
probability (H�G
stoploss (20.tinkoff.public.invest.api.contract.v1.QuotationH�J
close_price (20.tinkoff.public.invest.api.contract.v1.QuotationH�1
close_dt (2.google.protobuf.TimestampH�B
_infoB
_probabilityB
	_stoplossB
_close_priceB
	_close_dt*i
StrategyType
STRATEGY_TYPE_UNSPECIFIED 
STRATEGY_TYPE_TECHNICAL
STRATEGY_TYPE_FUNDAMENTAL*h
SignalDirection 
SIGNAL_DIRECTION_UNSPECIFIED 
SIGNAL_DIRECTION_BUY
SIGNAL_DIRECTION_SELL*s
SignalState
SIGNAL_STATE_UNSPECIFIED 
SIGNAL_STATE_ACTIVE
SIGNAL_STATE_CLOSED
SIGNAL_STATE_ALL2�
SignalService�
GetStrategies;.tinkoff.public.invest.api.contract.v1.GetStrategiesRequest<.tinkoff.public.invest.api.contract.v1.GetStrategiesResponse�

GetSignals8.tinkoff.public.invest.api.contract.v1.GetSignalsRequest9.tinkoff.public.invest.api.contract.v1.GetSignalsResponseBa
ru.tinkoff.piapi.contract.v1PZ./;investapi�TIAPI�Tinkoff.InvestApi.V1�Tinkoff\\Invest\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

