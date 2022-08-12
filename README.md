# Prueba Tecnica PHP Symfony

### Prerequisitos

* php >= 8.1
* composer >= 2.3
* httpd >= 2.4

### Instalacion

1. Clonar repositorio
   ```sh
   git clone https://github.com/luisz15/prueba_tecnica.git
   ```
2. Abre el rpyecto
   ```sh
   cd prueba_tecnica
   ```
3. Crea el archivo `.env`
   ```sh
   touch .env
   ```
3. Ingresa las credenciales para la conexion MySQL en `.env`
   ```sh
   DATABASE_URL="mysql://<user>:<password>@127.0.0.1:3306/PRUEBA_TECNICA?serverVersion=14&charset=utf8"
   ```
4. Instalar requerimientos de Composer
   ```sh
   composer install
   ```
5. Abrir un nuevo puerto en `httpd.conf` para el VirtualHost
   ```sh
   Listen 8081
   ```
6. Agrega el VirtualHost a `httpd.conf` para configurar un enrutado mas limpio 
   * cambiar `/usr/local/var/www` por el `DocumentRoot` definido en `httpd.conf`
   ```sh
   <VirtualHost *:8081>
    DocumentRoot /usr/local/var/www/prueba_tecnica/public/index.php
    <Directory /usr/local/var/www/prueba_tecnica/public/index.php>
        AllowOverride All
        Order Allow,Deny
        Allow from All
    </Directory>
   </VirtualHost>
   ```
7. Reinicia httpd, dependiendo de la plataforma y version, ver documentacion para mas informacion https://httpd.apache.org/docs/2.4/stopping.html#hup
   
## Utilizacion

Navega a <a href="http://127.0.0.1:8081/desafio1/fizz/buzz">127.0.0.1:8081/desafio1/fizz/buzz</a> o <a href="http://127.0.0.1:8081/desafio2/fizz/buzz">127.0.0.1:8081/desafio2/fizz/buzz</a>
