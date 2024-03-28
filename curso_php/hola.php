<?php
	echo "hola mundo";
	print " hola mundo ";

	$nombre = "Rainer";
	$edad = 30;
	$altura = 1.83;
	$casado = true;

	define("PULGADA", 0.393701);
	define("LIBRA", 2.20462);
	$cm = 50;
	$kilo = 5;

	echo "<br>".$nombre." | ".var_dump($nombre). " | ".gettype($nombre)."<br>";
	
	echo $edad." | ".var_dump($edad)." | ".gettype($edad)."<br>";
	
	echo $altura." | ".var_dump($altura)." | ".gettype($altura)."<br>";
	
	echo $casado." | ".var_dump($casado)." | ".gettype($casado);

	echo "<br><hr><br>";



	echo PULGADA. " ". LIBRA. "<br>";
	echo $cm * PULGADA."<br>";
	echo $kilo * LIBRA."<br>";
	echo $kilo + $cm."<br>";

	$result1 = ($cm * PULGADA)+($kilo * LIBRA);
	echo $result1;

	// comentario de una linea
	/*
		comentario de varias lineas
	*/

	echo "<br><h1>hola</h1>";

	echo "<br><hr><br>";

	$mensaje = "hola como estas que haces?";

	$len_letras = strlen($mensaje);

	echo $len_letras;

	if($len_letras < 28) {
		echo "<br> el mensaje si es menor que la condicion dada -> ".$len_letras;
	}else{
		echo "<br> el mensaje es mayor a la condicion dada -> ".$len_letras;
	}

	echo "<br><hr><br>";

	$pais = "australia";

	echo "<br> eres de un pais de habla hispana?";

	if ($pais == "mexico" or $pais == "españa" or $pais == "venezuela") {
		echo "<br> bienvenido camarada";
	}else{
		echo "<br> bienvenido extranjero";
	}


	echo "<br><hr><br>";

	$edad = 21;

	if ($edad > 21) {
		echo "<br> eres mayor a 21";

	}elseif ($edad == 21) {
		echo "<br> tienes 21 años";
	}else{
		echo "<br> eres menor a 21 años";
	}

	echo "<br><hr><br>";

	$nota = 9.5;

	$nota = round($nota);

	echo ($nota >= 10 ? "<br> pasastes la asignatura viva!" : "<br> reprobastes :( vuelve a intentarlo");

	echo "<br><hr><br>";


	$opcion = 6;

	switch ($opcion) {
		case 1:
			echo "<br> tu destino esta escrito para llegar al exito!" ;
			break;
		case 2:
			echo "<br> levantate estudia y se constante en lo que Dios te ha llamado!" ;
			break;
		case 3:
			echo "<br> no tengas temor del que diran, sigue haciendo lo que Dios te mando, que Dios te esta apoyando!" ;
			break;
		case 4:
			echo "<br> el tiempo de Dios es perfecto, trabaja estudia constantemente sin pensar en cuando, el tiempo del exito llegara!" ;
			break;
		default:
			echo "<br> no tengo mas mensajes para ti";
			break;
	}

	echo "<br><hr><br>";
	
	$i = 1;

	while ($i<=10) {
		echo $i++." ";
	}

	echo "<br><hr><br>";

	$i = 11;

	do{
		echo $i." ";
		$i++;
	} while ($i<=10);

	echo "<br><hr><br>";

	for ($i=1; $i < 10 ; $i++) { 
		if ($i % 2 == 0) {
			echo $i." es par <br>";
		}else{
			echo $i." es impar <br>";
		}
	}

	echo "<br><hr><br>";

	define("NUMERO", 7);
	$factor = 1;

	for ($i=1; $i <= NUMERO ; $i++) { 

		$factor *= $i;

	}

	echo $factor."<br>";

	echo "<br><hr><br>";

	function saludo()
	{
		echo "hola programador <br>";

		return 10;
	};

	echo saludo();	

	echo "<br><hr><br>";

	function votaciones($nombre,$edad){
		if ($edad < 18) {
			return $nombre."no puede votar, es menor de edad";
		}elseif($edad >=100){
			return "Edad no válida";
		}else{
			return $nombre." es mayor de edad, puede ejercer su voto";
		}
	};

	echo votaciones("Ashley",70);

	echo "<br><hr><br>";

	$arreglo = array(
		'Nombre' => "Rainer",
		"Edad" => 30,
		"CI" => "22407400",
		"Celular" => "04144158138",
		"Estatura" =>  1.83,
	);

	$arreglo2 = array("Rainer",30,"22407400","041441581380",1.83);

	echo $arreglo["Celular"]." | ".$arreglo2[3]."<br>";

	echo "<br><hr><br>";

	class Persona{
		protected $nombre;
		protected $habilidad;
		protected $energia;

		public function __construct($nombre,$habilidad,$energia){
			$this->nombre=$nombre;
			$this->habilidad=$habilidad;
			$this->energia=$energia;
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

		public $posicion;
		public $numero;


		public function __construct($nombre,$posicion,$numero,$habilidad,$energia){

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


	}

	$jugador1 = new Jugador("Rainer","portero","3",1,10);
	$jugador1 -> nombre2 = "nueva variable";
	//parece ser que se puede incluir nuevas variables dentro de la instancia del objeto


	echo "<br>".var_dump($jugador1);

	$jugador1->entrenar();

	$jugador1->jugar();

	$jugador1->entrenar();

	$jugador1->jugar();

	$jugador1->descansando();

	echo "<br><hr><br>";

	$concatenartodo = $cm.$kilo.$edad.$pais;

	echo $concatenartodo;

	echo "<br><hr><br>";

	$arr = array("uno","dos","tres","cuatro");

	foreach ($arr as $numero) {
		if($numero == "tres"){
			echo "<br>".$numero." encontrado";
			continue;
		}

		echo "<br> este numero es: ".$numero;
	}

	echo "<br>";
	echo "<br>".var_dump($arr);

	// en un ciclo se usa break para detener el ciclo, continue es omitir el resto del código y seguir con el ciclo en la siguiente interacion 

	echo "<br><hr><br>";
	
		$opcion = 4;

		$resultado = match($opcion){
			1 => "<br> tu destino esta escrito para llegar al exito!",
			2 => "<br> levantate estudia y se constante en lo que Dios te ha llamado!",
			3 => "<br> no tengas temor del que diran, sigue haciendo lo que Dios te mando, que Dios te esta apoyando!",
			4 => "<br> el tiempo de Dios es perfecto, trabaja estudia constantemente sin pensar en cuando, el tiempo del exito llegara!",
			default => "<br> no tengo mas mensajes para ti"
		};

		echo $resultado;

	echo "<br><hr><br>";

	$edad=30;

	$resultado=match(true){
		$edad >= 60 => "<br> Eres de tercerda edad",
		$edad >= 30 => "<br> Eres adulto",
		$edad >=18 => "<br> Eres adulto joven",
		default => "<br> Eres menor de edad"
	};

	echo $resultado;
?>