@extends('layouts.app')

@section('content')


<form method="post" action="{{route('rapports.store')}}" id="mardown_form">
  @csrf
<div class="content-header">
    <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Créer une nouvelle rapport</h1>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      
        <div class="row mb-1">
          <div class="col-md-2">
            <input type="text" value="{{old('rapport_title')}}" class="form-control" name="rapport_title" placeholder="Nom de rapport" style="height: 36px;">
            <div style="color:red">
              @error("rapport_title")
              {{$message}}
              @enderror
              </div>
          </div>
          <!-- /.col -->
        </div>

        <div class="row mt-1">
            <div class="col-md-9">
                <p class="mt-2">écrite une markdown pour vous présentation</p>
            </div>
        </div>

            <!-- /.col -->
          </div>
</div>



<div class="row mx-2">


  <div class="markdown_div col-md-12">
      <textarea name="rapport_markdown"  id="markdown">{{ old('rapport_markdown') }}</textarea>
  </div>



  <input type="text" name="owner_id" value="1" >


 
</div>

<div class="col-md-3 ml-2 mb-5">
  <button class="btn btn-block bg-gradient-primary">Enregistrer <i class="fa-solid fa-floppy-disk ml-4"></i></button>
</div>

</form>





<script>
    var simplemde = new SimpleMDE({ element: document.getElementById("markdown") });


    function replaceImageUrls(content) {
  return content.replace(/<img src="([^"]+)">/g, (match, originalUrl) => {
    // Escape originalUrl for path safety
    const escapedUrl = encodeURIComponent(originalUrl);
    return `<img src="{{ asset("imgs") }}/${escapedUrl}">`;
  });
}

const editor = document.querySelector('.editor-preview-side');
editor.addEventListener('input', () => {
  const updatedContent = replaceImageUrls(editor.value);
  // Update your preview or render the modified content
});

</script>



    








<script>


</script>
@endsection
