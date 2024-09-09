<?php
session_start();
if(!isset($_SESSION['username'])){
    Header("location:index");
}
class PDF extends FPDF
{
    function Header()
    {
        $this->image('fpdf/kalbar.png',10,8,17);
        $this->SetFont('Time New Roman',8,12);
        $this->Cell(120);
        $this->Cell(120,5,'CU SEMANDANG JAYA',0,1,'C');
        $this->Cell(120);
        $this->SetFont('Time New Roman',8,12);
        $this->Cell('Badan Hukum : 82.a/BH/PAD/X/2011',0,1,'C');
        $this->Cell(120);
        $this->Cell(120,5,''0,1,'C');
        $this->Cell(120)
        $this->SetFont('Time New Roman','',11);
        
    }
}