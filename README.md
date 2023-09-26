# Ejercicio 11 Age of Empires

Trabajamos en una empresa de programación de juegos. Nos encargan programar una
nueva versión del Age of Empires. Más concretamente el funcionamiento de una mina
de recursos.

Nuestro juego consta de unos aldeanos que pertenecen a una civilización (Españoles,
Ingleses, Bizantinos, etc...) y están gobernados por un rey (Alejandro, Isabel,
Constantino, etc...); además cada aldeano consta de un indicador de salud.
La mina es explotada por los aldeanos y pueden ser de ORO o de PIEDRA. No existe
límite en el número de aldeanos que pueden trabajar en la mina. Tampoco tienen
que ser todos de la misma civilización.

Las minas por defecto son de "ORO" y tienen una cantera de 500 ítems. Debemos
definir también un constructor que parametrice todo, es decir que desde la
construcción se pueda cambiar el tipo de mina y los ítems que tiene.

Vamos a tener para nuestro juego, dos tipos de aldeanos: Españoles, gobernados por
Isabel I y con una salud inicial de 200; y Bizantinos, gobernados por Constantino II y
con una salud inicial de 250.

El sistema se simula durante 1 minuto, de forma que:

* Cada segundo todos los aldeanos extraen un ítem de la mina y lo suman al
almacén de su civilización.

* Cada 2 segundos se añade a la mina un español (al 40%) o un bizantino (al
20%); el resto de las veces no se añade a nadie.

* Cada 5 segundos sufrimos el ataque de un cura bizantino. Estos curas tienen la
capacidad de convertir a otros aldeanos a su bando. En dicho ataque sólo se
convierte a un aldeano. Este aldeano convertido cambiará de bando y trabajará
para los bizantinos desde ese momento.
