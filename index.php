<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>


</head>
<body>
     <div class="container">
    
        
    <form method="post" action="result.php">

            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12" align="center"><p id="bawliq">Avtomobillərin Texniki Xidmət
                 və qəza tarixçəsi</p></div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" align="center" id="column_center">
                            <div class="form-group">
                                <label for="vin">VİN nömrə</label>
                                <input class="form-control" id="vin" name="vin" 
                                required="required"></input>
                                      </div>
                                    </div>
                                    </div>

                                    <div class="row" id="awagi">
                    <div class="col-lg col-md col-sm col-12" align="center"><button type="submit" 
                        class="btn btn-primary" id="knopka">Axtar</button></div>
                    </div>            
                    
                    <div class="row" align="center">
                    <div class="col-lg col-md col-3 col-sm"><img src="img/honda.png" alt="honda" height="70%" width="50%"></div>
                    <div class="col-lg col-md col-2 col-sm"><img src="img/toyota.png" alt="toyota" height="70%" width="50%"></div>
                    <div class="col-lg col-md col-3 col-sm"><img src="img/mazda.png" alt="mazda" height="70%" width="70%"></div>
                    
                    <div class="col-lg col-md col-2 col-sm"><img src="img/mitsubishi.png" alt="mitsubishi" height="70%" width="50%"></div>
                    
                    <div class="col-lg col-md col-2 col-sm"><img src="img/subaru.png" alt="subaru" height="70%" width="50%"></div>
                    </div>
                
    </form>
    </div>
</body>
</html>