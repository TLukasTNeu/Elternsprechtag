<!doctype html>
<html lang="de">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title> Elternsprechtag | Home </title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/style(index,%20...).css" type="text/css"> 
        </head>



        <body>

            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-3"> </div>
                        <div class="col-lg-6"> 
                            
                                <nav class="navbar navbar-expand-lg navbar-light static-top">
                                 <style> .container-fluid{ border-bottom: 1px solid gray; }  </style>
                                 <div class="container">
                                     <a class="navbar-brand" href="index.php">
                                        <img src="https://www.htltraun.at/hp/public/bilder/wichtig/logo.png" 
                                        alt="Logo" width="55" height="55" class="d-inline-block align-text-top">
                                      </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ms-auto">
                                         <li class="nav-item">
                                             <a class="nav-link active" aria-current="page" href="index.php"> HOME </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link active" aria-current="page" href="/teacherShowLoginView"> LEHERLOGIN </a>      
                                         </li>
                                       
                                        </ul>
                                        </div>
                                     </div>
                                </nav>
                            </div>
                    <div class="col-3-sm"> </div> 
                </div>
            </div>

        
        
        <div class="container-fluid border-0"> 
            <div class="row mt-5">
                <div class="col-4"> </div>
                     
              
                
                 <div class="col-lg-4">
                        
                    <div class="card border-0"> 
                        <div class="card-title"> 
                            <div class="pt-3 text-center " style="font-size: 20px;">  ELTERNSPRECHTAG | ANMELDUNG </div> 
                        </div> 
                  
                        <div class="card-body p-5"> 
                        
                                <form method="post" action= 'login'>
                                @if(Session::has('fail'))
                                <div class = "alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                  <div class="form-group">
                                    <label for="Klasse"> KLASSE </label>
                                    <select class="form-select form-select mb-3" name="klasse" >
                                    @foreach($data->unique('klasse') as $i)
                                      <option value="{{$i->klasse}}"> {{$i->klasse}}</option>                                    
                                    @endforeach
                                    </select>
                                  </div>


                                  <div class="form-group">
                                    <label for="schluessel"> ZUGANGSCODE </label>
                                    <input type="password" name = "password" class="form-control" id="x" placeholder="XXXX-XXXX-XXXX">
                                   <span class="test-danger" style = "color:red">@error('password') {{$message}}@enderror</span>
                                   <p><small id="emailHelp" class="form-text text-muted"> Diesen hat jeder Schüler zugeteilt bekommen.</small></p> 
                                  </div>
                                  <button type="submit" class="btn btn-success mt-4 rounded-2 "> Anmelden </button>
                                </form>     
                             
                        </div>
                     
                        
                    </div>
                  
                 </div>
            
                
                 </div>

            
             </div>
            
             <div class="col-3">
   
            
            
             </div>

             

         </div>
         <div class="container-fluid border-0"> 
                    <div class="row">
                    
                    <div class="col-3"> 
                    
                    </div>
                    
                    <div class="col-lg-6 mt-2"> 
                    
                        <div class="row  mt-4"> 
                            <div class="col-3 "> </div>
                            <div class="col-sm-6  text-center"> 
                                
                                <div class="card border-0" style="width:100%;">
                                <div class="card-body" >
                                    <h5 class="card-title"> INFOS </h5>
                                    <h6 class="card-subtitle mb-2 text-muted"> Aktueller Elternsprechtag</h6>
                                    <p class="card-text"> </p>
                                    <div href="#" class="card bg-dark text-light m-2 p-2 border-secondary rounded-1"> 
                                        <div class="display"> ELTERNSPRECHTAG</div>
                                        <strong> 12.11.2023 </strong>
                              
                                    
                                    </div>
                                    <div href="#" class="card bg-dark text-light m-2 p-2 border-5  border-secondary rounded-1"> 
                                        <div class="display"> SPRECHSTUNDEN</div>
                                        <strong> <a href="https://www.htltraun.at/hp/public/lehrer" class="text-decoration-none text-success"> Sprechstundenliste </a> </strong></div>
                                  
                            
                                        <div href="#" class="card bg-dark text-light m-2 p-2 border-5  border-secondary rounded-1"> 
                                        <div class="display"> WEITERE INFOS</div>
                                        <strong> <a href="https://www.htltraun.at" class="text-decoration-none text-success"> Schulhomepage </a> </strong></div>
                                    
                                       
                                </div>
                                
                               
                                    
                            
                            
                            </div>
                            <div class="col-3 text-center">  

                                
                             


                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-4"> 
                    
                    </div>

                </div>

</div>
         </body>

 </html>