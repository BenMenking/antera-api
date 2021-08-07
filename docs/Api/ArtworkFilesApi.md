# Swagger\Client\ArtworkFilesApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listArtworkFiles**](ArtworkFilesApi.md#listartworkfiles) | **GET** /artwork/{artwork_id}/files | List artwork files
[**updateArtworkFileTags**](ArtworkFilesApi.md#updateartworkfiletags) | **POST** /artwork/{artwork_id}/files/update-file-tags | Update artwork file tags
[**uploadArtworkFiles**](ArtworkFilesApi.md#uploadartworkfiles) | **POST** /artwork/{artwork_id}/files | Upload artwork files

# **listArtworkFiles**
> listArtworkFiles($content_type, $artwork_id)

List artwork files

Retrieve files related to the artwork resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArtworkFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$artwork_id = "artwork_id_example"; // string | 

try {
    $apiInstance->listArtworkFiles($content_type, $artwork_id);
} catch (Exception $e) {
    echo 'Exception when calling ArtworkFilesApi->listArtworkFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **artwork_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateArtworkFileTags**
> updateArtworkFileTags($body, $artwork_id)

Update artwork file tags

Update artwork file tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArtworkFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateartworkfiletagsRequest(); // \Swagger\Client\Model\UpdateartworkfiletagsRequest | 
$artwork_id = "artwork_id_example"; // string | 

try {
    $apiInstance->updateArtworkFileTags($body, $artwork_id);
} catch (Exception $e) {
    echo 'Exception when calling ArtworkFilesApi->updateArtworkFileTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateartworkfiletagsRequest**](../Model/UpdateartworkfiletagsRequest.md)|  |
 **artwork_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadArtworkFiles**
> uploadArtworkFiles($content_type, $artwork_id, $file_upload)

Upload artwork files

Upload files to the artwork resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArtworkFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$artwork_id = "artwork_id_example"; // string | 
$file_upload = "file_upload_example"; // string | 

try {
    $apiInstance->uploadArtworkFiles($content_type, $artwork_id, $file_upload);
} catch (Exception $e) {
    echo 'Exception when calling ArtworkFilesApi->uploadArtworkFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **artwork_id** | **string**|  |
 **file_upload** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

