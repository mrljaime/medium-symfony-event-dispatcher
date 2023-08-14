# Event Dispatcher 
___ 

La finalidad de este repositorio es demostrar el uso del componente [Event Dispatcher](https://symfony.com/doc/current/components/event_dispatcher.html)
de Symfony.  

Puedes encontrar en [este link a medium]() una descripción de cómo trabajaba el componente, de qué forma puedes añadir suscriptores (y qué son)
y de qué forma puedes generar nuevos eventos, así como hacer uso de los ya en Symfony.
  
  
  
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
#docker compose up si quieres ver todo lo que sucede dentro de los contenedores (logs u "output")
```
> Te recomiendo que uses el primer comando porque el resto de ejecuciones de consola se llevarán a cabo pensando que la terminal quedó libre.
> En otro caso basta con que corras los comandos en una nueva terminal.  
> Recuerda que todo se hace en el directorio raíz (o donde está el archivo `docker-compose.yml`)  

La salida del comando anterior realizará varias cosillas para construir la imagen de php, el resultado final de la salida del comando 
es algo parecida a la siguiente en tanto todo haya terminado y esté corriendo:
```
[+] Running 4/4
 ✔ Network medium-symfony-event-dispatcher_default      Created                                                                                                                                                               0.1s 
 ✔ Volume "medium-symfony-event-dispatcher_db"          Created                                                                                                                                                               0.0s 
 ✔ Container medium-symfony-event-dispatcher-mariadb-1  Healthy                                                                                                                                                               0.1s 
 ✔ Container medium-symfony-event-dispatcher-php-1      Created                                                                                                                                                               0.0s 
```
