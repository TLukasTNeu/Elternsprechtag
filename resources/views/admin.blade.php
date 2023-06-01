<!doctype html>
<html lang="de">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title> Elternsprechtag | Admin </title>
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
                                                    <a class="nav-link active" aria-current="page" href="/teacherLogin"> LEHERLOGIN </a>      
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
                        
                    <div class="card  bg-dark text-light"> 
                        <div class="card-title"> 
                            <div class="pt-3 text-center " style="font-size: 20px;">  ELTERNSPRECHTAG | ADMIN-TOOL </div> 
                        </div> 
                  
                        <div class="card-body p-5 text-center"> 

                            <div class="card-title m-2"> <strong> PHASEN - EINSTELLUNG </strong></div>
                      

                            <div class="o-switch btn-group" data-toggle="buttons" role="group">
                            <form method="POST" action="view-status">
                            @csrf
                                <div class="row"> 

                        
                                    <div class="card bg-dark text-light text-center"> 
                                        <div class="card-body"> 
                                        <input class="form-check-input " type="radio" name="name" value="lehrerphase">
                                        <label> Lehrerphase </label>
                                        </div>   <div class="card-body"> 
                                    <input class="form-check-input" type="radio" name="name" value="elternphase">
                                    <label> Elternphase </label>
                                    </div>  <div class="card-body"> 
                                    <input class="form-check-input" type="radio" name="name" value="adminphase">
                                    <label> Adminphase </label></div> <button class="btn btn-success m-3" type="submit" name="status" value="1">Speichern</button>
                                    </div> 
                              </div> 
                               
                            </form>
                        </div>

                        <div class="card bg-dark text-light mt-5"> 

                        <div class="card-title m-3"> <strong> CSV - IMPORT </s</div>

                        </div>

                        <div class="card bg-dark text-light"> 

                            <div class="card-body"> 

                            <div class="mb-3">
                            <form class="form-horizontal" action="importStudent" method="post" name="upload_excel" enctype="multipart/form-data">
                            <select class="form-select" aria-label="Default select example" id="select-list">
                      
                                <option value="1"> Schülerliste </option>
                                <option value="2"> Lehrerliste</option>



                                <script>
                                    const selectList = document.getElementById("select-list");
                                    const form = document.forms.upload_excel;
                                    
                                    selectList.addEventListener("change", () => {
                                        const value = selectList.value;
                                        if (value === "1") {
                                            form.action = "importStudent"; // Schülerliste ausgewählt
                                        } else if (value === "2") {
                                            form.action = "importTeacher"; // Lehrerliste ausgewählt
                                        }
                                    });
                                </script>
                                </select>
                                            <input  type="file" name="file" id="file" class="form-control bg-dark text-light mt-3" type="file" id="formFile">
                                            <button class="btn btn-success mt-3" type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading..."> Importieren</button>
                                        
                               </form>
                            </div>

                            </div>

                        </div>
                            
                        
                    </div>
                    
                 </div>
                    
                
                 </div>
            
            
             </div>
            
             <div class="col-4">
            
            
             </div>

             

         </div>
    
             
            </div>
           
        </div>
    </div>

</div>
         </body>

 </html>