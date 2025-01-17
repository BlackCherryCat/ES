SELECT * FROM DISTRIBUIDORES WHERE pais_dist='España'; 
SELECT * FROM ARTICULOS WHERE precio_costo > 80.50 and precio_costo < 150.50; 
SELECT id_dist, COUNT(existencias) AS "existencias" FROM ARTICULOS GROUP BY id_dist; 
SELECT * FROM ARTICULOS JOIN DISTRIBUIDORES USING(id_dist) WHERE existencias > 100 AND DISTRIBUIDORES.pais_dist='España';
SELECT id_dist AS 'Distribuidores', COUNT(id_art) AS 'Articulos de alta calidad' FROM ARTICULOS WHERE calidad='ALTA' GROUP BY existencias HAVING COUNT(*)>1;
SELECT id_dist AS 'ID', D.nombre_dist AS 'Nombre' FROM ARTICULOS JOIN DISTRIBUIDORES D USING(id_dist) WHERE existencias>200;
3
ALTER TABLE Torneos ADD CONSTRAINT FOREIGN KEY (IdCiudad) REFERENCES Ciudades(IdCiudad);
ALTER TABLE Torneos ADD CONSTRAINT FOREIGN KEY (IdJuego) REFERENCES Juego(IdJuego);
ALTER TABLE Torneos ADD CONSTRAINT chk_insc CHECK (inscripcion<80.5);
ALTER TABLE Torneos ADD CONSTRAINT chk_numdias CHECK (numdias<=6);
ALTER TABLE Juego ADD CONSTRAINT chk_minJug CHECK (minJug>=2);
ALTER TABLE Juego ADD CONSTRAINT chk_maxJug CHECK (maxJug<=100);