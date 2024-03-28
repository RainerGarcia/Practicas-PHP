<?php 

	class Persona{
		#nueva forma de definir el contructor y sus parametros de forma mas simple y rapida

		#public que puede ser usada la variable por todo el mundo
		#private la variable solo puede ser usada dentro de las funciones y dentro de la propia clase
		#protected la variable o paramatros puede ser usado por la clase y por las clases derivadas o hijas

		const palabra = "una palabra";

		public function __construct(protected string $nombre, protected int $habilidad,protected int $energia){
		}
		
		public function descansando(){
			echo "<br>".$this->nombre." está descansando, energia restaurada";
			$this->energia = 10;

			echo "<br> energia: ".$this->energia;
		}
		
		/*
			metodos para obtener o modificar atributos desde la clase, con atributos con acceso tipo protected

			public function getAtributo(){
				return $this->atributo;
			}

			public function setAtributo($informacion){
				$this->atributo = $informacion;
			}
		*/
	}

	class Jugador extends Persona{

		use mutante,superacion{
			megapoder as private;
		}

		public $posicion;
		public $numero;
		#variable static
		public static $cabello ="negro";


		public function __construct($nombre,$posicion,$numero,$habilidad,$energia){
			#parent es para obtener los atributos de la clase padre
			parent::__construct($nombre,$habilidad,$energia);
			$this->numero=$numero;
			$this->posicion=$posicion;
		}


		public function entrenar(){
			echo "<br> el jugador ".$this->nombre.", esta entrenando";
			$this->habilidad++;
			$this->energia--;
			echo " habilidad+1: ".$this->habilidad.", energia-1: ".$this->energia;
		}

		public function jugar(){

			echo "<br> El jugador ".$this->nombre." está jugando";
			$this->energia--;
			echo " energia-1: ".$this->energia;
		}
		#funcion static
		public static function colorcabello(){
			#self solo se usa para acceder los datos de atributo static
			return "<br>tengo en cabello de color ".self::$cabello."<br>";
		}

		function palabra1(){
			#usando parent:: hace referencia a la clase padre, con ella puedes acceder a funciones de la clase padre 
			return parent::palabra;
		}
	}


	#self hace referencia a la clase mientras que this hace referencia a la instancia generada de la clase
 ?>