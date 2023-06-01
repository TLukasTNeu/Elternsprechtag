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
       
        
        <div class="row"> <!-- Navbar reihe -->
           
         <div class="col-3"> </div>
            
            <div class="col-lg-6">
              
                <nav class="navbar navbar-expand-lg navbar-light   static-top">
                    
                   <style>
                        .container-fluid
                        {
                            border-bottom: 1px solid gray;
                        }
                      </style>
                    
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
                            <form id="termine" action="termineStudent">
                               <a action="submit" href="#" class="nav-link active" aria-current="page" onclick="document.getElementById('termine').submit()"> TERMINE </a>
                            </form>                       
                     </li>
                    <li class="nav-item">
                            <form id="logout" action="logoutStudent">
                               <a action="submit" href="#" class="nav-link active" aria-current="page" onclick="document.getElementById('logout').submit()"> ABMELDEN </a>
                            </form>                       
                     </li>
                      
                  
                      
                    </ul>
                  </div>
            </div>
              
            </nav>
            </div>
            
             <div class="col-3-sm"> 
            
            </div>
        
        </div>
          
             <div class="container-fluid">  </div>
        
        
        <div class="row mt-5">
        
            
            <div class="col-4">
            
            
            </div>
       

                

                     
            <div class="col-lg-4">
                
                
                <div class="card border-0"> 
                
                    <div class="card-title"> 
                    
                        
                        <div class="pt-3  text-center " style="font-size: 20px;">  ELTERNSPRECHTAG | ANMELDUNG </div>
                  
                        <div class="card-body p-5"> 
                        
                            <form action = 'terminAuswahl'>
                                  <div class="form-group">
                                      
                                    <label for="Klasse"> LEHRER AUSWÄHLEN </label>
                                    <select class="form-select form-select mb-3" name="name" >
                                    @foreach($data as $i)
                                      <option value="{{$i->lehrerID}}"> {{$i->lehrerVN}} {{$i->lehrerNN}}</option>                                    
                                    @endforeach
                                   
                                    </select>
                                    
                                  </div>

                                  <button type="submit" class="btn btn-success rounded-2 "> Weiter </button>
                                </form>
                      </div>

                      <div class="row mt-2"> 
                      <div class="col-md-1"></div>
                      <div class="col-md-10">  <div href="#" class="card bg-light text-dark m-2 p-2 border-dark rounded-1 text-center" >  
                                        <div class="display text-dark"><strong>  ABWESENDE LEHRER </strong></div>
                                        <div class="text-dark">  
                                        @foreach($fehlend as $lehrer)
                                               {{ $lehrer->lehrerVN}}  {{$lehrer->lehrerNN}}<br>
                                            @endforeach
                                                                                    
                                                        </div>
                            </div>
                      <div class="col-md-1"></div>


                      </div>
                              
                            </div>
                         
                        
                        </div>
                    
                    </div>
                    
                
                </div>
            
            
            </div>
            
            <div class="col-4">
            
            
            </div>
        
        
        
    </body>
    
             