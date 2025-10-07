📦 Symfony Proyecto Exportado

REQUISITOS:
- Tener Docker y Docker Compose instalados y ejecutar el proceso en entorno Windows.

PASOS:
1. Descargar y descomprimir esta carpeta -> https://drive.google.com/file/d/16IbbZzGta4HNubm9JEpNWw5TkjcfdTgV/view?usp=sharing
2. Abrir la carpeta y hacer doble clic en el fichero *iniciar_entorno.bat*
3. Acceder a http://localhost:8000/productos en el navegador

NOTAS:
- Si el puerto 8000 está ocupado, editar docker-compose.yml y cambiarlo por otro (ej. 8080:8000)
- El código fuente está en el directorio, puedes modificarlo libremente
- Al entrar en la pagina http://localhost:8000/productos se solicitarán credenciales (usuario: userprueba y password: pruebas)


INFO ACERCA DEL SISTEMA:
- se ha decidido procesar el JSON "al vuelo" cuando se carga la página debido a falta de tiempo. Lo ideal habría sido implementar un gestor de BBDD en el que almacenarlo y realizar consultas para cargar los datos.
