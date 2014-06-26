# Primer app con Ruby on Rails (RoR)

Antes que nada desde la carpeta de proyecto vamos a escribir “vagrant up”, luego nos conectamos vía ssh a nuestra máquina virtual e ingresamos en la carpeta compartida “vagrant”, mediante el comando “cd vagrant”

Para crear nuestra primer aplicación vamos a posicionarnos en nuestra carpeta /vagrant, para lo cual escribimos en nuestra consola cd /vagrant y acto seguido creamos allí una carpeta donde realizar las primeras pruebas, se puede usar cualquier nombre a elección, por ejemplo “pruebas”.

Ingresamos a dicha carpeta utilizando nuevamente el comando “cd pruebas” y utilizamos el siguiente comando “rails new MiPrimerApp” con este comando creamos el “esqueleto” de nuestra aplicación, este paso puede tardar unos segundos.
Una vez listo abrimos nuestro editor de texto (sugiero usar Sublime Text 2) para examinar todas las carpetas y archivos que nos ha creado Rails, esto lo harems con el fin de darnos una idea de cómo es la jerarquía de los ficheros, archivos y/o carpetas que maneja RoR en nuestras aplicaciones.

## Volvemos a la consola y tipeamos

rails s

O también podemos escribir el comando así:
rails server

Lo que hará este comando así de sencillo será cargar nuestra aplicación para poder visualizarla en el navegador. No nos olvidemos que nosotros tenemos el puerto 3000 al cual le hicimos un forward con el fin de poder utilizarlo desde nuestro navegador favorito.

Para invocar a nuestras aplicación simplemente haremos localhost:3000 y deberíamos ver algo en pantalla, si esto no ocurre, no hay problema!, pronto podremos ver nuestra página inicial en dicho navegador.
Muy bien ahora regresamos de nuevo a la consola y nos salimos del servidor mediante la combinación de teclas Ctrl+C.

## Tecleamos lo siguiente:

rails g controller welcome index


Lo que hará este comando es crearnos el Controlador “Welcome” con la Vista “Index”.
Una vez creados los ficheros, procedemos a borrar el archivo index.html  en la Carpeta /Public de nuestra aplicación.
Luego nos vamos a la carpeta /config y abrimos en nuestro editor de texto el archivo routers.rb, deberemos buscar la línea que diga “root 'welcome#index'”  en el cual borraremos el “#” (que nos sirve para comentar algún texto o código en Ruby), y nos quedará una línea de comandos de Ruby así:

root ‘welcome#index’

Y ahora para Finalizar nuestra pequeña aplicación de RoR , abrimos el archivo “index.html.erb” que es la Vista “index” de nuestro controlador “Welcome” y colocamos lo siguiente:

<h1> Esta es mi Primer Aplicación en Ruby on Rails </h1>
<p> Creado por: #Tu nombre# </p>

La vista la podremos encontrar dentro de “/app/views/welcome/index.html.erb”, guardamos y por último vamos a cargar nuestra aplicación:

rails s

Abrimos nuestro navegador y visualizamos nuestra aplicación, en:
http://localhost:3000