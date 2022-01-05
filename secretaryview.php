<html>

<head>
 
  
</head>

<body>
   <div class="main">
    <p class="Manger" align="center">Secretary</p>
    <form action="controller.php" method="post">
   <div class="form-group ">
         
              <span class="help-block"></span>
   </div>
        <div class="form-group ">
                              
             <div class="un">
                <a href="../view/DonationView.php" class="btn btn-success pull-right">Add Donation</a> 
               </div>
<div class="un">
                  <form action="controller/commandcontroller.php" method="post">
                    <div class="un">
                <input type="text" name="name" class="un " value="enter id"></input>
               </div>

                    <input type="submit" name="submit"class="Submit" value="checkstatus">
                  </form>
             
          <div class="un">                                        
         <a href="../view/viewfrom.php" class="btn btn-success pull-right">Child Form</a> 
         </div> 
      </div>
                      
   </form>

     
</body>

</html>
<style >


    
    
    body {
        background-color: #F3EBF6;
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .Manger {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;

   
    padding: 10px 20px;
    
    outline: none;
    box-sizing: border-box;
    border: 0px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 25px;
  
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .Submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        width: 50%;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        margin-top: 20px;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', serif;
        margin-left: 30%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: solid black;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
</style>