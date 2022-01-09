@extends('adminlte::page')
@section('title-block') Урок №1 @endsection
@section('content')
 <div class="container align-content-center">
     <div class=" mt-4 align-content-center">
     <h3 class="text-center">Урок №1</h3>
         <div class="row">
             <div id="player"></div>
         </div>
         <div class="row">
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

         </div>
     </div>
 </div>

     <script>
         // 2. This code loads the IFrame Player API code asynchronously.
         var tag = document.createElement('script');

         tag.src = "https://www.youtube.com/iframe_api";
         var firstScriptTag = document.getElementsByTagName('script')[0];
         firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

         // 3. This function creates an <iframe> (and YouTube player)
         //    after the API code downloads.
         var player;
         function onYouTubeIframeAPIReady() {
             player = new YT.Player('player', {
                 height: '360',
                 width: '640',
                 videoId: 'M7lc1UVf-VE',

             });
         }

         // 4. The API will call this function when the video player is ready.
         function onPlayerReady(event) {
             event.target.playVideo();
         }

         // 5. The API calls this function when the player's state changes.
         //    The function indicates that when playing a video (state=1),
         //    the player should play for six seconds and then stop.
         var done = false;
         function onPlayerStateChange(event) {
             if (event.data == YT.PlayerState.PLAYING && !done) {
                 setTimeout(stopVideo, 6000);
                 done = true;
             }
         }
         function stopVideo() {
             player.stopVideo();
         }
     </script>
@endsection
