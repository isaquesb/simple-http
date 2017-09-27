# Http

Simple PHP Http Builder
 
### Requirements

- PHP >= 5.4

### Install

```
composer install
```

### Usage

```
$request = new Request(self::$adapter);
$response = $request->post('http://google.com', ['q' => 'Test POST']);
echo $response->getHttpStatus();
echo $response->getRawBody();
```
