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
                    <li class="breadcrumb-item"><a href="{{route('presentations.index')}}">accueil</a></li>
                    <li class="breadcrumb-item active">Présentations</li>
                    </ol>
                  </div>
        
                

            </div>
        </div>
    </div><!-- /.content-header -->


    <!--------------------------- Manage Cards ---------------------->
    <div class="row mb-2 mx-2 justify-content-between">


    <!------- Ajouter div -------->
        <div class="col-md-4">

            <!--------- dropdown button ----------->
                <a class="btn btn-warning col-md-12" href="{{route('presentations.create')}}">
                    Nouveau Présentation <i class="fa-solid fa-plus ml-4"></i> </i>
                </a>
                <!-- ./dropdown button -->
    
        </div><!-- /.ajouter div -->



    {{-- filter div date --}}
    <div class="col-md-4">
        <div class="form-group col-md-12">
        <select class="form-control col-md-12">
            <option>Date de modification</option>
        </select>

       </div>

    </div>

        
        <!-- search div -->
        <div class="col-md-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div><!-- /.search div -->



      

    </div><!-- /.Manage Cards -->













    <div class="row mx-2 mt-4 row_slides">


        {{-- card lab-github --}}
        <div class="col-md-3">
            <div class="card shadow-lg" id="slide_card">

                {{-- card header --}}
                <div class="d-flex justify-content-between mt-2">
                    <div class="d-flex justify-content-between  ml-3">
                        {{-- card logo --}}
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">Lab-github</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i> modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/lab-github.jpg') }}" style="border-radius: 3px" width="100%">

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
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">diagramme-de-classes</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i>
                                modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/diagramme-de-classes.jpg') }}" style="border-radius: 3px" width="100%">

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
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">lab-laravel-basic</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i>
                                modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/lab-laravel-basic.jpg') }}" style="border-radius: 3px" width="100%">

                </div>

                {{-- card footer --}}
                <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>

            </div>
        </div>



        {{-- card prototype --}}
        <div class="col-md-3">
            <div class="card shadow-lg" id="slide_card">

                {{-- card header --}}
                <div class="d-flex justify-content-between mt-2">
                    <div class="d-flex justify-content-between  ml-3">
                        {{-- card logo --}}
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">prototype</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i>
                                modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/prototype.jpg') }}" style="border-radius: 3px" width="100%">

                </div>

                {{-- card footer --}}
                <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>

            </div>
        </div>


    </div>



    <div class="row mx-2 mt-4 row_slides">

        {{-- card crud laravel basic --}}
        <div class="col-md-3">
            <div class="card shadow-lg" id="slide_card">

                {{-- card header --}}
                <div class="d-flex justify-content-between mt-2">
                    <div class="d-flex justify-content-between  ml-3">
                        {{-- card logo --}}
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">lab-laravel-basic</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i>
                                modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/lab-laravel-basic.jpg') }}" style="border-radius: 3px" width="100%">

                </div>

                {{-- card footer --}}
                <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>

            </div>
        </div>



        {{-- card prototype --}}
        <div class="col-md-3">
            <div class="card shadow-lg" id="slide_card">

                {{-- card header --}}
                <div class="d-flex justify-content-between mt-2">
                    <div class="d-flex justify-content-between  ml-3">
                        {{-- card logo --}}
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">prototype</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i>
                                modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/prototype.jpg') }}" style="border-radius: 3px" width="100%">

                </div>

                {{-- card footer --}}
                <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>

            </div>
        </div>

        {{-- card lab-github --}}
        <div class="col-md-3">
            <div class="card shadow-lg" id="slide_card">

                {{-- card header --}}
                <div class="d-flex justify-content-between mt-2">
                    <div class="d-flex justify-content-between  ml-3">
                        {{-- card logo --}}
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">Lab-github</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i>
                                modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/lab-github.jpg') }}" style="border-radius: 3px" width="100%">

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
                        <img class="mr-2" width="15px" height="15px" style="margin-top: 10px"
                            src="{{ asset('imgs/slidelogo.png') }}" alt="">
                        {{-- card title --}}
                        <h5 class="mt-1">diagramme-de-classes</h5>
                    </div>

                    <div>
                        {{-- three dots drop down --}}
                        <div class="btn dropdown-toggle" data-toggle="dropdown" data-offset="-52"><i
                                class="fa-solid fa-ellipsis-vertical"></i></div>

                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can cards_icons"></i>
                                suprimmer</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-down cards_icons"></i>
                                télecharger</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-pen cards_icons"></i>
                                modify</a>
                        </div>
                    </div>
                </div>



                {{-- card body --}}
                <div class="card-body p-2">
                    <img src="{{ asset('imgs/diagramme-de-classes.jpg') }}" style="border-radius: 3px" width="100%">

                </div>

                {{-- card footer --}}
                <h6 style="font-size: 12px" class="pl-3 mt-1 mb-3">Crée par vous <strong>19 janv 2024</strong></h6>

            </div>
        </div>

    </div>




@endsection
