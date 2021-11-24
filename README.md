## Codeigniter 4 con Blade Template y Material Design 2

El objetivo de este repositorio es enseñarle como puede agregar soporte de **Blade** a
un proyecto de **Codeigniter 4**

### ¿Qué es Blade?

Blade es el motor de plantillas simple pero potente que tiene su origen en Laravel. A 
diferencia de algunos motores de plantillas PHP, Blade no le impide usar código PHP 
simple en sus plantillas. De hecho, todas las plantillas de Blade se compilan en código 
PHP simple y se almacenan en caché hasta que se modifican, lo que significa que 
Blade agrega esencialmente cero sobrecarga a su aplicación.

### Requerimiento

 - Descargar la última versión de Codeigniter4

### ¿Donde descargar la última versión de Codeigniter4?

[Para descargar la última versión de Codeigniter](https://codeigniter.com/download)

- Descomprimir el archivo comprimido de Codeigniter y guardar en la siguiente ruta `/var/www/html/`

```sh
    $ mv codeigniter4-CodeIgniter4-8c7f701/ /var/www/html/Codeigniter4-Blade 
```

### ¿Comó configurar Codeigniter en Distribuciones Linux con SELinux?

[Codeigniter4-SinSpark](https://github.com/arteaprogramar/Codeigniter4-SinSpark)

### BladeOne Blade Template Engine

BladeOne es una versión independiente de Blade Template Engine que utiliza un solo archivo PHP y se puede portar y 
utilizar en diferentes proyectos. Le permite usar la plantilla de hoja fuera de Laravel. 
[Más información](https://github.com/EFTEC/BladeOne)

- Descargar o clonar el repositorio

```sh
    $ git clone https://github.com/EFTEC/BladeOne.git
```

- Buscar archivo con nombre `BladeOne.php`generalmente dentro de la carpeta `lib` del Git antes mencionado.

```sh
    ...
    / lib
        /BladeOneCache.php  
        /BladeOneCacheRedis.php  
        /BladeOneCustom.php  
        /BladeOne.php
    ...
```

- Copiar archivo `BladeOne.php` a su proyecto `Codeigniter4` dentro de la ruta `Project/app/Libraries/`, además
deberá editar el archivo en su `namespace` quedando de la siguiente forma:

```php
    <?php

    namespace App\Libraries;
    
    use ArrayAccess;
    use BadMethodCallException;
    use Closure;
    use Countable;
    use Exception;
    use InvalidArgumentException;
    
    /**
     * BladeOne - A Blade Template implementation in a single file
     *
     * @package   BladeOne
     * @author    Jorge Patricio Castro Castillo <jcastro arroba eftec dot cl>
     * @copyright Copyright (c) 2016-2021 Jorge Patricio Castro Castillo MIT License.
     *            Don't delete this comment, its part of the license.
     *            Part of this code is based in the work of Laravel PHP Components.
     * @version   4.1
     * @link      https://github.com/EFTEC/BladeOne
     */
    class BladeOne {
        ...
    }

```

### Configuración de Codeigniter para habilitar BladeOne

Según la documentación de `BladeOne` requiere de una ruta para almacenar las vistas (no compiladas).
Para realizar la acción antes mencionada deberá editar el archivo `Paths.php` que se encuentra en `Project/app/Config/Paths.php`
y agregar la siguiente linea de código:

```php
    ...
     /**
     * ---------------------------------------------------------------
     *  BLADE DIRECTORY
     * ---------------------------------------------------------------
     */
    public const VIEW_DIRECTORY =  __DIR__ . '/../Views';
    public const CACHE_DIRECTORY = __DIR__ . '/../../writable/cache';
    ...
```

Inicializar libreria en `BaseController.php` que se encuentra en `Project/app/Controllers/BaseController.php`

```php
    
    <?php

    namespace App\Controllers;
    
    ...
    use Config\Paths;
    use App\Libraries\BladeOne;
    ...
    
    class BaseController extends Controller {
        ...
        
        /**
         * Constructor.
         */
        public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {
            ...
            $this -> blade = new BladeOne(Paths::VIEW_DIRECTORY, Paths::CACHE_DIRECTORY, BladeOne::MODE_AUTO);
        }
        
        ...
    }
```


### ¿Como crear vistas con BladeOne?

- Crear una vista con la siguiente nomenclaruta en su nombre `xxx.blade.php` en donde `xxx` será el nombre de la vista, ejemplo

```php
    
    <!-- index.blade.php -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        Esta es la página con nombre <b>{{$title}}</b>
    </body>
    </html>

```

- Crear un controlador con cualquier nombre, ejemplo `IndexController.php` para visualizar `index.blade.php`

```php

    <?php

    namespace App\Controllers;
    
    class IndexController extends BaseController {
    
        public function index() {
            // Cargar vista
            return $this -> blade -> run('index', ['title' => 'Codeigniter with blade']);
        }
    
    }

```

- Comprobar la ruta por default para este ejemplo, editar archivo `Project/app/Config/Routes.php`

```php

    ... 
    /*
     * --------------------------------------------------------------------
     * Router Setup
     * --------------------------------------------------------------------
     */
    $routes->setDefaultNamespace('App\Controllers');
    $routes->setDefaultController('IndexController');
    $routes->setDefaultMethod('index');
    $routes->setTranslateURIDashes(false);
    $routes->set404Override();
    $routes->setAutoRoute(true);
    
    /*
     * --------------------------------------------------------------------
     * Route Definitions
     * --------------------------------------------------------------------
     */
    
    // We get a performance increase by specifying the default
    // route since we don't have to scan directories.
    $routes->get('/', 'IndexController::index');
    
    ...

```

### Listo