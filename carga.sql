INSERT INTO `becas` (nombre,categoria,informacion,img_path) VALUES
 ('ALVAREZ','MATIAS','San Martin 20','0358-4676529'),
 ('ARIAS SCHIAVI','JUAN PABLO','Bs. As. 150','0358-4676235'),
 ('BARALE','MAYCO','Bs. As. 1363','0358-4676235'),
 ('BETTIOL','NICOLAS MATIAS','Mendoza 1258','0358-155458497'),
 ('BONO','FEDERICO','Jujuy 3540','0358-4598712'),
 ('CABRAL','HERNAN','Pje. Mercedario 758','0358-4639741'),
 ('CAMPAGNA','JULIETA','Roma 1158','0358-4482567'),
 ('CAMPOS','GONZALO','Lago Traful 2987','0358-4795412');
 

INSERT INTO `categorias` (titulo) VALUES
 ('Becas'),
 ('Carnet FURC'),
 ('Informacion UNRC'),
 ('Espacio Independiente'),
 ('Contactate con nosotros'),
 ('Charlas, viajes y congresos'),
 ('Agenda cultural');


INSERT INTO `carnets` (descr_que_es,descr_como_funciona,descr_donde_consigo,img_path_que_es,img_path_donde_consigo) VALUES
 ('A condicionador de Aire SPLIT GE 3000FALVAREZ','MATIAS','San Martin 20','0358-4676529','0358-4676529'),
 ('B condicionador de Aire SPLIT GE 3000FALVAREZ','MATIAS','San Martin 20','0358-4676529','0358-4676529'),
 ('C condicionador de Aire SPLIT GE 3000FALVAREZ','MATIAS','San Martin 20','0358-4676529','0358-4676529'),
 ('D condicionador de Aire SPLIT GE 3000FALVAREZ','MATIAS','San Martin 20','0358-4676529','0358-4676529'),
 ('E condicionador de Aire SPLIT GE 3000FALVAREZ','MATIAS','San Martin 20','0358-4676529','0358-4676529'),
 ('F condicionador de Aire SPLIT GE 3000FALVAREZ','MATIAS','San Martin 20','0358-4676529','0358-4676529');


INSERT INTO `localesAdheridos` (nombre,direccion,rubro,descuento) VALUES
 ('ALVAREZ','MATIAS','San Martin 20',10),
 ('ARIAS SCHIAVI','JUAN PABLO','Bs. As. 150',10),
 ('BARALE','MAYCO','Bs. As. 1363',15),
 ('BETTIOL','NICOLAS MATIAS','Mendoza 1258',10),
 ('BONO','FEDERICO','Jujuy 3540',10),
 ('CABRAL','HERNAN','Pje. Mercedario 758',10),
 ('CAMPAGNA','JULIETA','Roma 1158',10),
 ('CAMPOS','GONZALO','Lago Traful 2987',15);

INSERT INTO `unrcContactos` (tipo,nombre,telefono,mail) VALUES
 ('Facultad','MATIAS','San Martin 20','asdasdasd'),
 ('Secretaria','JUAN PABLO','Bs. As. 150','asdasdasd'),
 ('Otro','MAYCO','Bs. As. 1363','ddsadsd'),
 ('Facultad','NICOLAS MATIAS','Mendoza 1258','asdasd'),
 ('Facultad','FEDERICO','Jujuy 3540','asdasdasd');

INSERT INTO `espacioRedes` (titulo,descripcion,facebookUrl,twitterUrl,email,img_path) VALUES
 ('BONO','FEDERICO','Jujuy 3540','0358-4598712','Jujuy 3540','0358-4598712'),
 ('CABRAL','HERNAN','Pje. Mercedario 758','0358-4639741','Jujuy 3540','0358-4598712'),
 ('CAMPAGNA','JULIETA','Roma 1158','0358-4482567','Jujuy 3540','0358-4598712'),
 ('CAMPOS','GONZALO','Lago Traful 2987','0358-4795412','Jujuy 3540','0358-4598712');

INSERT INTO `contactateMails` (mail) VALUES
 ('Mail 1'),
 ('Mail 2'),
 ('Mail 3'),
 ('Mail 4'),
 ('Mail 5');

INSERT INTO `actividades` (facultad,titulo,fecha,descripcion,img_path) VALUES
 ('BONO','FEDERICO','2010-03-31','0358-4598712','0358-4598712'),
 ('BONO','FEDERICO','2011-03-31','0358-4598712','0358-4598712'),
 ('BONO','FEDERICO','2012-03-31','0358-4598712','0358-4598712'),
 ('BONO','FEDERICO','2013-03-31','0358-4598712','0358-4598712'),
 ('BONO','FEDERICO','2014-03-31','0358-4598712','0358-4598712');


INSERT INTO `actCulturales` (titulo,fecha,descripcion,img_path) VALUES
 ('FEDERICO','2010-03-31','0358-4598712','0358-4598712'),
 ('FEDERICO','2011-03-31','0358-4598712','0358-4598712'),
 ('BONO','2012-03-31','0358-4598712','0358-4598712'),
 ('BONO','2013-03-31','0358-4598712','0358-4598712');

INSERT INTO `versiones` (nombre_tabla,version) VALUES
 ('becas',3),
 ('categorias',4),
 ('carnets',3),
 ('localesAdheridos',3),
 ('unrcContactos',3),
 ('espacioRedes',3),
 ('contactateMails',3),
 ('actividades',3),
 ('actCulturales',3);

