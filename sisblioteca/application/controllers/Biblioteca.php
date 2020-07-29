

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Biblioteca extends CI_Controller {

	public function index()
	{
      
        $this->load->view('biblioteca/header');
        $this->load->view('biblioteca/login');
        $this->load->view('biblioteca/footer');
    }
    
    public function evaluar(){
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $verificacion = $this->input->post('verificacion');
        
        
        
     $result=$this->db->query("SELECT *FROM usuario WHERE usua_login='{$usuario}' AND usua_password ='{$password}'");
        if($result -> num_rows()>0){
            $row = $result->row();
            //echo "bienvenido {$row->usua_login}";
            $data=array('user'=>$row->usua_login,'id'=>$row->usua_id,'auth'=>true);
            $this->session->set_userdata($data);
            redirect();

        }else{
<<<<<<< HEAD
           
            echo "Registrese antes de ingresar";
            var_dump($verificacion);
=======
>>>>>>> 6f30267b6b5a67eb67a22a7f018bce906eabca3a

        ?>
                <script type="text/javascript">
                    alert("las contraseña incorrecto");
                    <?php
                    redirect();
                    ?>

                </script>
            <?php
            
        }
    }

    public function salir(){
        $this->session->sess_destroy();
        redirect();
    }
    public function mostrar(){
        if($this->session->userdata('auth')==true){
            redirect('Welcome/infopersonal');
        }else{
            echo "no tienes privilegios para ver esta informacion";
        }
        
    }
}