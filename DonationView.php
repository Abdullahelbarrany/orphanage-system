<html>

<head>
 
  <title>Donations</title>
</head>

<body>
   <div class="main">
    <p class="sign" align="center">Donations</p>
    <form action="../controller/doncontroller.php" method="post">
   <div class="form-group ">
         <div class="un">
           <input class="un " name="name" type="text" align="center" placeholder="UserId">
              </div>
              <span class="help-block"></span>
                </div>
               <div class="form-group ">
                <div class="un">
                 <label for="cars" >Choose item:</label>

                  <select name="cars" id="cars">
                  <option value="2">Tshirt</option>
                  <option value="1">Blanket</option>
                  <option value="3">Money</option>
          <option value="4">fool</option>
          <option value="5">pants</option>
          <option value="6">jacket</option>
          <option value="7">rice</option>
          <option value="8">bread</option>
          <option value="9">meat</option>
          <option value="10">cheese</option>

                </select>
              </div>
              <div class="un">
           <input class="un " type="text" align="center" name="manid" placeholder="MangerId">
              </div>
              <div class="un">
           <input class="un " type="text" align="center" name="Qty" placeholder="Quantity">
              </div>
              <div class="un">
           <input class="un " type="text" align="center" name="recid" placeholder="ReceiverId">
              </div>
                              
             
                                                       
         <input class="Submit" type="submit" name="submit" >  
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
        height: 800px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
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
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .Submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
</style>