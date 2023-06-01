<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/jpg" href="https://cdn-icons-png.flaticon.com/512/1/1905.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DURABLOG</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link href="/ckeditor/ckeditor.css" rel="stylesheet">
</head>

<body class="font-sans overflow-auto">
  <div id="main-container">
    {{$message??false}}
    <x-navbar />
    {{$slot}}
    <x-footer />
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  {{-- <script src="/ckeditor/ckeditor.js"></script> --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
      .create( document.querySelector( '.editor' ), {
        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
      } )
      .then( editor => {
        window.editor = editor;
      } )
      .catch( err => {
        console.error( err.stack );
      } );
  </script>

</body>

</html>