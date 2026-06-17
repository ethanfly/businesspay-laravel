# Tencent 微企付 (BusinessPay) Laravel SDK

腾讯微企付（MSE / 商企付）官方 PHP SDK 的 Laravel 封装包。

- **开箱即用**：内置官方 `tenpay/entpay` 3.25.0 SDK 源码（本地 path repository，无需远程引用），Laravel auto-discovery 自动注册。
- **全量覆盖**：对官方 SDK 全部 25 个 API 类实现 1:1 资源代理（支付/退款/提现/充值/分账/账单/银行/员工/账户开户/文件上传/跳转/产品申请/预付卡/预存款/分账纠错/回退等）。
- **Laravel 原生**：配置、服务容器、Facade、多账户、通知处理、异常包装。
- **回归保证**：以 SDK 源码为权威基线，`ApiCoverageTest` 断言 1:1 覆盖（295 assertions），CI 全绿并自动发布版本。

## 环境要求

- PHP >= 7.4（CI 测试矩阵 8.0 / 8.1 / 8.2 / 8.3）
- Laravel / Lumen >= 7.x
- PHP 扩展：curl, json, mbstring, openssl

## 安装

```bash
composer require ethanfly/businesspay-laravel
```

发布配置：

```bash
php artisan vendor:publish --tag=businesspay-config
```

## 配置

`config/businesspay.php` 支持多账户。密钥可为 PEM 字符串、绝对路径或 `file://` 前缀路径。

```env
BUSINESSPAY_DEFAULT_ACCOUNT=default
BUSINESSPAY_ENV=sandbox              # sandbox | production | custom
BUSINESSPAY_BASE_URL=                # 仅 custom 时生效
BUSINESSPAY_PLATFORM_ID=your-platform-id
BUSINESSPAY_PLATFORM_PRIVATE_KEY=/path/to/private.pem
BUSINESSPAY_PLATFORM_PRIVATE_CERT_SERIAL_NO=your-serial
BUSINESSPAY_TBEP_SERIAL_NUMBER=tbep-serial
BUSINESSPAY_TBEP_PUBLIC_KEY=/path/to/tbep-public.pem
BUSINESSPAY_TIMEOUT=20
```

```php
// config/businesspay.php
'accounts' => [
    'default'    => [ 'env' => 'sandbox', ... ],
    'production' => [ 'env' => 'production', ... ],
    // SAAS / 企业证书认证（可选）
    'saas' => [ ..., 'ent_id' => ..., 'enterprise_serial_number' => ..., 'ent_private_key' => ... ],
],
```

## 使用

### Facade

```php
use Ethanfly\BusinessPay\Facades\BusinessPay;

// 发起支付（数组自动规范化为 PaymentParam）
$payment = BusinessPay::payment()->createPay([
    'out_payment_id' => 'ORDER_20240101_001',
    'amount'         => 100,
    'currency'       => 'CNY',
    'payee'          => [...],
    // ...
]);

// 查询
BusinessPay::payment()->retrieve('PAYMENT_ID');
BusinessPay::payment()->retrieveByOutPaymentId('ORDER_20240101_001');

// 退款 / 提现 / 分账
BusinessPay::refund()->create([...]);
BusinessPay::withdraw()->create([...]);
BusinessPay::profitAllocation()->create([...]);

// 切换账户
BusinessPay::account('production')->payment()->retrieve('PAYMENT_ID');
```

### 依赖注入

```php
use Ethanfly\BusinessPay\BusinessPayManager;

class OrderController extends Controller
{
    public function store(BusinessPayManager $businessPay)
    {
        return $businessPay->payment()->createPay([...]);
    }
}
```

## API 资源矩阵（25 项）

| Facade 方法 | 资源 | 关键能力 |
|---|---|---|
| `payment()` | 支付 | App/H5/MP/PC/QR/WeCom/WeCom注册下单、分账下单、查询、查费、关单、按银行附言查单号 |
| `refund()` | 退款 | 退款、查询、异常转可用 |
| `withdraw()` | 提现 | 提现、查询、余额查询 |
| `deposit()` | 充值 | 查询、列表 |
| `profitAllocation()` | 分账 | 发起、完成、查询、接收方开户/简易开户、账户查询、余额、支持分账列表 |
| `profitAllocationCorrect()` | 分账纠错 | 发起、查询 |
| `profitAllocationReturn()` | 分账回退 | 发起、查询 |
| `batchProfitAllocationCorrect()` | 批量分账纠错 | 发起、查询 |
| `depositAllocation()` | 充值分账 | 发起、完成、查询、余额、按平台单号查询 |
| `bill()` | 账单下载 | 资金/分账/接收方/交易/预付卡交易账单 |
| `bank()` | 银行 | 状态、支持银行 |
| `employee()` | 员工 | 创建、删除、申请列表 |
| `mseFundsAccountApplication()` | 资金账户开户 | 创建、链接、查询 |
| `mseFund()` | 资金余额 | 微企付资金账户余额 |
| `fileUpload()` | 文件上传 | 通用上传、充值账单上传 |
| `redirect()` | 跳转 | 跳转支付、充值跳转 |
| `productApplication()` | 产品申请 | 创建、链接、查询 |
| `prepaidCardRecharge()` | 预付卡充值 | 小程序充值、关闭、查询 |
| `prepaidCardRechargeTransfer()` | 预付卡充值转账 | 创建、查询 |
| `prepaidCardWithdrawTransfer()` | 预付卡提现转账 | 创建、查询 |
| `prepaidCardInfo()` | 预付卡信息 | 注册、查询 |
| `prepaidSupplement()` | 预付卡补充 | 创建、查询 |
| `prepaidTransfer()` | 预付卡转账 | 创建、查询 |
| `prepaidTradeAllocation()` | 预付卡交易分账 | 创建、查询 |
| `predepositAcct()` | 预存款账户 | 小程序充值、查询 |

每个方法接受**数组**（自动规范化为对应 SDK Param 模型）或**SDK 模型实例**。返回 SDK 响应模型。

## Webhook 通知

```php
use Ethanfly\BusinessPay\Notify\NotifyHandler;
use Entpay\Mse\Client\Model\PaymentNotifyModel;

$notify = app(NotifyHandler::class)
    ->handleRequest($request, PaymentNotifyModel::class);

$notify->getEventType();          // PAYMENT.SUCCEEDED
$notify->getEventId();            // 幂等键
$payment = $notify->getEventContent();  // Payment 模型
```

验签用账户的 TBEP 公钥（SHA256withRSA）。多账户场景用 `new NotifyHandler($account)` 或 `->withPublicKey($pem)`。

> **商业化必须（应用层负责）**：用 `event_id` 幂等去重；校验 `timestamp` 新鲜度防重放；按微企付规范返回应答。

## 异常

SDK `ApiException` 被包装为 `BusinessPayException`：

```php
use Ethanfly\BusinessPay\Exceptions\BusinessPayException;

try {
    BusinessPay::payment()->createPay([...]);
} catch (BusinessPayException $e) {
    $e->getStatusCode();   // HTTP 状态码
    $e->getTraceId();      // 链路 ID
    $e->getUri();          // 请求 URI
    $e->getApiException(); // 原始 SDK 异常
}
```

## 测试

```bash
composer test      # phpunit
composer format    # Laravel Pint
```

回归基线：`tests/ApiCoverageTest` 以包内置 SDK 源码为权威，断言全部 25 个 API 类 1:1 被代理覆盖、参数类可从数组构造、入口完整。**20 tests, 325 assertions 全绿**。

## 自动发布

`.github/workflows/release.yml`：推送 `master`/`main` 即触发——
1. PHP 8.0–8.3 矩阵跑 PHPUnit
2. PHP 8.3 跑 Pint（非阻断，style drift 不影响发布）
3. 按 commit 前缀 bump 版本（`feat`→minor / `BREAKING|feat!`→major / 其他→patch），更新 `composer.json` version，打 `vX.Y.Z` tag，创建 GitHub Release

## 设计说明

- SDK 依赖**静态全局** `EntpayConfig` 决定 baseUrl 与兜底凭据；多账户场景下 `BusinessPayAccount::callSdk` 在每次调用前 `configure()` 重置全局态，保证当前账户生效。同步请求/队列任务安全；不支持并发异步多账户同请求。
- `composer.json` 已设 `config.policy.advisories.block: false`：SDK 锁定 guzzle 6 / psr7 1.9（有安全公告），新版 composer 默认会阻断安装，故关闭。
- `version` 字段由 release workflow 自动维护。

## License

MIT