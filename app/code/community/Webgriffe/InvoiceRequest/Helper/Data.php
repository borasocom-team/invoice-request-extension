<?php
/**
 * Created by PhpStorm.
 * User: manuele
 * Date: 29/10/15
 * Time: 11:03
 */
class Webgriffe_InvoiceRequest_Helper_Data extends Mage_Core_Helper_Abstract
{
    CONST ENABLE_INVOICE_REQUEST = 'customer/invoicerequest/enable_invoice_request';

    public function getEnableInvoiceRequest()
    {
        return Mage::getStoreConfig(self::ENABLE_INVOICE_REQUEST);
    }
}
