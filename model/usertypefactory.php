<?php

class usertypefactory
{ public $html;
	function get($id)
	{
		if($id==1)
		{ $x = new mang();
			$result=$x->return();
			//echo "22";
			$tot=0;
				$i=0;
      
 while($row = mysqli_fetch_array($result))
       {$tot+=$row['Qty'];
   $i++;
       }
     $avg=$tot/$i;
     $this->html = <<<EOD
<div>
       <h1> Your reports </h1>
        <h2> The total donations from this week is  $tot </h2>
        <br><br>
      
        <h2> the average donations from this past week is $avg </h2></div>
EOD;
			return $this->html; 

		}
		if($id==2)
		{$x = new sec();
			$i=0;
			$result=$x->return();
			 while($row = mysqli_fetch_array($result))
       {$i++;
       }
       $this->html = <<<EOD
<div>
       <h1> Your reports </h1>
        <h2> you still have  $i of donations to accept  </h2>
        <br><br>
      
        
EOD;
			return $this->html; 

		}

	}

}

class mang
{ public $tot;


	function return()
	{//echo "in";
    
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $this->tot=0;
	$sql="SELECT * FROM donationdetails WHERE DATEDIFF(CURDATE(), createdat)<'8' And catid = '4' ";
   if ($result = mysqli_query($con, $sql)) {
        
            return $result;
        }


 else
 {
 	echo "error";
 }



}
}

class sec
{ 


	function return()
	{//echo "in";
    
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $this->tot=0;
	$sql="SELECT * FROM donationdetails WHERE state_id='1' ";
   if ($result = mysqli_query($con, $sql)) {
        
            return $result;
        }

 else
 {
 	echo "error";
 }



}
}
?>