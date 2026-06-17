# Tencent 微企付 (BusinessPay) Laravel SDK

A Laravel wrapper for the official Tencent 微企付（BusinessPay / 商企付）PHP SDK.

## Requirements

- PHP >= 7.4
- Laravel / Lumen >= 7.x

## Installation

```bash
composer require ethanfly/businesspay-laravel
```

Publish the configuration file:

```bash
php artisan vendor:publish --tag=businesspay-config
```

## Configuration

Edit `config/businesspay.php` or use environment variables:

```env
BUSINESSPAY_ENV=sandbox
BUSINESSPAY_PLATFORM_ID=your-platform-id
BUSINESSPAY_PLATFORM_PRIVATE_KEY=/path/to/private.pem
BUSINESSPAY_PLATFORM_PRIVATE_CERT_SERIAL_NO=your-serial
BUSINESSPAY_TBEP_SERIAL_NUMBER=tbep-serial
BUSINESSPAY_TBEP_PUBLIC_KEY=/path/to/tbep-public.pem
```

Keys may be provided as PEM strings or file paths (absolute or `file://`).

### Multi-account

```php
'accounts' => [
    'default' => [
        'env' => 'sandbox',
        // ...
    ],
    'production' => [
        'env' => 'production',
        // ...
    ],
],
```

## Usage

### Facade

```php
use Ethanfly\BusinessPay\Facades\BusinessPay;

// Default account
$response = BusinessPay::payment()->createPay([
    'out_payment_id' => 'ORDER_20240101_001',
    'amount'         => 100,
    'currency'       => 'CNY',
    // ...
]);

// Switch account
$response = BusinessPay::account('production')->payment()->retrieve('PAYMENT_ID');
```

### Dependency injection

```php
use Ethanfly\BusinessPay\BusinessPayManager;

class OrderController extends Controller
{
    public function store(BusinessPayManager $businessPay)
    {
        $payment = $businessPay->payment()->createPay([...]);
    }
}
```

### Supported APIs

- `payment()` — payments, H5/MP/PC/QR/WeCom/App, close, query, fee
- `refund()` — refunds
- `withdraw()` — withdrawals
- `deposit()` — deposits
- `bill()` — bill downloads
- `employee()` — employee management
- `bank()` — bank status / supported banks
- `profitAllocation()` — profit allocation

Each method accepts either an SDK model instance or a plain array that will be wrapped automatically.

### Notifications

```php
use Ethanfly\BusinessPay\Notify\NotifyHandler;
use Entpay\Mse\Client\Model\PaymentNotifyModel;

$handler = app(NotifyHandler::class);

$notify = $handler->handleRequest($request, PaymentNotifyModel::class);

// or manually
$notify = $handler->handle(
    $request->getContent(),
    $request->header('Authorization'),
    PaymentNotifyModel::class
);
```

### Exceptions

SDK `ApiException` is wrapped as `BusinessPayException`:

```php
use Ethanfly\BusinessPay\Exceptions\BusinessPayException;

try {
    BusinessPay::payment()->createPay([...]);
} catch (BusinessPayException $e) {
    $e->getStatusCode();
    $e->getTraceId();
    $e->getUri();
}
```

## Testing

```bash
composer test
composer format
```

## License

MIT
