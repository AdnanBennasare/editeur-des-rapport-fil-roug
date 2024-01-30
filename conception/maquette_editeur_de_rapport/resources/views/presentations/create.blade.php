@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Créer une nouvelle présentation</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="row mx-2">
  <div class="col-md-6 border form-control vh-100 p-2 mb-2">
      <textarea id="markdown" class="w-100 h-100 border-0 p-2"></textarea>
  </div>

  <div class="col-md-6 border mb-2" id="slides">
  </div>
</div>
<style>

.slide{
    margin-top: 7.5px;
}
   </style>
<script>
  const convert = () => {
      const markdown = document.querySelector('#markdown').value;

      
 
      axios.post('/parse', { markdown })
          .then(response => {

              const parsed_markdown = response.data;
              console.log(parsed_markdown);
              const slidesContainer = document.querySelector('#slides');
              const slidesContent = parsed_markdown.split('<hr />');
              
              // console.log(markdown);
              // console.log('hey');


              // console.log(slidesContent);
          
              slidesContainer.innerHTML = '';
         
              slidesContent.forEach((slide, index) => {
                  const slideDiv = document.createElement('div');
                  slideDiv.className = 'slide';                
                  slideDiv.innerHTML = slide.trim();
                  slideDiv.style.height = '50%';
                  slideDiv.style.backgroundColor = '#fcfcfc';
                  slideDiv.style.border = '1px solid #e5e7e8';
                  slideDiv.style.padding = '10px';
                  slideDiv.style.overflowY = "hidden";
                

                  

                  // Add margin-top to each slide except the first one
                  if (index > 0) {
                      slideDiv.style.marginTop = '10px';
                  }

                  slidesContainer.appendChild(slideDiv);
              });
      
         });
          
  };

  const init = () => {
    // setInterval(convert, 2000);
    document.querySelector('#markdown').addEventListener('input', convert);
  };

  init();
</script>

@endsection
