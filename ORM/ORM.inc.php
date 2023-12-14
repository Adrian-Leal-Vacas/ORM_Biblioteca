<?php
    class ORM {
        //Atributos de conexión a base de datos
        private static $host = "localhost";
		private static $user = "orm";
		private static $password = "1234";
		private static $database = "orm";
        // Metodos
        // Persist
        public function persist(&$object) {
            try {
                // Variable para obtener el siguente id
                $id = 0;
                try {
                    $dbConection = new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);
                } catch(Exception $e) {
                    echo "Connection failed" . $e->getMessage();  
                }
                try {
                    $dbConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $dbConection->beginTransaction();
                    // Sentencia SQL para obtener el id
                    // Querry
                    $querryId = "SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '".self::$database."' AND TABLE_NAME = '".get_class($object)."';";
                    // Sentencia para el id
                    $sentencia = $dbConection->prepare($querryId);
                    if ($sentencia->execute()) {
                        while ($fila = $sentencia->fetch()) {
                            $id = $fila;
                        }
                    }
                    $dbConection->commit();
                } catch (Exception $e) {
                    $dbConection->rollBack();
                    echo "Fallo: " . $e->getMessage();
                }
                //Asignamos el id de base de datos al objeto
			    $object->setId($id["AUTO_INCREMENT"]);
                try {
                    $dbConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $dbConection->beginTransaction();
				    //Insertamos el objeto en la base de datos
                    // Primero tenemos qeu saber de que clase viene para la querry
                    if (get_class($object) == "Disco") {
                        // Querry
                        $querryInsert = "INSERT INTO ".get_class($object)." VALUES (?,?,?,?,?,?,?,?)";
                        // Sentencia
                        $sentencia = $dbConection->prepare($querryInsert);
                        // Recoger datos
                        $id = $object->getId();
                        $titulo = $object->getTitulo();
                        $grupo = $object->getGrupo();
                        $ano = $object->getAno();
                        $publicacion = $object->getPublicacion();
                        $duracion = $object->getDuracion();
                        $iswc = $object->getIswc();
                        $genero = $object->getGenero();
                        // Parametros
                        $sentencia->bindParam(1, $id);
                        $sentencia->bindParam(2, $titulo);
                        $sentencia->bindParam(3, $grupo);
                        $sentencia->bindParam(4, $ano);
                        $sentencia->bindParam(5, $publicacion);
                        $sentencia->bindParam(6, $duracion);
                        $sentencia->bindParam(7, $iswc);
                        $sentencia->bindParam(8, $genero);
                        $sentencia->execute();
                        $dbConection->commit();
                    } else if (get_class($object) == "Libro") {
                        // Querry
                        $querryInsert = "INSERT INTO ".get_class($object)." VALUES (?,?,?,?,?,?,?,?)";
                        // Sentencia
                        $sentencia = $dbConection->prepare($querryInsert);
                        // Recoger datos
                        $id = $object->getId();
                        $titulo = $object->getTitulo();
                        $autor = $object->getAutor();
                        $ano = $object->getAno();
                        $publicacion = $object->getPublicacion();
                        $extension = $object->getExtension();
                        $isbn = $object->getIsbn();
                        $genero = $object->getGenero();
                        // Parametros
                        $sentencia->bindParam(1, $id);
                        $sentencia->bindParam(2, $titulo);
                        $sentencia->bindParam(3, $autor);
                        $sentencia->bindParam(4, $ano);
                        $sentencia->bindParam(5, $publicacion);
                        $sentencia->bindParam(6, $extension);
                        $sentencia->bindParam(7, $isbn);
                        $sentencia->bindParam(8, $genero);
                        $sentencia->execute();
                        $dbConection->commit();
                    } else if (get_class($object) == "Pelicula") {
                        // Querry
                        $querryInsert = "INSERT INTO ".get_class($object)." VALUES (?,?,?,?,?,?,?,?,?)";
                        // Sentencia
                        $sentencia = $dbConection->prepare($querryInsert);
                        // Recoger datos
                        $id = $object->getId();
                        $titulo = $object->getTitulo();
                        $director = $object->getDirector();
                        $reparto = $object->getReparto();
                        $ano = $object->getAno();
                        $publicacion = $object->getPublicacion();
                        $duracion = $object->getDuracion();
                        $isan = $object->getIsan();
                        $genero = $object->getGenero();
                        // Parametros
                        $sentencia->bindParam(1, $id);
                        $sentencia->bindParam(2, $titulo);
                        $sentencia->bindParam(3, $director);
                        $sentencia->bindParam(4, $reparto);
                        $sentencia->bindParam(5, $ano);
                        $sentencia->bindParam(6, $publicacion);
                        $sentencia->bindParam(7, $duracion);
                        $sentencia->bindParam(8, $isan);
                        $sentencia->bindParam(9, $genero);
                        $sentencia->execute();
                        $dbConection->commit();
                    }
                } catch(Exception $e) {
                    $dbConection->rollBack();
                    echo "Fallo: " . $e->getMessage();
                }
            } catch(Exception $e) {
    
            } finally {
                $dbConection = null;
            }
        }
        // flush
        public function flush(&$object) {
            try {
                $dbConection = new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);
            } catch(Exception $e) {
                echo "Connection failed" . $e->getMessage();  
            }
            try {
                $dbConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dbConection->beginTransaction();
                // Actualizaremos todos los atributos del objeto
                if (get_class($object) == "Disco") {
                    // Querry
                    $querryInsert = "UPDATE ".get_class($object)." SET titulo = ?, grupo = ?, ano = ?, publicacion = ?, duracion = ?, iswc = ?, genero = ? WHERE id = ?";
                    // Sentencia
                    $sentencia = $dbConection->prepare($querryInsert);
                    // Recoger datos
                    $id = $object->getId();
                    $titulo = $object->getTitulo();
                    $grupo = $object->getGrupo();
                    $ano = $object->getAno();
                    $publicacion = $object->getPublicacion();
                    $duracion = $object->getDuracion();
                    $iswc = $object->getIswc();
                    $genero = $object->getGenero();
                    // Parametros
                    $sentencia->bindParam(1, $titulo);
                    $sentencia->bindParam(2, $grupo);
                    $sentencia->bindParam(3, $ano);
                    $sentencia->bindParam(4, $publicacion);
                    $sentencia->bindParam(5, $duracion);
                    $sentencia->bindParam(6, $iswc);
                    $sentencia->bindParam(7, $genero);
                    $sentencia->bindParam(8, $id);
                    $sentencia->execute();
				    $dbConection->commit();
                } else if (get_class($object) == "Libros") {
                    // Querry
                    $querryInsert = "UPDATE ".get_class($object)." SET titulo = ?, autor = ?, ano = ?, publicacion = ?, extension = ?, isbn = ?, genero = ? WHERE id = ?";
                    // Sentencia
                    $sentencia = $dbConection->prepare($querryInsert);
                    // Recoger datos
                    $id = $object->getId();
                    $titulo = $object->getTitulo();
                    $autor = $object->getAutor();
                    $ano = $object->getAno();
                    $publicacion = $object->getPublicacion();
                    $extension = $object->getExtension();
                    $isbn = $object->getIsbn();
                    $genero = $object->getGenero();
                    // Parametros
                    $sentencia->bindParam(1, $titulo);
                    $sentencia->bindParam(2, $autor);
                    $sentencia->bindParam(3, $ano);
                    $sentencia->bindParam(4, $publicacion);
                    $sentencia->bindParam(5, $extension);
                    $sentencia->bindParam(6, $isbn);
                    $sentencia->bindParam(7, $genero);
                    $sentencia->bindParam(8, $id);
                    $sentencia->execute();
				    $dbConection->commit();
                } else if (get_class($object) == "Pelicula") {
                    // Querry
                    $querryInsert = "UPDATE ".get_class($object)." SET titulo = ?, director = ?, reparto = ?, ano = ?, publicacion = ?, duracion = ?, isan = ?, genero = ? WHERE id = ?";
                    // Sentencia
                    $sentencia = $dbConection->prepare($querryInsert);
                    // Recoger datos
                    $id = $object->getId();
                    $titulo = $object->getTitulo();
                    $director = $object->getDirector();
                    $reparto = $object->getReparto();
                    $ano = $object->getAno();
                    $publicacion = $object->getPublicacion();
                    $duracion = $object->getDuracion();
                    $isan = $object->getIsan();
                    $genero = $object->getGenero();
                    // Parametros
                    $sentencia->bindParam(1, $titulo);
                    $sentencia->bindParam(2, $director);
                    $sentencia->bindParam(3, $reparto);
                    $sentencia->bindParam(4, $ano);
                    $sentencia->bindParam(5, $publicacion);
                    $sentencia->bindParam(6, $duracion);
                    $sentencia->bindParam(7, $isan);
                    $sentencia->bindParam(8, $genero);
                    $sentencia->bindParam(9, $id);
                    $sentencia->execute();
				    $dbConection->commit();
                }
            } catch(Exception $e) {
                $dbConection->rollBack();
				echo "Fallo: " . $e->getMessage();
            } finally {
                $dbConection = null;
            }
        }
        // findAll
        public function findAll($table) {
            try {
                $dbConection = new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);
            } catch(Exception $e) {
                echo "Connection failed" . $e->getMessage();
            }
            try {
                $arrResult = array();
                $dbConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dbConection->beginTransaction();
				$sentencia = $dbConection->prepare("SELECT * FROM ".$table);
				if ($sentencia->execute(array())) {
					while ($fila = $sentencia->fetch()) {
						$arrResult[] = $fila;
					}
				}
				$dbConection->commit();
                if ($table === 'Disco') {
                    $arrObjects = array();
                    $cont = 0;
			        foreach($arrResult as $key => $val) {
					    $arrObjects[$val[$cont]] = new Disco();
					    $arrObjects[$val[$cont]]->setId($val[0]);
					    $arrObjects[$val[$cont]]->setTitulo($val[1]);
                        $arrObjects[$val[$cont]]->setGrupo($val[2]);
                        $arrObjects[$val[$cont]]->setAno($val[3]);
                        $arrObjects[$val[$cont]]->setPublicacion($val[4]);
                        $arrObjects[$val[$cont]]->setDuracion($val[5]);
                        $arrObjects[$val[$cont]]->setIswc($val[6]);
                        $arrObjects[$val[$cont]]->setGenero($val[7]);
                        $cont++;
			        }
                    $cont = 0;
			        return $arrObjects;
                } else if ($table === 'Pelicula') {
                    $arrObjects = array();
                    $cont = 0;
			        foreach($arrResult as $key => $val) {
					    $arrObjects[$val[$cont]] = new Pelicula();
					    $arrObjects[$val[$cont]]->setId($val[0]);
					    $arrObjects[$val[$cont]]->setTitulo($val[1]);
                        $arrObjects[$val[$cont]]->setDirector($val[2]);
                        $arrObjects[$val[$cont]]->setReparto($val[3]);
                        $arrObjects[$val[$cont]]->setAno($val[4]);
                        $arrObjects[$val[$cont]]->setPublicacion($val[5]);
                        $arrObjects[$val[$cont]]->setDuracion($val[6]);
                        $arrObjects[$val[$cont]]->setIsan($val[7]);
                        $arrObjects[$val[$cont]]->setGenero($val[8]);
                        $cont++;
			        }
                    $cont = 0;
			        return $arrObjects;
                } else if ($table === 'Libro') {
                    $arrObjects = array();
                    $cont = 0;
			        foreach($arrResult as $key => $val) {
					    $arrObjects[$val[$cont]] = new Libro();
					    $arrObjects[$val[$cont]]->setId($val[0]);
					    $arrObjects[$val[$cont]]->setTitulo($val[1]);
                        $arrObjects[$val[$cont]]->setAutor($val[2]);
                        $arrObjects[$val[$cont]]->setAno($val[3]);
                        $arrObjects[$val[$cont]]->setPublicacion($val[4]);
                        $arrObjects[$val[$cont]]->setExtension($val[5]);
                        $arrObjects[$val[$cont]]->setIsbn($val[6]);
                        $arrObjects[$val[$cont]]->setGenero($val[7]);
                        $cont++;
			        }
                    $cont = 0;
			        return $arrObjects;
                } else {
                    return [];
                }
            } catch (Exception $e) {
                $dbConection->rollBack();
				echo "Fallo: " . $e->getMessage();
                return [];
            } finally {
                $dbConection = null;
            }
        }
        // find
        public function find($table,$id) {
            try {
                $dbConection = new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);
            } catch(Exception $e) {
                echo "Connection failed" . $e->getMessage();
            }
            try {
                $arrResult = array();
                $dbConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$dbConection->beginTransaction();
				$sentencia = $dbConection->prepare("SELECT * FROM ".$table." WHERE id = ?");
				if ($sentencia->execute(array($id))) {
					while ($fila = $sentencia->fetch()) {
						$arrResult = $fila;
					}
				}
				$dbConection->commit();
                if($arrResult!=null){
                    if ($table === 'Disco') {
                        $object = new $table();
                        $object->setId($arrResult[0]);
					    $object->setTitulo($arrResult[1]);
                        $object->setGrupo($arrResult[2]);
                        $object->setAno($arrResult[3]);
                        $object->setPublicacion($arrResult[4]);
                        $object->setDuracion($arrResult[5]);
                        $object->setIswc($arrResult[6]);
                        $object->setGenero($arrResult[7]);
                        return $object;
                    } else if ($table === 'Pelicula') {
                        $object = new $table();
                        $object->setId($arrResult[0]);
					    $object->setTitulo($arrResult[1]);
                        $object->setDirector($arrResult[2]);
                        $object->setReparto($arrResult[3]);
                        $object->setAno($arrResult[4]);
                        $object->setPublicacion($arrResult[5]);
                        $object->setDuracion($arrResult[6]);
                        $object->setIsan($arrResult[7]);
                        $object->setGenero($arrResult[8]);
                        return $object;
                    } else if ($table === 'Libro') {
                        $object = new $table();
                        $object->setId($arrResult[0]);
					    $object->setTitulo($arrResult[1]);
                        $object->setAutor($arrResult[2]);
                        $object->setAno($arrResult[3]);
                        $object->setPublicacion($arrResult[4]);
                        $object->setExtension($arrResult[5]);
                        $object->setIsbn($arrResult[6]);
                        $object->setGenero($arrResult[7]);
                        return $object;
                    } else {
                        return null;
                    }
                } else {
                    $object = null;
                    return $object;
                } 	
            } catch(Exception $e) {
                $dbConection->rollBack();
				echo "Fallo: " . $e->getMessage();
                return null;
            } finally {
                $dbConection = null;
            }
        }
    }
?>