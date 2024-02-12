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
            <input type="text" class="form-control" name="rapport_title" value="{{ $rapport->title }}" placeholder="Nom de rapport">
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

      <textarea name="rapport_markdown" id="markdown">{{$rapport->content}}</textarea>
  </div>



  <input type="text" name="owner_id" value="1" >


 
</div>

<div class="col-md-3 ml-2 mb-5">
  <button class="btn btn-block bg-gradient-primary">Enregistrer <i class="fa-solid fa-floppy-disk ml-4"></i></button>
</div>

</form>





<script>
    var simplemde = new SimpleMDE({ element: document.getElementById("markdown") });
</script>
    








<script>


</script>
@endsection
