# zcar_app

## **Cómo ejecutar el proyecto en Docker**

  1. Ubicarse en el directorio en el que clonó la aplicación. 

  2. Abrir la interfáz de comandos en esa directorio 

  3. Ejecutar el comando:
       ```
       docker-compose up 
       ```
Una vez ejecutado el comando anterior, debe esperar a que se construya la imagen. 

Luego de que se haya de terminado de realizar el build de la imagen, debe ingresar el servidor de administración de base de datos phpMyAdmin, que se encuentra en la ruta: [localhost:8080](https://localhost:8080/). A la cual también puede acceder por medio de su navegador, escribiendo localhost:8080 en su barra de búsqueda.

Una vez allí se encontrará con el siguiente menú: 

![This is an image](http://i.stack.imgur.com/ye1YB.png)

## **phpMyAdmin** 

Allí debe digitar lo siguiente: 

Usuario: MYSQL_USER
 
Contraseña: MYSQL_PASSWORD

## ***Creación de la base de datos*** (Primera vez)

Inicialmente debe ingresar en el menú _Import_, se encontrará con el siguiente menú de opciones. 

![This is an image](https://www.templatemonster.com/help/wp-content/uploads/2011/10/phpMyAdmin_How_to_import_sample_data_dump_file_via_phpMyAdmin_tool_4.png)

Allí usted debe, por medio de la opción _Browse..._, abrir el script de base de datos query_db.sql encontrado en el directorio de la aplicación para posteriormente, ejecutar este Script haciendo uso del botón _GO_

Una vez finalizado este proceso, puede acceder libremente al servidor web de la aplicación por medio de la siguiente ruta: [localhost:8000](https://localhost:8000/).

***Side Note:***
para acceder en modo adminsitrador al sistema CRUD, usted debe ingresar por medio del siguiente usuario:

Usuario: admin

Contraseña: admin

Y un usuario normal sería por ejemplo:

Usuario: a

Contraseña: a

También puede crear estos usuarios a partir del menú de _Sign in_ que se encuentra en la parte superior de la aplicación. 

# **DockerHub**

https://hub.docker.com/r/jofranko/zcar_app/tags

# **Trabajo realizado por:**
1. Jofrank Orozco.
2. Orlando Meriño. 
