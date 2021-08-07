# Swagger\Client\PoReceiptsApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPoReceiptDetailsByVendororder**](PoReceiptsApi.md#getporeceiptdetailsbyvendororder) | **GET** /po-receipts/{receipt_order_id}/{receipt_vendor_id} | Get PO receipt details by vendor/order
[**listOfPoReceiptsByOrder**](PoReceiptsApi.md#listofporeceiptsbyorder) | **GET** /po-receipts | List of PO receipts by order

# **getPoReceiptDetailsByVendororder**
> getPoReceiptDetailsByVendororder($receipt_order_id, $receipt_vendor_id)

Get PO receipt details by vendor/order

Get PO receipt details by vendor/order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PoReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_order_id = "receipt_order_id_example"; // string | 
$receipt_vendor_id = "receipt_vendor_id_example"; // string | 

try {
    $apiInstance->getPoReceiptDetailsByVendororder($receipt_order_id, $receipt_vendor_id);
} catch (Exception $e) {
    echo 'Exception when calling PoReceiptsApi->getPoReceiptDetailsByVendororder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_order_id** | **string**|  |
 **receipt_vendor_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOfPoReceiptsByOrder**
> listOfPoReceiptsByOrder()

List of PO receipts by order

List of PO receipts by order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PoReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listOfPoReceiptsByOrder();
} catch (Exception $e) {
    echo 'Exception when calling PoReceiptsApi->listOfPoReceiptsByOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

