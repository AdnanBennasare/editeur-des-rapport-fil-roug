<!-- need to remove -->
<li class="nav-item">
    <a href="{{route('presentations.index')}}" class="nav-link">
        <img class="mr-2" width="15px" height="15px" src="{{ asset('imgs/slidelogo.png') }}" alt=""> 
        <p>Présentations</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('rapports.index')}}" class="nav-link">
        <img class="mr-2" width="17px" height="17px" src="{{ asset('imgs/wordlogo.png') }}" alt=""> 
        <p>Rapports</p>
    </a>
</li>

<li class="nav-item">


    <a href="{{route('rapports.index')}}" class="nav-link">
        <img class="mr-2" width="17px" height="17px" src="{{ asset('imgs/images.png') }}" alt=""> 
        <p>Images</p>     
        <i class="fas fa-angle-left right mt-1"></i>

    </a>
    
    <ul class="nav nav-treeview">



          


            <form action="" class="pl-1" method="post" enctype="multipart/form-data" id="importForm">
                @csrf 
                <input type="file" name="projects" id="formFileInput" style="position: absolute; left: -9999px;">
                <a class="btn col-md-11 mt-2 ml-2" href="" style="background-color:#8b3dff; outline: none;)">
                    Upload <img width="25px" height="23px"  class="mr-2"src="{{asset('imgs/upload.png')}}" alt=""> </i>
                </a>
            </form>

        <div class="ml-1 mt-2"><a>utilisés recemmnet</a></div>

        <div class="d-flex justify-content-center mt-2 ml-1">
            <div>
                <img width="105px" height="70px"  class="mr-2"src="{{asset('imgs/diagramme-de-classes.jpg')}}" alt="">

              </div>

              <div>
                <img width="105px" height="70px"  class="mr-2"src="{{asset('imgs/diagramme-de-classes.jpg')}}" alt="">
              </div>


        </div>
   
    </ul>
  </li>




