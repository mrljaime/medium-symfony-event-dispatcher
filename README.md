# Event Dispatcher 
___ 

La finalidad de este repositorio es demostrar el uso del componente [Event Dispatcher]
de Symfony.  

Puedes encontrar en [este link a medium]() una descripción de cómo trabajaba el componente, de qué forma puedes añadir suscriptores (y qué son)
y de qué forma puedes generar nuevos eventos, así como hacer uso de los ya existentes en Symfony.
  
  
  
## Cómo echar a andar este proyecto
___
Para poder echar a andar este proyecto ocupamos las siguientes cosas:
* Uso básico de docker
* [Docker](https://docs.docker.com/engine/install/)
* [Docker compose](https://docs.docker.com/compose/)

Para poder inicializar los contenedores usamos compose lo que facilita la ejecución de dos contenedores:
* Uno con la imagen oficial de CLI de PHP
* Uno con la imagen oficial de MariaDB
  * Este último, al iniciar, ejecuta un script que crea y condece permisos al usuario definido ya en las variables de ambiente 
  del archivo `.env` para correr sin complicaciones

```shell
docker compose up -d
#docker compose up # si quieres ver todo lo que sucede dentro de los contenedores (logs u "output")
```
> Te recomiendo que uses el primer comando porque el resto de ejecuciones de consola se llevarán a cabo pensando que la terminal quedó libre.
> En otro caso basta con que corras los comandos en una nueva terminal.  
> Recuerda que todo se hace en el directorio raíz (o donde está el archivo `docker-compose.yml`)  

La salida del comando anterior realizará varias cosillas para construir la imagen de php, el resultado final de la salida del comando 
es algo parecida a la siguiente en tanto todo haya terminado y esté corriendo:
```
[+] Running 4/4
 ✔ Network medium-symfony-event-dispatcher_default      Created        0.1s 
 ✔ Volume "medium-symfony-event-dispatcher_db"          Created        0.0s 
 ✔ Container medium-symfony-event-dispatcher-mariadb-1  Healthy        0.1s 
 ✔ Container medium-symfony-event-dispatcher-php-1      Created        0.0s 
```

Una vez levantados los contenedores ahora hay que encender el servidor de PHP a través del siguiente comando:
```shell
docker compose exec php php -S 0.0.0.0:8001 public/index.php
```
donde le estamos indicando al CLI de PHP que inicie un servidor web en la dirección `0.0.0.0` en el puerto `8001`. 
La dirección `0.0.0.0` la utilizamos para relacionar el puerto `8001` a todas las direcciones y no tengamos inconvenientes
de restricciones por ips al entrar desde nuestro navegador (o Postman o cualquier otra herramienta que haga peticiones HTTP).  
Ahora bien, vamos a abrir nuestro navegador en la dirección `127.0.0.1:8001` o podemos ejecutar el comando siguiente:
```shell
###
# MacOS
### 
open http://127.0.0.1:8001
```
> La dirección `127.0.0.1:8001` a la que entramos al navegador se debe a que estamos ligando un puerto del contenedor de PHP
> al mismo puerto de nuestra computadora lo que nos permite hablarle "localmente" al puerto y que éste tráfico sea dirigido 
> a nuestro contenedor. [Aquí te dejo un link](https://docs.docker.com/engine/reference/commandline/run/#publish) a la
> documentación si quieres tener más información al respecto.  

  
## OpenAPI
___
En el directorio [`docs/openapi`](docs/openapi) está la documentación en OpenAPI de este proyecto que te ayudará a crear
registros y validar el funcionamiento del componente [Event Dispatcher]


[Event Dispatcher]: https://symfony.com/doc/5.4/components/event_dispatcher.html