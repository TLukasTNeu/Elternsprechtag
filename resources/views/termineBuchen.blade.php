<!doctype html>
<html lang="de">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title> Elternsprechtag | Termine </title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/style(index,%20...).css" type="text/css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
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
                                                <form id="lehrerauswahl"  action="studentLogin">
                                                    <!-- form elements -->
                                                    <a href="#"  class="nav-link active" aria-current="page" onclick="document.getElementById('lehrerauswahl').submit()">LEHRERAUSWAHL</a>
                                                    </form>   
                                                </li>
                                                    
                                                <li class="nav-item">
                                                 <form id="termine"  action="termineStudent">
                                                 <!-- form elements -->
                                                 <a href="#"  class="nav-link active" aria-current="page" onclick="document.getElementById('termine').submit()">TERMINE</a>
                                                  </form>
                                                </li>
                                                    
                                               
                                                     
                                                <li class="nav-item">
                                                  <form id="logout"  action="logoutStudent">
                                                    <!-- form elements -->
                                                 <a href="#"  class="nav-link active" aria-current="page" onclick="document.getElementById('logout').submit()">ABMELDEN</a>
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
                    <div class="card p-2 bg-dark text-light"> <strong>  Prof. {{$LoggedTeacher['lehrerVN']}} {{$LoggedTeacher['lehrerNN']}} </strong>
                    
                        
                      
                        
                         
                    </div>
                    
                 
                </div>
                <div class="col-md-4">   <div class="text-muted pt-2 text-center"> Bitte wählen Sie einen Termin aus.</div></div>
                
            </div>
            
        </div>
            
        
        
        <div class="container mt-2"> 
          <div class="row align-items-center text-center">
                <div class="col-2">
                 
                </div>
              
                <div class="col">
              
                
                    
                    <div class="card bg-dark text-light table-responsive text-nowrap"> 
                    
                    
                        <table class="table text-light "> 
                        
                            <thead>
                                  
                                 <tr>
                                      <th scope="col">Uhrzeit</th>
                                      <th scope="col">Zeitplan des Lehrers</th>
                                      <th scope="col">Ihr Zeitplan</th>
                                      <th scope="col">Buchen</th>
                                    </tr>
 
                                </thead>
                            <tbody>
                            @php

                                $start_time = strtotime($LoggedTeacher['startZeit']);
                                $close_time = strtotime($LoggedTeacher['endeZeit']);
                                $zw_time = strtotime($LoggedTeacher['dauerProSprechstunde']);
                                $zw_time = date('i', $zw_time);
                                //$test = strtotime($bookedDates[7]->zeit);
                               $test = array();
                               $testStudent = array();
                               $testStudentDate = array();
                                for($u=0; $u<=count($bookedDates)-1; $u++)
                                {

                                 $test[$u] = strtotime($bookedDates[$u]->zeit);

                                }

                                for($z=0; $z<=count($bookedDatesStudent)-1; $z++)
                                {

                                 $testStudent[$z] = strtotime($bookedDatesStudent[$z]->zeit);
                              
                                }
                                
                            @endphp

                          @for($i=$start_time; $i<$close_time; $i+=$zw_time*60)
                           
                                <tr class=" align-middle">  
                                  <td data-name="zeit" ><strong class="text-success">{{date('H:i',$i)}}</strong></td>
                                  
                                   @if(in_array($i,$test))
                                    <td> <strong class="text-danger">reserviert</strong></td>
                                    @if(in_array($i,$testStudent))
                                    
                                   
                                    @for($k=0; $k<=count($bookedDatesStudent)-1;$k++)
                                      @if(strtotime($bookedDatesStudent[$k]->zeit) ==$i)

                                         @for($t=0;$t<=count($lehrerNames)-1;$t++)
                                         
                                            @if($bookedDatesStudent[$k]->lehrerID == $lehrerNames[$t]->lehrerID)
                                            @php
                                                $lehrerVN = $lehrerNames[$t]->lehrerVN;
                                                $lehrerNN = $lehrerNames[$t]->lehrerNN;
                                             @endphp
                                            @endif
                                         @endfor
                                      @endif
                                    @endfor

                                 

                                    <td>{{$lehrerVN}} {{$lehrerNN}}</td> 
                                    <form  method="post" action='deleteAppointment'>
                                    <td><button type="submit" class="btn btn-danger"> <i class="bi bi-x-lg"></i></button>  </td> 
                                    </form>
                                    @else
                                    <td></td> 
                                    <td></td> 
                                    @endif
                                   @else
                                   <td></td>
                                   @if(in_array($i,$testStudent))

                                   @for($k=0; $k<=count($bookedDatesStudent)-1;$k++)
                                      @if(strtotime($bookedDatesStudent[$k]->zeit) ==$i)

                                         @for($t=0;$t<=count($lehrerNames)-1;$t++)
                                         
                                            @if($bookedDatesStudent[$k]->lehrerID == $lehrerNames[$t]->lehrerID)
                                            @php
                                                $lehrerVN = $lehrerNames[$t]->lehrerVN;
                                                $lehrerNN = $lehrerNames[$t]->lehrerNN;
                                             @endphp
                                            @endif
                                         @endfor
                                      @endif
                                    @endfor


                                   <td>{{$lehrerVN}} {{$lehrerNN}}</td>                           
                                   <td> </td> 
                                   @else

                                   
                                   <td></td> 
                                   <form  method="post" action='bookAppointment'>  
                                    @php

                                    $zeit = date('H:i', $i);
                                    @endphp
                                    <input name = "zeit" type = "hidden" value = "{{$zeit}}">
                                   <td> <button type="submit" class="btn btn-secondary" ><i class="bi bi-arrow-right"></i></button> </td>
                                   </form> 
                                  @endif
                               @endif
                            
                                </tr>
                          @endfor
                            </tbody>
                        
                        </table>
                    
                    </div>
                 
                </div>
                <div class="col-2">
              
                </div>
              </div>
            
               
        </div>
            
            
        
 
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Termin </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Termin bei Prof. Michael Schmida buchen?
              </div>
              <input type="start" name = "test" class="form-select" id="x" placeholder="13:00"> 
                
              <div class="modal-footer">
              
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Abbrechen</button>
                <button type="submit" class="btn btn-success"> Buchen </button>
              </div>
            </div>
          </div>
        </div>   
            
       
 
        
            
            
    </body>
    
</html>