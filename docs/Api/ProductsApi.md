# Swagger\Client\ProductsApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct**](ProductsApi.md#createproduct) | **POST** /products | Create product
[**deleteProduct**](ProductsApi.md#deleteproduct) | **DELETE** /products/{product_id} | Delete product
[**getProductDetails**](ProductsApi.md#getproductdetails) | **GET** /products/{product_id} | Get product details
[**listProductCategories**](ProductsApi.md#listproductcategories) | **GET** /products/categories | List product categories
[**listProductSources**](ProductsApi.md#listproductsources) | **GET** /products/sources | List product sources
[**listProducts**](ProductsApi.md#listproducts) | **GET** /products | List products
[**updateProduct**](ProductsApi.md#updateproduct) | **PUT** /products/{product_id} | Update product

# **createProduct**
> \Swagger\Client\Model\CreateProduct createProduct($body)

Create product

The request is useful for creating a new product in Antera system. The resource created is returned as result or the message for a failed request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateproductRequest(); // \Swagger\Client\Model\CreateproductRequest | 

try {
    $result = $apiInstance->createProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateproductRequest**](../Model/CreateproductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CreateProduct**](../Model/CreateProduct.md)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json; charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProduct**
> \Swagger\Client\Model\Deleteproduct deleteProduct($content_type, $product_id)

Delete product

Removes the resource identified with the product id passed throught the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$product_id = "product_id_example"; // string | 

try {
    $result = $apiInstance->deleteProduct($content_type, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **product_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Deleteproduct**](../Model/Deleteproduct.md)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductDetails**
> \Swagger\Client\Model\Getproductdetails getProductDetails($content_type, $product_id)

Get product details

This request returns the product information for the resource identifier provided. The returned result includes details including media content (Images), part information and pricing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$product_id = "product_id_example"; // string | 

try {
    $result = $apiInstance->getProductDetails($content_type, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **product_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Getproductdetails**](../Model/Getproductdetails.md)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProductCategories**
> listProductCategories()

List product categories

List available product categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listProductCategories();
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProductCategories: ', $e->getMessage(), PHP_EOL;
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

# **listProductSources**
> listProductSources()

List product sources

List product sources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listProductSources();
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProductSources: ', $e->getMessage(), PHP_EOL;
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

# **listProducts**
> \Swagger\Client\Model\Listproducts listProducts($limit, $offset, $orient, $order)

List products

Request is useful for retrieving list of products with basic information. In order to get more information use the resource identifier for the product and send request to Get Product Details API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limit pagination response
$offset = 56; // int | Page offset
$orient = "orient_example"; // string | Sort orientation
$order = "order_example"; // string | Order by

try {
    $result = $apiInstance->listProducts($limit, $offset, $orient, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limit pagination response |
 **offset** | **int**| Page offset |
 **orient** | **string**| Sort orientation |
 **order** | **string**| Order by |

### Return type

[**\Swagger\Client\Model\Listproducts**](../Model/Listproducts.md)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> \Swagger\Client\Model\Updateproduct updateProduct($body, $product_id)

Update product

Update an existing product in the system. In order to remove a specific color or size from product it is necessary to remove all parts which includes the color or the size. Price information is related to each part and hence it is attached respective part itself. Price information contains array of price objects each of which represents a price break not necessarily in any specific order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateproductRequest(); // \Swagger\Client\Model\UpdateproductRequest | 
$product_id = "product_id_example"; // string | 

try {
    $result = $apiInstance->updateProduct($body, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateproductRequest**](../Model/UpdateproductRequest.md)|  |
 **product_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Updateproduct**](../Model/Updateproduct.md)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

