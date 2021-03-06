<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protobuf/protos/transaction.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protos.IssueAsset</code>
 */
class IssueAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes sender = 1;</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string symbol = 3;</code>
     */
    protected $symbol = '';
    /**
     * Generated from protobuf field <code>int64 total_supply = 4;</code>
     */
    protected $total_supply = 0;
    /**
     * Generated from protobuf field <code>uint32 precision = 5;</code>
     */
    protected $precision = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $name
     *     @type string $symbol
     *     @type int|string $total_supply
     *     @type int $precision
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protobuf\Protos\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes sender = 1;</code>
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Generated from protobuf field <code>bytes sender = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSender($var)
    {
        GPBUtil::checkString($var, False);
        $this->sender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string symbol = 3;</code>
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Generated from protobuf field <code>string symbol = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSymbol($var)
    {
        GPBUtil::checkString($var, True);
        $this->symbol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_supply = 4;</code>
     * @return int|string
     */
    public function getTotalSupply()
    {
        return $this->total_supply;
    }

    /**
     * Generated from protobuf field <code>int64 total_supply = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSupply($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_supply = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 precision = 5;</code>
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Generated from protobuf field <code>uint32 precision = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkUint32($var);
        $this->precision = $var;

        return $this;
    }

}

