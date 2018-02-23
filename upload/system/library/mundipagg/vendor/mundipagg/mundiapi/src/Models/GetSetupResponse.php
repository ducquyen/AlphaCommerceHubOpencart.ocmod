<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Response object for getting the setup from a subscription
 */
class GetSetupResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $id          Initialization value for $this->id
     * @param string  $description Initialization value for $this->description
     * @param integer $amount      Initialization value for $this->amount
     * @param string  $status      Initialization value for $this->status
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->description = func_get_arg(1);
            $this->amount      = func_get_arg(2);
            $this->status      = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['description'] = $this->description;
        $json['amount']      = $this->amount;
        $json['status']      = $this->status;

        return $json;
    }
}
