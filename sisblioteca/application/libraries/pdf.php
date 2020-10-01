<?php
  include(APPPATH."libraries/fpdf/fpdf.php");

    class PDF extends FPDF{
        function Header()
        {
            // Logo
            $this->Image(FCPATH.'assets/logo.jpg',10,10,35,30);
            $this->Image(FCPATH.'assets/logo1.jpg',170,10,33,33);
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this->Cell(80);
            //color
            $this->SetTextColor(20,50,250);
            // Título
            $this->Cell(30,10,'REPORTES DE DATOS',0,0,'C');
            // Salto de línea
            $this->Ln(20);
        }
        
        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','B',8);
            // Número de página
            $this->Cell(0,10,utf8_decode('Pàgina').$this->PageNo().'/{nb}',0,0,'C');
        }

    
        // Tabla simple
        function BasicTable($header, $data)
        {
            
            $this->Ln(20);
            $this->SetTextColor(245,11,11);
            $this->SetFont('Arial','B',12);
            // Cabecera
            foreach($header as $col)
                $this->Cell(40,7,$col,1);
            $this->Ln();
            // Datos
            foreach($data->result() as $row)
            {
                $this->SetTextColor(0,0,0);
                foreach($row as $col)
                    $this->Cell(40,6,$col,1);
                $this->Ln();
            }
        }
  

    }


?>