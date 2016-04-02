drop schema if exists DB_EstudiantesUNRC;
create schema DB_EstudiantesUNRC;
use DB_EstudiantesUNRC;


-- Tablas utilizadas por cliente Android
-- y Plataforma administrativa

-- Tabla con categorias de listview principal
create table categorias(
id integer(3) unique not null auto_increment,
titulo varchar(30) not null,
constraint pk_categoria primary key (id));

-- Tabla de categoria Becas
create table becas(
id integer(10) unique not null auto_increment,
nombre varchar(30) not null,
categoria varchar(30) not null,
informacion varchar(1000) not null,
img_path varchar(150), -- imagen opcional
constraint pk_beca primary key (id));

-- Tabla de categoria Carnet FURC
create table carnets(
id integer(10) unique not null auto_increment,
descr_que_es varchar(1000) not null,
descr_como_funciona varchar(1000) not null,
descr_donde_consigo varchar(1000) not null,
img_path_que_es varchar(150) not null,
img_path_donde_consigo varchar(150), -- imagen opcional
constraint pk_carnet primary key (id));

-- Tabla de categoria categoria Carnet FURC -> Locales Adheridos
create table localesAdheridos(
id integer(10) unique not null auto_increment,
nombre varchar(30) not null,
direccion varchar(30) not null,
rubro varchar(30) not null,
descuento integer(3) not null,
constraint pk_locales primary key (id));

-- Tabla de categoria Informacion UNRC -> Contactos UNRC
create table unrcContactos(
id integer(10) unique not null auto_increment,
tipo enum('Facultad', 'Secretaria', 'Otro') not null,
nombre varchar(30) not null,
telefono varchar(30) not null,
mail varchar(30), -- mail opcional
constraint pk_contactos primary key (id));

-- Tabla de categoria Espacio Independiente
create table espacioRedes(
id integer(10) unique not null auto_increment,
titulo varchar(30) not null,
descripcion varchar(1000) not null,
facebookUrl varchar(100) not null,
twitterUrl varchar(100) not null,
email varchar(100) not null,
img_path varchar(150) not null,
constraint pk_espacio primary key (id));

-- Tabla de categoria Contactate con nosotros
create table contactateMails(
id integer(10) unique not null auto_increment,
mail varchar(100) not null,
constraint pk_contactate primary key (id));

-- Tabla de categoria Charlas, Viajes y Congresos
create table actividades(
id integer(10) unique not null auto_increment,
facultad varchar(30) not null,
titulo varchar(30) not null,
fecha date not null,
descripcion varchar(1000) not null,
img_path varchar(150), -- imagen opcional
constraint pk_actividades primary key (id));

-- Tabla de categoria Actividades Culturales
create table actCulturales(
id integer(10) unique not null auto_increment,
titulo varchar(30) not null,
fecha date not null,
descripcion varchar(1000) not null,
img_path varchar(150), -- imagen opcional
constraint pk_act_cultural primary key (id));

-- Tabla que almacena la version de cada tabla
create table versiones(
nombre_tabla varchar(30) unique not null,
version integer(5) not null,
constraint pk_versiones primary key (nombre_tabla));



-- Tabla utilizada UNICAMENTE
-- por plataforma administrativa

create table logins(
usuario varchar(20) unique not null,
contrasenia varchar(25) not null,
constraint pk_logins primary key (usuario)
);

