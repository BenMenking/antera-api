# Swagger\Client\PurchaseOrdersApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPurchaseOrderDetails**](PurchaseOrdersApi.md#getpurchaseorderdetails) | **GET** /purchase-orders/{po_order_id}/{po_vendor_id} | Get purchase order details
[**listPurchaseOrders**](PurchaseOrdersApi.md#listpurchaseorders) | **GET** /purchase-orders | List purchase orders

# **getPurchaseOrderDetails**
> getPurchaseOrderDetails($po_order_id, $po_vendor_id)

Get purchase order details

Get purchase order details related to sales order and vendor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$po_order_id = "po_order_id_example"; // string | 
$po_vendor_id = "po_vendor_id_example"; // string | 

try {
    $apiInstance->getPurchaseOrderDetails($po_order_id, $po_vendor_id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPurchaseOrderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **po_order_id** | **string**|  |
 **po_vendor_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPurchaseOrders**
> listPurchaseOrders()

List purchase orders

List purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listPurchaseOrders();
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->listPurchaseOrders: ', $e->getMessage(), PHP_EOL;
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

