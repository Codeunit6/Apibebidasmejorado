# API Bebida
## Copiar repositorio :space_invader:

Recuerda copiar el codigo del proyecto con:
```
git clone
```
### Contribucion al proyecto :globe_with_meridians:
A traves de la contribuicon puedes aplicar codigos con  	:hammer_and_wrench: `gitbash` como lo son:

```
git status
git add .
git commit -m "mesaje"
git push
```
## Contenido del proyecto :package:

### Tecnologias

- [x] Php  	:open_file_folder:
- [x] HTML :bar_chart:
- [x] Composer 	:pushpin:
    - [x] Laravel :straight_ruler: 	:file_cabinet:
- [x] CSS :triangular_ruler:
- [x] Javascript :file_folder:
- [x] Jquery :paperclips:
- [x] Consumo de API BEBIDAS
 
## Consumo de la API :pushpin:
![POKEMON](https://pngimage.net/wp-content/uploads/2018/06/open-bar-bebidas-png-3.png "BEBIDAS")
La API que se consume en este proyecto es la de "BEBIDAS" la cual nos sirve para poder usarla dentro de nuestro proyecto en nuestros `Controllers` esto con el fin de poderle pasar los arreglos que se ocupan dentro de nuestra aplicacion.

SI REQUIERE DE INFORMACIÓN DE LA API CONSULTE LA DOCUMENTACIÓN AQUI:

:link: `link` <https://www.thecocktaildb.com/api.php>

## Controller de API :open_file_folder:
Dentro del proyecto se encontrara la carpeta de `APP` donde se puede encontrar varios de los archivos del proyecto, pero solo nos fijaremos en la carpeta de `HTTP` y dentro de ella encontraremos nuestros archivos controladores de nuestra aplicacion. En este archivo se podra ver como es el consumo de la API las lineas importantes estan comentadas en el codigo por si requieres de una guia.

SI REQUIERE DE ALGUNA AYUDA NO OLVIDE LEER LA DOCUMENTACIÓN DE LARAVEL:

:link: `link` <https://laravel.com/docs/8.x/readme>

## Framework (Laravel) :pushpin:
![Laravel](https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png "Laravel")
Es necesario el uso de este framework para su correcto uso.
RECUERDA ANTES INSTALAR EL PROYECTO EN TU ENTORNO DE TRABAJO CON EL `CODIGO` 
```
composer install
```
Una vez copiado el archivo es necesario ocupar el comando:
```
php artisan serve
```
Esto para levantar el servicio de manera LOCAL

## Php :open_file_folder:
![php](https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png)
Este proyecto tiene un desarrollo de php dentro de la carpeta de models donde podras encontrar las clases necesarias para el funcionamiento de este proyecto.

Este para que la aplicación se pueda ver en un servidor local.

## Dominio :round_pushpin:

![Heroku](https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Heroku_logo.svg/2560px-Heroku_logo.svg.png)

Este repositorio se encuentra subido en un dominio, en este caso heroku
Esto con el fin para que pueda visualizarse esta pagina. 

Este proyecto se encuentra en este link:

[Entra aqui para ver la pagina](https://bebidasapi.herokuapp.com/ "dominio")
 
 :link: `link` <https://pokeapipersonajes.herokuapp.com/>

## Configuracion del proyecto :wrench:

Para poder agregar una migracion a nuestro poryecto es necesario ocupar la `terminal` que nos ofrece visual studio code.
 :hash: Ejecutamos este comando:
```
php artisan make:migration "miprimeramigracion"
```
Despues de configurar `UP` y `DOWN` es necesario implementar la migracion en nuestra BD con el siguiente comando:
```
php artisan migrate
```
De ser necesaria una recarga de una migracion es necesario llevarla con el siguiente comando:
```
php artisan migrate:refresh
```
Asi como tambien es neceario la creacion de `Seeder` el cual tendra el dominio total de la base de datos, puedes crearlo con este comando:
```
php artisan make:seeder miprimerSeeder
```
Tambien es neceario implementar el `Seeder` en la base de datos para la importancion necesaria de datos.Con este comando podras lograr dicha tarea:
```
php artisan db:seed
```
Para poder ocupar un nuevo controlador dentro de nuestro proyecto es hacer lo mismo, ocupamos nuestra `terminal` y ocupamos el siguiente codigo:
```
php artisan make:controller "miprimerController"
```
Creacion de un modelo:
```
php artisan make:model "miprimerModel"
```
Recuerda que si necesitas algo en especifico busca en la documentacion que ofrece laravel.

## Pantalla de inicio/index
Aqui podras encontrar el acceso a la informacion que provee nuestra pagina web
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/inicio.jpg "Imagen")

### Pantalla de bebidas alcoholicas
Aqui podras vizualizar todas las bebidas alcoholicas que se encuentran en la BD
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/bebidas%20alcoholicas.jpg "Imagen")

### Pantalla de bebidas no alcoholicas
Aqui se pueden vizualizar las bebidas NO alcoholicas que tiene la BD
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/bebidas%20sin%20alcohol.jpg "Imagen")

### Pantalla del detalle de la bebida
Aqui se muestra como pasando el parametro del nombre de la bebida hace la busqueda con la funcion find para encontrar la bebida necesaria para la BD
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/detalles%20bebida.jpg "Imagen")

### Pantalla de detalles de ingrediente
En esta pantalla filtra la informacion por medio de un parametro que da el nombre y hace la busqueda del mismo en la api por una URL que nos ofrece la api
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/detalle%20ingrediente.jpg "Imagen")

### Pantalla de Error 404
En esta imagen se muestra el error cuando no encuentra un ingrediente en la API ya que algunos ingredientes no han sido configurados por lo que arroga este error.
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/404%20error.jpg "Imagen")

## Pantalla de nosotros 
En esta pantalla se muestra la informacion del equipo.
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/nosotros.jpg "Imagen")

## API Yu Gi Oh!
En este proyecto se hizo el uso de la API de yu gi oh hecha por un compañero de trabajo el cual nos proporciona el uso de esta API.
![Imagen](https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABSUUW3ROmxS7i85S0HroyoJge_Dj2J5JID66HCmAqnzWSNdWcdAsi4Hb5NA0aaF3hkyk4BCmosWYQKICG9dfWX8dBPEDBSRB-_JN.png?r=81f "Imagen")

## Pantalla de consumo de API YuGiOH!
Aqui se podran visualizar el consumo de cartas de una API creada por un compañero de trabajo.
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/cartas%20de%20yugioh.jpg "Imagen")

- Armando :link: `<link>` : <https://github.com/armandolopezg>

### Pantalla de detalle de carta
Aqui se podran ver el acceso a la carta seleccionada dando su informacion para mostrarla en pantalla, esto se logro gracias al parametro `id`
![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/carta%20detalle.jpg "Imagen")

- Armando :link: `<link>` : <https://github.com/armandolopezg>

## :pushpin: Importante :pushpin:
Recuerda es necesario que veas el  	:open_file_folder: `route` para ver las especificaciones del proyecto y no comentas un error de ruteo dentro del proyecto. Este se encuentra en la carpeta de routes y vas al archivo :card_index: `web.php`, en estas tambien es necesario mencionar que se llevaron a cabo mediante el uso de controladores de la aplicación, se recomienda no cambiarle el nombre, pero de caso de hacerlo tiene que repetir el proceso en todo el codigo para que este funcione y no suelte errores dentro del programa.

Mencionamos que no hay todavia una documentacion de este proyecto (:card_index_dividers: `.pdf`) por lo que si requiere de una pido que se comunique con el contacto dado aqui.

Pero ofrecemos la documentacion de la API en el dominio la cual podras encontrar lo necesario para poder hacer consumo de la `API`.

![Imagen](https://github.com/Codeunit6/Apibebidasmejorado/blob/main/Project/api.jpg "Imagen")

## Colaboradores

Las personas que colaboraron a este proyecto son:

- Zurito :link: `<link>` : <https://github.com/ZuritoSandoval>
- Armando :link: `<link>` : <https://github.com/armandolopezg>

Recuerda agradecerles publicamente y seguirlos en GitHub.

## Contacto
Si hay alguna dificultad o necesitas alguna ayuda con el proyecto por favor contactame aqui:
- :telephone_receiver:  5540124899

- :envelope:  fernando.brayan.m.g@gmail.com

## Recuerda dar las gracias :blue_heart:
Este proyecto puedes ocuparlo siempre y cuando:
- Da la gracias de manera publica :heartpulse:
- No lo ocupes con fines maliciosos :lock_with_ink_pen:
- Me invites un cafe :coffee:

Este ultimo no es obligatorio.

## Recuerda darme un follow :black_nib:
En mi perfil podras encontrar cosas interesantes: 

[GitHub](https://github.com/Codeunit6 "GitHub")

:link: `<link>` : <https://github.com/Codeunit6>
