@extends('layouts.app')
@section('content')


<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">accueil</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="input-group mb-3 float-sm-right">
                <input type="text" class="form-control" placeholder="Recipient's username" >
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>

              
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>



<div class="row mx-2 mt-4 row_slides">


    {{-- card lab-github --}}
    <div class="col-md-3">
        <div class="card shadow-lg" id="slide_card">

            {{-- card header --}}
            <div class="d-flex justify-content-between mt-2">         
                <div class="d-flex justify-content-between  ml-3">   
                    {{-- card logo --}}
                    <img class="mr-2" width="16px" height="16px" style="margin-top: 10px" src="{{ asset('imgs/wordlogo.png') }}" alt="">    
                      {{-- card title --}}
                <h5 class="mt-1" >cnmh</h5>
                </div>

             <div>    
                {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    
                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i> suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i> télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i> modify</a>
                          </div>
                </div>
            </div>

    

            {{-- card body --}}
            <div class="card-body p-2">
                <img src="{{asset('imgs/rapport1.png')}}" style="border-radius: 3px" width="100%" >
                
            </div>

            {{-- card footer --}}
            <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>
    
        </div>
    </div>
    
    
    {{-- card diagramme de classe --}}
    <div class="col-md-3">
        <div class="card shadow-lg" id="slide_card">

            {{-- card header --}}
            <div class="d-flex justify-content-between mt-2">         
                <div class="d-flex justify-content-between  ml-3">   
                    {{-- card logo --}}
                    <img class="mr-2" width="15px" height="15px" style="margin-top: 10px" src="{{ asset('imgs/wordlogo.png') }}" alt="">    
                      {{-- card title --}}
                <h5 class="mt-1" >diagramme-de-classes</h5>
                </div>

             <div>    
                {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    
                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i> suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i> télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i> modify</a>
                          </div>
                </div>
            </div>

    

            {{-- card body --}}
            <div class="card-body p-2">
                <img src="{{asset('imgs/rapport2.png')}}" style="border-radius: 3px" width="100%" >
                
            </div>

            {{-- card footer --}}
            <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>
    
        </div>
    </div>
    
    
  {{-- card crud laravel basic --}}
  <div class="col-md-3">
    <div class="card shadow-lg" id="slide_card">

        {{-- card header --}}
        <div class="d-flex justify-content-between mt-2">         
            <div class="d-flex justify-content-between  ml-3">   
                {{-- card logo --}}
                <img class="mr-2" width="15px" height="15px" style="margin-top: 10px" src="{{ asset('imgs/wordlogo.png') }}" alt="">    
                  {{-- card title --}}
            <h5 class="mt-1" >lab-laravel-basic</h5>
            </div>

         <div>    
            {{-- three dots drop down --}}
                    <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                
                    <div class="dropdown-menu" role="menu">
                        <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i> suprimmer</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i> télecharger</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i> modify</a>
                      </div>
            </div>
        </div>



        {{-- card body --}}
        <div class="card-body p-2">
            <img src="{{asset('imgs/rapport3.png')}}" style="border-radius: 3px" width="100%" >
            
        </div>

        {{-- card footer --}}
        <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>

    </div>
</div>




</div>




@endsection