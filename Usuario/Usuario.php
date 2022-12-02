<?php 
	class Usuario
	{
		private $peso;
		private $altura;
		private $imc;
		public $color;

		public function setPeso(float $peso)
		{
			$this->peso = $peso;
		}

		public function getPeso():float
		{
			return $this->peso;
		}

		public function setAltura(float $altura)
		{
			$this->altura = $altura;
		}

		public function getAltura():float
		{
			return $this->altura;
		}

		public function calcularIMC():float
		{
			$this->imc = $this->peso / pow($this->altura/100, 2);
			return round($this->imc, 2);
		}

		public function mensaje():string
		{
			if ($this->imc < 18.5) {
				$this->color = "grey";
				$mensaje = "Peso bajo <br>";
				$recomendacion = "https://www.mayoclinic.org/es-es/healthy-lifestyle/nutrition-and-healthy-eating/expert-answers/underweight/faq-20058429";
			} else if ($this->imc >= 18.5 && $this->imc < 25) {
				$this->color = "green";
				$mensaje = "Peso normal <br>";
				$recomendacion = "https://www.cdc.gov/healthyweight/spanish/index.html";
			} else if ($this->imc >= 25 && $this->imc < 30) {
				$this->color = "orange";
				$mensaje = "Sobrepeso <br>";
				$recomendacion = "https://fundaciondelcorazon.com/nutricion/dieta/1350-dieta-sobrepeso.html";
			} else {
				$this->color = "red";
				$mensaje = "Obesidad <br>";
				$recomendacion = "https://fundaciondelcorazon.com/nutricion/dieta/1266-dieta-obesidad.html";
			}
			return $mensaje;
		}
		public function recomendacion():string
		{
			if ($this->imc < 18.5) {
				$this->color = "grey";
				$recomendacion = "https://www.mayoclinic.org/es-es/healthy-lifestyle/nutrition-and-healthy-eating/expert-answers/underweight/faq-20058429";
			} else if ($this->imc >= 18.5 && $this->imc < 25) {
				$this->color = "green";
				$recomendacion = "https://www.cdc.gov/healthyweight/spanish/index.html";
			} else if ($this->imc >= 25 && $this->imc < 30) {
				$this->color = "orange";
				$recomendacion = "https://fundaciondelcorazon.com/nutricion/dieta/1350-dieta-sobrepeso.html";
			} else {
				$this->color = "red";
				$recomendacion = "https://fundaciondelcorazon.com/nutricion/dieta/1266-dieta-obesidad.html";
			}
			return $recomendacion;
		}
	}
?>