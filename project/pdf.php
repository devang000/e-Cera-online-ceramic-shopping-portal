<?php 
session_start();


$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$res = mysqli_query($conn, "SELECT * FROM register_page WHERE username='$_SESSION[uname]'");
$i = 1;
$row = mysqli_fetch_assoc($res);
//$sql= "SELECT * FROM project WHERE column_name = 'register_page'";
    //  echo $_SESSION['count'];
    // exit(0);

  date_default_timezone_set("Asia/Calcutta");

  require ("./FPDF/fpdf.php");

  //customer and invoice details
$info=[
  "customer"=>(isset($row['firstName']) ? "".$row['firstName'] : "") . (isset($row['lastName']) ? " " . $row['lastName'] : ""),
    "Email-ID"=>isset($row['email']) ? $row['email'] . "," : "",
    "Contact No"=>isset($row['phoneNo']) ? $row['phoneNo'] . "," : "",
    "city"=>"Rajkot-36001",
    "invoice_no"=>"1000001",
    "invoice_date"=>date("d/m/y"),
    "invoice_time"=>date("h:m:s A"),
    "total_amt"=>isset($_SESSION['total']) ? $_SESSION['total'] : 0,
];
//invoice Products
$products_info=[
    
];
for($i=0;$i<count($_SESSION['item_names_pdf']);$i++)
{
  array_push($products_info,[
    // "name"=> "Total Purchased Items = " . (isset($_SESSION['count']) ? $_SESSION['count'] : 0),
    "name"=>$_SESSION['item_names_pdf'][$i],
    "price"=>"Rs.".$_SESSION['item_price_pdf'][$i]."/-",
    "quantity"=>"1",
    "total"=>"Rs.".$_SESSION['item_price_pdf'][$i]."/-",
    
],);
}
  class PDF extends FPDF
  {
    function Header(){
      // Set light grey background color
      $this->SetFillColor(255,255,255);
      $this->Rect(0, 0, $this->GetPageWidth(), 50, 'F');
    
      //Display Company Info
      $this->SetFont('Arial','B',14);
      $this->Image("./img/imgLOGO.png",5,10,60);
      $this->SetFont('Arial','',11);
    
      //Display INVOICE text
      $this->SetY(15);
      $this->SetX(-60);
      $this->SetFont('Arial','B',18);
      $this->Cell(50,10,"Invoice Receipt",0,1);
      
      //Display Horizontal line
      //$this->SetY(10);
      $this->Line(0,48,210,48);
    }
    
    
    function body($info,$products_info){
      
      //Billing Details
      $this->SetY(50);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(50,10,"Bill To: ",0,1);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,$info["customer"],0,1);
      $this->Cell(50,7,$info["Email-ID"],0,1);
      $this->Cell(50,7,$info["Contact No"],0,1);
      $this->Cell(50,7,$info["city"],0,1);
      
      //Display Invoice no
      $this->SetY(55);
      $this->SetX(-60);
      $this->Cell(50,7,"Invoice No : ".$info["invoice_no"]);
      
      //Display Invoice date
      $this->SetY(63);
      $this->SetX(-60);
      $this->Cell(50,7,"Invoice Date : ".$info["invoice_date"]);

    //Display Invoice date
    $this->SetY(71);
    $this->SetX(-60);
    $this->Cell(50,7,"Invoice Time : ".$info["invoice_time"]);
      
      //Display Table headings
      $this->SetY(95);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Total Items",1,0);
      $this->Cell(40,9, "PRICE",1,0,"C");
      $this->Cell(30,9,"Quantity",1,0,"C");
      // $this->Cell(30,9,"Discount",1,0,"C");
      $this->Cell(40,9,"TOTAL",1,1,"C");
      $this->SetFont('Arial','',12);
      
      //Display table product rows
      foreach($products_info as $row){
        $this->MultiCell(80,9,$row["name"],"LR",5 );
        
        $this->Cell(110,-25,$row["price"],-2,0,"R");
        $this->Cell(55,-2,$row["quantity"], 0,1,"C");
        // $this->Cell(30,9,$row["Discount"],"R",0,"C");
        $this->Cell(190,5,$row["total"],"R",1,"R");
        
        
      }
      //Display table empty rows
      for($i=0;$i<12-count($products_info);$i++)
      {
        $this->Cell(80,9,"","LR",0);
        $this->Cell(40,9,"","R",0,"R");
        $this->Cell(30,9,"","R",0,"C");
        $this->Cell(40,9,"","R",1,"R");
      }
      //Display table total row
      $this->SetFont('Arial','B',12);
      $this->Cell(150,9,"GRAND TOTAL",1,0,"R");
      $this->Cell(40,9,"Rs.".$_SESSION['total']."/-",1,1,"R");
      
      //Display amount in words
      $this->SetY(-45);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,9,"Mode of payment",0,1);
      $this->SetFont('Arial','',12);
      $this->Cell(0,9,"online payment through Razorpay",0,1);
      
    }
    function Footer(){
      
      //set footer position
      $this->SetY(-45);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,5,"e-Cera | General Manager",0,1,"R");
      $this->Ln(15);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"Authorized Signature",0,1,"R");
      $this->SetY(-20);
      $this->SetFont('Arial','',10);
      
      //Display Footer Text
      $this->Cell(0,10,"This invoice genreted by e-Cera | Maintanance team",0,1,"C");
      $this->Cell(0,10,"Thank you for purchasing",0,1,"C");
      
    }
    
  }
  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A4");
  $pdf->AddPage();
  $pdf->body($info,$products_info);
  $pdf->Close();
  $pdf->Output();
?>


