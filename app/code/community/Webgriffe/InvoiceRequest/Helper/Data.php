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
    CONST INVOICE_MANDATORY = 'customer/invoicerequest/invoice_mandatory';
    CONST INVOICE_MAXIMUM_THRESOLD = 'customer/invoicerequest/invoice_maximum_threshold';


    public function getEnableInvoiceRequest()
    {
        return Mage::getStoreConfig(self::ENABLE_INVOICE_REQUEST);
    }

    public function getInvoiceMandatory()
    {
        return Mage::getStoreConfig(self::INVOICE_MANDATORY);
    }

    public function getInvoiceMaximumThresold()
    {
        return Mage::getStoreConfig(self::INVOICE_MAXIMUM_THRESOLD);
    }
}
