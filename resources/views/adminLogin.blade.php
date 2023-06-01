<!doctype html>
<html lang="de">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title> Elternsprechtag | Leherlogin </title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/style(index,%20...).css" type="text/css"> 
        </head>



        <body>

            <div class="container-fluid"> 
                <div class="row"> <!-- Navbar reihe -->
                    <div class="col-3"> </div>
                        <div class="col-lg-6">
                            <nav class="navbar navbar-expand-lg navbar-light static-top">
                                 <style> .container-fluid{ border-bottom: 1px solid gray; }  </style>
                      
                                    <div class="container">
                                
                                         <a class="navbar-brand" href="index.php">
                                             <img src="https://www.htltraun.at/hp/public/bilder/wichtig/logo.png" alt="Logo" width="55" height="55" class="d-inline-block align-text-top">
                                          </a>
                            
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            
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
                            <div class="pt-3 text-center " style="font-size: 20px;">  ELTERNSPRECHTAG | ADMIN-LOGIN </div> 
                        </div> 
                  
                        <div class="card-body p-5"> 
                        
                                <form method="post" action='adminEinloggen'>
                                @if(Session::has('fail'))
                                <div class = "alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                               
                                  <div class="form-group">
                              
                                     <label for="schluessel"> Benutzername </label>
                                    <input type="username" name="benutzername" class="form-control mt-1" id="x" placeholder="">
                                    <span class="test-danger" style = "color:red">@error('id') {{$message}}@enderror</span>
                                  </div>

                        
                                  <div class="form-group mt-3">
                                    <label for="schluessel"> Passwort </label>
                                    <input type="password" name = "password" class="form-control mt-1" id="x" placeholder=""> 
                                    <span class="test-danger" style = "color:red">@error('password') {{$message}}@enderror</span>
                                  </div>
                                  <button type="submit" class="btn btn-secondary mt-4 rounded-2 "> Anmelden </button>
                                </form>

                               
                        </div>
                            
                        
                    </div>
                    
                 </div>
                    
                
                 </div>
            
            
             </div>
            
             <div class="col-4">
            
            
             </div>

             


    




         </body>

 </html>