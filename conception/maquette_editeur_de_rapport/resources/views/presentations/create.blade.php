@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Créer une nouvelle présentation</h1>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row mb-1">
          <div class="col-md-2">
            <input type="text" class="form-control" placeholder="Nom de présentation" style="height: 36px;">
           
          </div>
         
          <!-- /.col -->
        </div>

        <div class="row mt-1">
            <div class="col-md-9">
                <p class="mt-2">écrite une markdown pour vous présentation</p>
            </div>
            <div class="col-md-3">
                <a type="button" href="create.presentation.html" class="btn btn-block bg-gradient-warning"><i class="fa-solid fa-floppy-disk"></i> Enregistrer</a>
            </div>
          </div>
            <!-- /.col -->
          </div>
</div>



<div class="row mx-2">
    <div class="markdown_div col-md-12">

        <textarea name="" id="markdown"></textarea>
    </div>

</div>






<script>
    var simplemde = new SimpleMDE({ element: document.getElementById("markdown") });
</script>
    






@endsection
