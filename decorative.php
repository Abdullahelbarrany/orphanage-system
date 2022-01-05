<?php
include_once "createdondet.php";

interface  DonationAddOns
{

     function Cost();
     

}
class Manadel implements DonationAddOns
{  

   
     function Cost()
    { $x=new Donationdetails();
     $y=$x->getlastdon();
           $z=$x->getamount($y);
           $z=$z+10;
        $x->adddecorative($y,$z);
    

  /*      echo "done".$z;
    */   


    }
}

class Meal implements DonationAddOns
{
    
    
     function Cost()
    {
        $x=new Donationdetails();
     $y=$x->getlastdon();
           $z=$x->getamount($y);
           $z=$z+20;
        $x->adddecorative($y,$z);
    }
}

class Beds implements DonationAddOns
{   
    
    function Cost()
    
     {   $x=new Donationdetails();
     $y=$x->getlastdon();
           $z=$x->getamount($y);
           $z=$z+100;
        $x->adddecorative($y,$z);
    }
    
}
?>