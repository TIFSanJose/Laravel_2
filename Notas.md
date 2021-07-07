# >>> Entorno de trabajo
## Instalacion del entorno con SAIL
> Scrip de [ejecucion](https://laravel.build/example-app) editado.  

    <pre>
        ./entorno sh

        blog_laravel
    </pre>
## Levantando el entorno
> 
    <pre>
        cd blog_laravel

        ./vendor/bin/sail up
    </pre>
# <<< Entorno de trabajo
# >>> Instalando JetStream
> 1. Ingresar al contenedor php
    <pre>
        docker exec -it blog_laravel_laravel.test_1 bash
    </pre>
> 2. Instalando paquete JetStrema
    <pre>
        composer require laravel/jetstream
    </pre>
> 3. Instalar Jetstream con Livewire 
    <pre>
        php artisan jetstream:install livewire --teams
    </pre>
> 4. Finalizando la instalación 
    <pre>
        npm install
    </pre>
    <pre>
        npm run dev
    </pre>
    <pre>
        php artisan migrate
    </pre>
> 5. Publicando los componentes Blade
    <pre>
        php artisan vendor:publish --tag=jetstream-views
    </pre>
# <<< Instalando JetStream

