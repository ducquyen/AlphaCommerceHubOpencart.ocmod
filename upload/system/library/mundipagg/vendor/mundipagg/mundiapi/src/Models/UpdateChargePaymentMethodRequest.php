<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Request for updating the payment method of a charge
 */
class UpdateChargePaymentMethodRequest implements JsonSerializable
{
    /**
     * Indicates if the payment method from the subscription must also be updated
     * @required
     * @maps update_subscription
     * @var bool $updateSubscription public property
     */
    public $updateSubscription;

    /**
     * The new payment method
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * Credit card data
     * @required
     * @maps credit_card
     * @var \MundiAPILib\Models\CreateCreditCardPaymentRequest $creditCard public property
     */
    public $creditCard;

    /**
     * Boleto data
     * @required
     * @var \MundiAPILib\Models\CreateBoletoPaymentRequest $boleto public property
     */
    public $boleto;

    /**
     * Voucher data
     * @required
     * @var \MundiAPILib\Models\CreateVoucherPaymentRequest $voucher public property
     */
    public $voucher;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool                           $updateSubscription Initialization value for $this->updateSubscription
     * @param string                         $paymentMethod      Initialization value for $this->paymentMethod
     * @param CreateCreditCardPaymentRequest $creditCard         Initialization value for $this->creditCard
     * @param CreateBoletoPaymentRequest     $boleto             Initialization value for $this->boleto
     * @param CreateVoucherPaymentRequest    $voucher            Initialization value for $this->voucher
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->updateSubscription = func_get_arg(0);
            $this->paymentMethod      = func_get_arg(1);
            $this->creditCard         = func_get_arg(2);
            $this->boleto             = func_get_arg(3);
            $this->voucher            = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['update_subscription'] = $this->updateSubscription;
        $json['payment_method']      = $this->paymentMethod;
        $json['credit_card']         = $this->creditCard;
        $json['boleto']              = $this->boleto;
        $json['voucher']             = $this->voucher;

        return $json;
    }
}
