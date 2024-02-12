@extends('layouts.app')
@section('content')


<div class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0">accueil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('rapports.index')}}">accueil</a></li>
            <li class="breadcrumb-item active">Rapports</li>
            </ol>
          </div>

      </div>
  </div>
</div><!-- /.content-header -->


<!--------------------------- Manage Cards ---------------------->
<div class="row mb-2 mx-2 justify-content-between">


<!------- Ajouter div -------->
  <div class="col-md-4">
          <a class="btn btn-primary col-md-12" href="{{route('rapports.create')}}">
              Nouveau Rapport <i class="fa-solid fa-plus ml-4"></i> </i>
          </a>
  </div><!-- /.ajouter div -->



<!------- filter div date  -------->
<div class="col-md-4">
  <div class="form-group col-md-12">
  <select class="form-control col-md-12">
      <option>Date de modification</option>
  </select>
 </div>
</div><!------- ./filter div date  -------->

  
<!------- filter div date  -------->
  <div class="col-md-4">
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                  class="fa-solid fa-magnifying-glass"></i></button>
      </div>
  </div><!-- /.filter div date -->



</div><!---- /.Manage Cards ---->




<!------- all the slides  -------->
<div class="row mx-2 mt-4 row_slides">


   @foreach ($rapports as $rapport)
      
  


    <div class="col-md-3">




        <div class="card shadow-lg" id="slide_card">

            <div class="d-flex justify-content-between mt-2">         
                <div class="d-flex justify-content-between  ml-3">   
        
                    <img class="mr-2" width="16px" height="16px" style="margin-top: 10px" src="{{ asset('imgs/wordlogo.png') }}" alt="">    
   
                <h5 class="mt-1" >{{$rapport->title}}</h5>
                </div>

   
                <div class="dropdown dropleft">
                  <a class="btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                  </a>
                  <div class="dropdown-menu ">
                      <a href="#" class="dropdown-item">
                          <i class="fa-regular fa-trash-can cards_icons"></i> supprimer
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <i class="fa-solid fa-arrow-down cards_icons"></i> télécharger
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{route('rapports.edit', $rapport->id)}}" class="dropdown-item">
                          <i class="fa-solid fa-pen cards_icons"></i> modifier
                      </a>
                  </div>
              </div>
              
            </div>

    

            {{-- card body --}}
    <a href="{{route('rapports.show', $rapport->id)}}">

            <div class="card-body p-2">
                <div class="thumbnail">
                    {!! \Illuminate\Support\Str::of($rapport->content)->markdown() !!}
                    
                </div>  
             
            </div>
          </a>

            {{-- card footer --}}
            <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>
    
        </div>
    </div>








   @endforeach

    


</div>



@endsection
