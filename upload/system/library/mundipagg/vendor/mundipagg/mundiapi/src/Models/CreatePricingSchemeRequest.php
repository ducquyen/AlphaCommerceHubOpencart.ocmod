<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Request for creating a pricing scheme
 */
class CreatePricingSchemeRequest implements JsonSerializable
{
    /**
     * Scheme type
     * @required
     * @maps scheme_type
     * @var string $schemeType public property
     */
    public $schemeType;

    /**
     * Price brackets
     * @required
     * @maps price_brackets
     * @var \MundiAPILib\Models\CreatePriceBracketRequest[] $priceBrackets public property
     */
    public $priceBrackets;

    /**
     * Price
     * @var integer|null $price public property
     */
    public $price;

    /**
     * Minimum price
     * @maps minimum_price
     * @var integer|null $minimumPrice public property
     */
    public $minimumPrice;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $schemeType    Initialization value for $this->schemeType
     * @param array   $priceBrackets Initialization value for $this->priceBrackets
     * @param integer $price         Initialization value for $this->price
     * @param integer $minimumPrice  Initialization value for $this->minimumPrice
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->schemeType    = func_get_arg(0);
            $this->priceBrackets = func_get_arg(1);
            $this->price         = func_get_arg(2);
            $this->minimumPrice  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['scheme_type']    = $this->schemeType;
        $json['price_brackets'] = $this->priceBrackets;
        $json['price']          = $this->price;
        $json['minimum_price']  = $this->minimumPrice;

        return $json;
    }
}
