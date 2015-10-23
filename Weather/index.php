<!DOCTYPE html>
<html>
    <head>
        <title>Weather</title> 
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
       
         <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

                <!-- Optional theme -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

          
         <style type="text/css">
             html, body  {
                 height: 100%;
             }
             .container{
                 background-image: url("sunset.jpg");
                 background-size: cover;
                 width: 100%;
                 height: 100%;
                 background-position: center;
                 padding-top: 150px;
             }
             
             .center {
                 
                 text-align: center;
             }
             
             .white {
                 color: floralwhite;
                 font-weight: bolder;
             }
             
             p {
                 padding-top: 15px;
                 padding-bottom: 15px;
             
             }
             
             button {
                 margin-top: 14px;
                 margin-bottom: 20px;
             }
             
             .alert {
                 display: none;
                 font-weight: bold;
                 border-radius: 60px;
             }
             span {
                 height: 30px;
                 width: 30px;
                 
             }
        </style> 
    </head>
    <body>
        
        <div class="container">
        
            <div class="row">
                
                 <div class="col-md-6 col-md-offset-3 center ">
                     
                     <h1 class="glyphicon glyphicon-tint"></h1>
                
                     <h1 class="white">Weather Forecast</h1>
                     
                     <p class="lead white">Enter your city name below to get forecast</p>
                     
                     <form>
                     
                         <div class="form-group">
                         
                             <input id="stad" type="text" class="form-control" name="city" placeholder="Eg. Cape Town London Paris Tokyo" />
                             
                        <button id="findBtn" class="btn btn-success btn-md">Find My Weather</button>
                         
                         
                         
                         
                         </div>
                     
                     </form>
                     
                      <div id="success" class="alert alert-success">Success!!</div>
                                           <div id="fail"  class="alert alert-danger">ERROR!! Could not find weather data for the city entered</div>
                                                             <div id="noCity"  class="alert alert-danger">ERROR!! Please enter a cit name</div>
                
                 </div>
                
               
        
            </div>

        </div>
            
           

	

         <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>   
        <!-- Latest compiled and minified JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
        <script>
        
            $("#findBtn").click(function( event ) {
                event.preventDefault();
                
                $(".alert").hide();
                
                if ($("#stad").val() != "" ) {
                    
                
                   $.get("scrapper.php?city="+$("#stad").val(), function( data ) {
                    
                            
                       
                             if (data == ""){
                                 
                                 $("#fail").fadeIn();
                             } else {
                                 
                                 $("#success").html(data).fadeIn();
                                 
                             }
                     });
                
                } else {
                    
                    $("#noCity").fadeIn();
                }
                
            });
        
        
        
        
        </script>
        
    </body>
</html