<?php 
    require_once("conexao.php");
    class produto extends conexao{
        private $id;
        private $nome;
        private $marca;
        private $modelo;
        private $foto;

        private $patrimonio;

        private $funciona;

        private $descricao;

        private $tabela = "produto";

        //Getters e Setters
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getFoto(){
            return $this->foto;
        }
        public function setFoto($foto){
            $this->foto = $foto;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getPatrimonio(){
            return $this->patrimonio;
        }

        public function setPatrimonio($patrimonio){
            $this->patrimonio = $patrimonio;
        }

        public function getFunciona(){
            return $this->funciona;
        }

        public function setFunciona($funciona){
            $this->funciona = $funciona;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        //Metodos

        //Consulta geral
		public function listar(){
			$sql = "SELECT * FROM $this->tabela ORDER BY nome ASC";
			$result = $this->conn->query($sql);
			
			if($result == true){
				return $result;
                
			}else{
				die("Falha na consulta!");
			}

            $this->conn->close();
		}
        
        //Consulta por id
		public function consultaId($id){
			$sql = "SELECT * FROM $this->tabela where id=$id";
			$result = $this->conn->query($sql);
			
			if($result == true){
				return $result;
                
			}else{
				die("Falha na consulta!");
			}

            $this->conn->close();
		}
        
        //Consulta por nome
		public function consultaNome($nome){
			$sql = "SELECT * FROM $this->tabela where nome like '%$nome%'";
			$result = $this->conn->query($sql);
			
			if($result == true){
				return $result;
                
			}else{
				die("Falha na consulta!");
			}

            $this->conn->close();
		}

        //Cadastrar
        public function cadastrar($nome,$marca,$modelo,$funciona,$foto, $localizacao, $patrimonio, $descricao){
            $sql= "insert into $this->tabela(nome,marca,modelo,funciona,foto,localizacao,patrimonio,descricao) values(?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('sssss', $nome,$marca,$modelo,$funciona,$foto,$localizacao,$patrimonio,$descricao);
            $stmt->execute();
            if($stmt==true){
                /*ALTERAR LINHA DE BAIXO */
                header("Location: ../../View/produto.php?sucess");
                return $stmt;
            }else{
                /*ALTERAR LINHA DE BAIXO */
                header("Location: ../../View/produto.php?error");
                die("Falha no Cadastro!");
            }

            $stmt->close();
			$this->conn->close();	
        }

        //FAZER A FOTO64 AKIIIIIIIIIII
        //Editar
		public function editar($nome,$marca,$preco,$foto,$foto64,$id){
			$sql = "UPDATE $this->tabela SET nome = ? , marca = ?, preco = ?, foto = ?, foto64 = ?
			WHERE id = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('sssssi',$nome,$marca,$preco,$foto,$foto64,$id);
			$stmt->execute();
			
			if($stmt == true){
                /*ALTERAR LINHA DE BAIXO */
                header("Location: ../../View/produto.php?sucess");
			}else{
                /*ALTERAR LINHA DE BAIXO */
                header("Location: ../../View/produto.php?error");
				die("Falha no Processo!");
			}
			$stmt->close();
			$this->conn->close();	
		}

    }
?>