<?php
  include(APPPATH."libraries/fpdf/fpdf.php");

    class PDF extends FPDF{
        function Header()
        {
            // Logo
            //$this->Image(FCPATH.'assets/logo.jpg',10,10,35,30);
            $this->Image('assets/plantilla.png',0,0,220,30);
            $this->Image('assets/pantilla.png',0,220,220,80);
            //$this->Image(FCPATH.'assets/logo1.jpg',170,10,33,33);
            $this->Image('https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Logo_UNAP.png/554px-Logo_UNAP.png',6,5,20,20,'PNG');
           $this->Image('https://pbs.twimg.com/profile_images/2137261758/episunap.png',185,5,20,20,'PNG');
           
            // Arial bold 15
            $this->SetFont('Times','B',15);
            // Movernos a la derecha
            $this->Cell(80);
            //color
            $this->SetTextColor(0,0,0);
            // Título
            $this->Cell(30,5,'UNIVERSIDAD NACIONAL DEL ALTIPLANO PUNO ',0,0,'C');
            // Salto de línea
            $this->SetFont('Times','B',12);
            $this->SetTextColor(250, 5, 5);
            $this->Ln(9);
            $this->Cell(0,0,'INGENIERIA DE SISTEMAS ',0,0,'C');
            // Salto de línea
            $this->Ln(2);
            //LINEA
            $this->Line(33, 23, 177,23);
            $this->Line(33, 27, 177,27);
            //FRASE
            $this->SetFont('Times','I',9);
            $this->Cell(0);
            //color
            $this->SetTextColor(5, 5, 250 );
            $this->Ln(4);
            $this->Cell(0,0,'"SI   PUEDES    IMAGINAR,    LO    PUEDES    PROGRAMAR"',0,0,'C');
        }
        
        // Pie de página
        function Footer()
        {
            $this->Image('assets/percy.png',40,245,30,30);
            $this->Image('assets/dany.png',75,245,30,30);
            $this->Image('assets/julio.png',110,245,30,30);
            $this->Image('assets/manos.jpeg',100,275,20,20);
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','B',15);
            // Número de página
            $this->Cell(380,15,utf8_decode('').$this->PageNo(),0,0,'C');
            // Título
            $this->SetY(-15);
            $this->SetFont('Arial','B',8);
            $this->Cell(50,7,'ING. JULIO C. HALLASI A.:pecondoriyu@est.unap.edu.pe',0,0,'T');
            $this->Ln(2.5);
            $this->Cell(50,7,'ING. PERCY CONDORI Y. :jhallasia@est.unap.edu.pe',0,0,'T');
            $this->Ln(2.5);
            $this->Cell(50,7,'ING. DANY SALCA LAGAR :dsalccal@est.unap.edu.pe',0,0,'T');
        }

        // Tabla simple
        function cabeceraVertical($cabecera)
        {
            $this->SetXY(10, 54);
            $this->SetFont('Arial','B',10);
            $this->SetTextColor(250, 0, 0 );
            foreach($cabecera as $columna)
            {
                //Parámetro con valor 2, hace que la cabecera sea vertical
                $this->Cell(30,7, utf8_decode($columna),1, 2 , 'L' );
            }
        }
    
        function datosVerticales($datos)
        {
            $this->SetXY(40, 54); //40 = 10 posiciónX_anterior + 30ancho Celdas de cabecera
            $this->SetFont('Arial','B',10); //Fuente, Normal, tamaño
            $this->SetTextColor(0, 0, 0 );
            foreach($datos->result() as $columna)
            {
                foreach($columna as $col)
                
                     $this->Cell(50,7,$col,1, 2 , 'L' );
            }
        }

    }
?>