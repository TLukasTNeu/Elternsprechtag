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
        </head>
        <script> 
    
            function printPageArea(areaID){
            var printContent = document.getElementById(areaID).innerHTML;
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
            
        </script>


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
                                                <form id="lehrerauswahl"  action="teacherOption">
                                                    <!-- form elements -->
                                                    <a href="#"  class="nav-link active" aria-current="page" onclick="document.getElementById('lehrerauswahl').submit()">LEHRERAUSWAHL</a>
                                                    </form>   
                                                </li>
                                            

                                                <li class="nav-item">
                                                <form id="logout" action="logoutStudent">
                                
                                                    <a action="submit" href="#" class="nav-link active" aria-current="page" onclick="document.getElementById('logout').submit()" > ABMELDEN</a>
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
                
                <div class="col-2"></div>
                <div class="col-md-4 text-center"> 
                
                    
                 
                    <div class="card p-2 bg-dark text-light"> <strong>{{$data->schuelerVN}} {{$data->schuelerNN}}</strong> Meine Termine
                    
                        
                      
                        
                         
                    </div>
                    
                 
                </div>
               
                <div class="col-md-4 text-center mt-3"><div class="btn btn-success" href="javascript:void(0);" onclick="printPageArea('printableArea')"> Liste drucken </div> </div>
            </div>
            
        </div>
            
        
        
        <div class="container mt-2"> 
          <div class="row align-items-center text-center">
                <div class="col-2">
                 
                </div>
              
                <div class="col-md">
              
                 
                    
                    <div class="card bg-dark text-light table-responsive text-nowrap" id="printableArea"> 
                    
                        <table name = "zeitt"class="table text-light "> 
                            
                            <thead>
                                  
                                 <tr>
                                      <th scope="col">Lehrer</th>
                                      <th scope="col"> Besprechungszeit </th>
                                      <th scope="col"> Raum </th>
                                 
                                   
                                    </tr>
 
                                </thead>
                            <tbody>
                            @foreach($display as $u)
                                <tr class=" align-middle">  
                                
                               @php
                               for($i = 0; $i<=count($lehrer)-1;$i++)
                                  {
                                    if($u->lehrerID == $lehrer[$i]->lehrerID)
                                    {
                                      $nameVN = $lehrer[$i]->lehrerVN;
                                      $nameNN = $lehrer[$i]->lehrerNN;
                                      $bszeit = $lehrer[$i]->dauerProSprechstunde;
                                      $raum = $lehrer[$i]->raum;
                                    }
           
                                  }
                               @endphp

                                  <td> <strong class="text-success">{{$nameVN}} {{$nameNN}}</strong></td>     
                                   
                                  @php
                                    $time = strtotime($u->zeit);
                                    $timeBegin = date('H:i', $time);
                                    $timeS = $bszeit;
                                    $total = strtotime($u->zeit) + strtotime($timeS);
                                    $timeEnd = date('H:i', $total);

                                  @endphp
                                  <td>  {{$timeBegin}}-{{$timeEnd}}</td>
                                 
                                  <td>{{$raum}}</td> 
                                 
                                </tr>
                                @endforeach
                            </tbody>
                        
                        </table>
                    
                    </div>
                 
                </div>
                <div class="col-2">
              
                </div>
              </div>
            
            
        </div>
            
            
       
            
            
            
    </body>
    
</html>