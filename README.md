Veritrans Magento plugin
=========================

Let your Magento store integrated with Veritrans payment gateway.

### Description

Veritrans payment gateway is an online payment gateway that is highly concerned with customer experience (UX). They strive to make payments simple for both the merchant and customers. With this plugin you can make your Magento store using Veritrans payment.

Payment Method Feature:

- Credit Card

### Installation

#### Minimum Requirements

* This plugin is tested with Magento version 1.9
* PHP version 5.4 or greater

#### Manual Instalation

1. Extract the VTDirectMagento-master.zip 

2. Locate the root Magento directory of your shop via FTP connection

3. Copy and Merge the 'app', 'lib' and 'skin' folders into magento root folder

4. In your Magento admin area, enable the Veritrans plug-in and insert your merchant details (Server key and client key), environment you use.

5. Please insert the conversion rate from your currency to IDR, if you use non-IDR currency.

6. Set the bank parameter to the acquiring bank you use. Set to BNI if you're on sandbox mode.
                
6. Login into your Veritrans account and change the Payment Notification URL in Settings to `http://[your shop's homepage]/vtdirect/payment/notification`.

7. Login into your Veritrans account and change the Payment Finish URL in Settings to `http://[your shop's homepage]/vtdirect/payment/response`.

#### Get help

* [Veritrans sandbox login](https://my.sandbox.veritrans.co.id/)
* [Veritrans sandbox registration](https://my.sandbox.veritrans.co.id/register)
* [Veritrans documentation](http://docs.veritrans.co.id)
* Technical support [support@veritrans.co.id](mailto:support@veritrans.co.id)