CREATE TABLE inventario (
idarticulo int not null,
descripcion varchar(40) not null,
precio_normal float not null,
precio_descuento float not null,
pago_quicenal float not null,
quincenas int not null,
ruta_imagen varchar(200) not null,
tags varchar(200));

insert into inventario values (1, 'Jaula para Hamster',300,280,35,8,'images/1-jaula_hampster.png','hamster jaula mascota');
insert into inventario values (2, 'Alimentador para mascotas',500,400,50,8,'images/2-alimentador_mascotas.png', 'mascota perro gato alimentador');
insert into inventario values (3, 'Cama para mascota',300,240,30,8,'images/3-cama_mascota.png', 'mascota perro gato cama');
insert into inventario values (4, 'Comida para perro',300,240,30,8,'images/4-comida_perro.png', 'alimento perro');

create table carrito(
correo varchar(45),
idarticulo int,
cantidad int,
precio float);

