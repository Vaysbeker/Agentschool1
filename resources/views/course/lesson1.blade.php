@extends('layouts.User.appuser')
@section('title-block') Урок №1 @endsection
@section('content')
 <div class="container align-content-center">
     <div class=" mt-4 align-content-center">
     <h3 class="text-center">Урок №1</h3>
         <div class="card card-outline card-info">
             <div class="card-header">
                 <h3 class="card-title">
                     Редакто текстовой части
                 </h3>
             </div>
             <div id="summernote"></div>
             <script>
                 $('#summernote').summernote({
                     placeholder: 'Hello Bootstrap 4',
                     tabsize: 3,
                     height: 100
                 });
             </script>

         <iframe width="800" height="640" src="https://www.youtube.com/embed/9MikhbORfXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
 </div>


@endsection
