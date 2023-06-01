<!doctype html>
<html lang="de">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title> Elternsprechtag | Meine Termine </title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/style(index,%20...).css" type="text/css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                
              
        </head>

     
        
            <style> 
            
                label {
                  min-width: 190px !important;
                  display: inline-block !important
                }

            </style>

         
            


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
                                                <form id="logout" action="logoutStudent">
                                
                                                    <a action="submit" href="#" class="nav-link active" aria-current="page" onclick="document.getElementById('logout').submit()" > ABMELDEN</a>
                                                    </form>
                                                 
                                                </li>
                                                    
                                                <li class="nav-item">
                                                <form id="termine" action="termineTeacher">
                                
                                                    <a action="submit" href="#" class="nav-link active" aria-current="page" onclick="document.getElementById('termine').submit()" > TERMINE</a>
                                                    </form>
                                                 
                                                </li>
                                                    
                                                <li class="nav-item">
                                                <form id="teacherLogin" action="teacherShowLoginView">
                                
                                                    <a action="submit" href="#" class="nav-link active" aria-current="page" onclick="document.getElementById('teacherLogin').submit()" > LEHRERLOGIN </a>
                                                    </form>
                                                 
                                                </li>
                                        
                                            </ul>
                                        </div>
                                     </div>
                
                                </nav>
                        </div>
                
              
               <div class="col-3-sm"> </div> 
            </div>
        </div>
            
            
            
            
            
        <div class="container mt-5"> 
        
            <div class="row">
                
                <div class="col-3"></div>
                <div class="col-md-6 text-center"> 
                
           
                    
              
                   
                     

                    <div class="card p-2 bg-dark text-light"> <strong> {{$LoggedUser['lehrerVN']}} {{$LoggedUser['lehrerNN']}} - Lehrer Tool</strong>  
                  
                    </div>
                    
                 
                </div>
                <div class="col-md-4">   
                    
                    <div class=" text-center">
                   
                    </div></div>
                
            </div>
            
        </div>
            
        
        <div class="container mt-2"> 
          <div class="row ">
                <div class="col-3">
                 
                </div>
              
                <div class="col-md-6">
              
                 
                    
                    <div class="card bg-dark text-light"> 
                      
                            <div class="card-title text-center mt-2"> Termin hinzufügen </div>
                        
                            <div class="card-body"> 
                        
                        
                                <div class="">
                                    <form method="post" action='teacherTool'> 

                                    
                                            <div class="input-group mb-3">
                                              <label class="input-group-text bg-dark text-light" for="igs" > Dauer-Sprechstunde</label>
                                              <select class="form-select " id="inputGroupSelect01" name = "dauer">
                                       
                                                <option value="00:10:00"> 10 Minuten</option> 
                                                <option value="00:15:00"> 15 Minuten</option>
                                                <option value="00:20:00"> 20 Minuten</option> 
                                                <option value="00:25:00"> 25 Minuten</option>
                                                <option value="00:30:00"> 30 Minuten</option> 
                                              </select>
                                                
                                            
                                            </div>
                                        
                                            <div class="input-group mb-3">
                                              <label class="input-group-text bg-dark text-light " for="igs" >Zeit von</label>
                                   
                                              <select class="form-select" type="start" name = "zeitVon" class="form-select" id="zeitVon" placeholder="13:00">
                                                    
                                                    <option value="11:00:00"> 11:00 </option> 
                                                    <option value="11:30:00"> 11:30 </option> 
                                                    <option value="12:00:00"> 12:00 </option>
                                                    <option value="12:30:00"> 12:30 </option>
                                                    <option value="13:00:00"> 13:00 </option> 
                                                    <option value="13:30:00"> 13:30 </option> 
                                                    <option value="14:00:00"> 14:00 </option>
                                                    <option value="14:30:00"> 14:30 </option>
                                                    <option value="15:00:00"> 15:00  </option> 
                                                    <option value="15:30:00"> 15:30  </option> 
                                                    <option value="16:00:00"> 16:00  </option> 
                                                    <option value="16:30:00"> 16:30  </option> 
                                                    <option value="17:00:00"> 17:00  </option> 
                                             
                                                </select>    
                                            </div>
                                        
                                               <div class="input-group mb-3">
                                              <label class="input-group-text bg-dark text-light" for="igs" >Zeit bis</label>
                                            
                                                 <select class="form-select "type="end" name = "zeitBis" class="form-select" id="zeitBis" placeholder="17:00">
                                                    <option value="11:30:00"> 11:30 </option> 
                                                    <option value="12:00:00"> 12:00 </option>
                                                    <option value="12:30:00"> 12:30 </option>
                                                    <option value="13:00:00"> 13:00 </option> 
                                                    <option value="13:30:00"> 13:30 </option> 
                                                    <option value="14:00:00"> 14:00 </option>
                                                    <option value="14:30:00"> 14:30 </option>
                                                    <option value="15:00:00"> 15:00  </option> 
                                                    <option value="15:30:00"> 15:30  </option> 
                                                    <option value="16:00:00"> 16:00  </option> 
                                                    <option value="16:30:00"> 16:30  </option> 
                                                    <option value="17:00:00"> 17:00  </option> 
                                                </select>    

                                                <script>
                                                // Event-Listener für Änderungen an der Startzeit
                                                $('#zeitVon').change(function() {
                                                    var start = $(this).val(); // ausgewählte Startzeit
                                                    $('#zeitBis option').removeAttr('disabled'); // alle Endzeit-Optionen aktivieren
                                                    $('#zeitBis option').each(function() {
                                                    if ($(this).val() < start || $(this).val() == start) { // Endzeit vor Startzeit
                                                        $(this).attr('disabled', true); // Endzeit-Option deaktivieren
                                                    }
                                                    });
                                                });
                                                </script>
                                                                                          
                                                </div>

                                         <div class="col-auto">
                                            <button type="submit" class="btn btn-success mb-3"> Speichern</button>
                                          </div>

                                    </form>
                                
                                </div>
                                
                                
                            </div>
                        
                      
                       
                         
                            
                     </div>
                        
                      
                        
                    
                    </div>
                 
                </div>
                <div class="col-3">
              
                </div>
          
            
            
        </div>
            
         
 
       
            
            
            
            
    </body>
    
</html>