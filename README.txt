Buenas tardes, ingeniero. Mi proyecto lo hice en Laravel, que organiza el codigo MVC 
Para crear las tablas use migraciones, y para traer los datos uso Eloquent, que evita escribir SQL a mano.

Para el login, la contraseña se guarda encriptada, no tal cual la escribe el usuario, 
y hay un middleware que bloquea el acceso si no iniciaste sesion. Los formularios llevan 
un token de seguridad (CSRF) para evitar envios falsos, y validaciones con mensajes de error en español.

Para correrlo uso Laragon y Composer, que instala lo que Laravel necesita.En este proyecto use IA 
parra la parte de los estilos .Css y para corregir algunos problemas de inconpatibilidad de archivos.
Lo que mas me costo fue la migracion de mis datos a la base de datos, porque las versiones de Laragon y 
PHP que tenia estaban desactualizadas — al momento de correr todo casi colapsa, me pedia actualizar varias cosas. 
Y uso Artisan para crear archivos y correr migraciones.

Contexto del proyecto:
Lo elegi por una situacion familiar: mi tia tiene un almacen de barrio que ha crecido bastante por la construccion
de urbanizaciones cerca, y esta en un punto muy estrategico. Por ese crecimiento surgio la necesidad de una 
herramienta que le ayude a organizar el negocio. A diferencia de una web e-commerce, enfocada en la venta al publico,
mi proyecto funciona de manera local, dentro del negocio, y esta enfocado en la administracion interna: control 
de entradas y salidas de productos, registro de productos, ventas y pedidos.