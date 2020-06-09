# PHP Slim Framework v3.0 Skeleton

Schema
BRe (Bundles-REsources)

Use this skeleton application to quickly setup and start working on a new Slim Framework v3.0 application.

This skeleton application was built for Composer. This makes setting up a new Slim Framework v3.0 application quick and easy.

- [PSR-2](http://www.php-fig.org/psr/psr-2/ "PHP Framework Interop Group")
- [PSR-4](http://www.php-fig.org/psr/psr-4/ "PHP Framework Interop Group")
- PHP 5.5
- Namespaced

+ Helpers
+ Services
+ Twig Views
+ Eloquent ORM
+ Flash Messages
+ Tracy Debug Bar
+ Symfony VarDumper
+ Logging with Monolog
+ Folders structure with sense
+ Environment variables with Dotenv

## How to install this skeleton

- Point your virtual host document root to your new application's ```public/``` directory.
- Ensure ```storage/``` is web writeable.
- create a copy from the files  [`.env.example` and `config\database.example.php`] to [`.env` and `config\database.php` ]

## Most relevant skeleton folders

- /src/app : Application code (Src/App Namespace)
  + ./Controllers : Add your controllers here
  + ./Middlewares : Add your middlewares here
  + ./Routes : Add your routes here
  + ./Services : Add your services here
  + ./Views : Add your Twig views here
- /config : Add/modify your configurations here
- /public : Add your assets files here

## Controllers methods

- getContainer() : Returns the Slim App container
- getService(string $service) : Returns service from container by name
- getRequest() : Returns HTTP Request
- getResponse() : Returns HTTP Response
- getView() : Returns Twig View
- render(string $template, array $data) : Renders Twig page stored in Views folder

## Middleware methods

- getContainer() : Returns the Slim App container
- getService(string $service) : Returns service from container by name

## Helpers methods

- d() : Symfony VarDumper and continue
- dd() : Symfony VarDumper and die
- env(string $variable, string $default) : Return environment variables with
- base_path() : Returns base path location
- app_path() : Returns app path location
- config_path() : Returns config path location
- public_path() : Returns public path location
- storage_path() : Returns storage path location

## Middlewares

You can add as many middlewares as you want in a clean way (```/app/Middlewares```).

After add your middleware, you can enable or disable it in ```config/middlewares.php``` configuration file.

## Routes

You can add as many routes files as you want (```/app/Routes```), but you need to enable these files in ```/apps/Routes/app.php``` file.

## Services

You can add as many services as you want in a clean way (```/app/Services```).

After add your service, you can enable or disable it in ```config/services.php``` configuration file.

## Configurations

You can add as many configurations files as you want (```/config```), but you need to enable these files in ```/config/app.php``` file.

## Twig Globals

flash : To get Flash Messages


--

### Enjoy the simplicity :oP


setlocale(LC_TIME, "spanish");

$mi_fecha = "tu variable de fecha";
$mi_fecha = str_replace("/", "-", $mi_fecha);
$Nueva_Fecha = date("d-m-Y", strtotime($mi_fecha));
$Mes_Anyo = strftime("%A %d de %B de %Y", strtotime($Nueva_Fecha));
echo utf8_encode($Mes_Anyo);