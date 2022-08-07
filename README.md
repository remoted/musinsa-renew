<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## API Routes list

+--------+-----------+-----------------------------+-------------------+------------------------------------------------------------+------------------------------------------+
| Domain | Method    | URI                         | Name              | Action                                                     | Middleware                               |
+--------+-----------+-----------------------------+-------------------+------------------------------------------------------------+------------------------------------------+
|        | GET|HEAD  | /                           |                   | Closure                                                    | web                                      |
|        | GET|HEAD  | api/user                    |                   | Closure                                                    | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD  | api/v1/customers            | customers.index   | App\Http\Controllers\Api\V1\CustomerController@index       | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | POST      | api/v1/customers            | customers.store   | App\Http\Controllers\Api\V1\CustomerController@store       | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD  | api/v1/customers/{customer} | customers.show    | App\Http\Controllers\Api\V1\CustomerController@show        | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | PUT|PATCH | api/v1/customers/{customer} | customers.update  | App\Http\Controllers\Api\V1\CustomerController@update      | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | DELETE    | api/v1/customers/{customer} | customers.destroy | App\Http\Controllers\Api\V1\CustomerController@destroy     | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD  | api/v1/goods                | goods.index       | App\Http\Controllers\Api\V1\GoodsController@index          | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | POST      | api/v1/goods                | goods.store       | App\Http\Controllers\Api\V1\GoodsController@store          | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | POST      | api/v1/goods/bulk           |                   | App\Http\Controllers\Api\V1\GoodsController@bulkStore      | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD  | api/v1/goods/{good}         | goods.show        | App\Http\Controllers\Api\V1\GoodsController@show           | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | PUT|PATCH | api/v1/goods/{good}         | goods.update      | App\Http\Controllers\Api\V1\GoodsController@update         | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | DELETE    | api/v1/goods/{good}         | goods.destroy     | App\Http\Controllers\Api\V1\GoodsController@destroy        | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD  | api/v1/invoices             | invoices.index    | App\Http\Controllers\Api\V1\InvoiceController@index        | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | POST      | api/v1/invoices             | invoices.store    | App\Http\Controllers\Api\V1\InvoiceController@store        | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | POST      | api/v1/invoices/bulk        |                   | App\Http\Controllers\Api\V1\InvoiceController@bulkStore    | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD  | api/v1/invoices/{invoice}   | invoices.show     | App\Http\Controllers\Api\V1\InvoiceController@show         | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | PUT|PATCH | api/v1/invoices/{invoice}   | invoices.update   | App\Http\Controllers\Api\V1\InvoiceController@update       | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | DELETE    | api/v1/invoices/{invoice}   | invoices.destroy  | App\Http\Controllers\Api\V1\InvoiceController@destroy      | api                                      |
|        |           |                             |                   |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD  | sanctum/csrf-cookie         |                   | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show | web                                      |
|        | GET|HEAD  | setup                       |                   | Closure                                                    | web                                      |
+--------+-----------+-----------------------------+-------------------+------------------------------------------------------------+------------------------------------------+


## How to get API key for authentication

해당 프로젝트는 인증을 위해서 sanctum 을 사용하였습니다. 사용을 위해서는 route 단계에서 아래와 같이 입력여 먼저 실행해주세요
<code>localhost:8000/api/v1/setup</code>
