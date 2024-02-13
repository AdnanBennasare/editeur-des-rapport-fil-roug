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

        <form action="{{ route('images.storeImage') }}" class="pl-1" method="post" enctype="multipart/form-data" id="importForm">
            @csrf
            <input type="file" name="images" id="formFileInput" style="display: none;">
            <button type="submit" class="btn col-md-11 mt-2 ml-2 text-white" href="#" id="fileButton" style="background-color:#8b3dff; outline: none;">
                Upload <img width="25px" height="23px" class="mr-2" src="{{ asset('imgs/upload.png') }}" alt="">
            </button>
        </form>
        
        

        <div class="ml-1 mt-2"><a>utilisés récemment</a></div>


        <div class="d-flex justify-content-center flex-wrap gap-3 mt-2 ml-1" id="imagesContainer">
        
   
    </ul>
  </li>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 



  <script>
 $(document).ready(function() {
    $('#fileButton').click(function(e) {
        e.preventDefault();
        $('#formFileInput').click();
    });

    $('#formFileInput').change(function() {
        // Assuming you want to submit the form when a file is selected
        $('#importForm').submit();
    });
});


    // Fetch images data from the controller
    $.ajax({
        url: '{{ route("images.index") }}',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var images = response.images;
            // Iterate over images and append them to the container
            images.forEach(function(image) {
                var imageUrl = '{{ asset("imgs") }}/' + image.filename;
                $('#imagesContainer').append('<div><img width="105px" height="70px" class="mr-2 mt-2" src="' + imageUrl + '" alt=""></div>');
            });
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });








    </script>