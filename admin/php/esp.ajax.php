<?php 

require_once "esp.modelo.php";
class AjaxEsp
	{
		public $idEspe;
		public $estadoEspe;

			public function ajaxActivarEsp()
		{
				

				$tabla ="ket_especialidades";
				$item1="Id";
				$valor1 = $this->idEspe;

				$item2="Activo";
				$valor2 = $this->estadoEspe;
				$respuesta=ModeloEspecialidades::mdlActualizarEspecialidad($tabla,$item1,$valor1,$item2,$valor2);


		}




	}


         if(isset($_POST['estadoEspe']))
	{
		//alert('h');
		echo '<script> alert(\"entre\");

                        </script>';

		$editar= new AjaxEsp();
		$editar -> idEspe =$_POST['idEspe'];
		$editar -> estadoEspe =$_POST['estadoEspe'];
		$editar -> ajaxActivarEsp();


	}
	else
	{
				echo '<script> alert(\"entre\");

                        </script>';
	}