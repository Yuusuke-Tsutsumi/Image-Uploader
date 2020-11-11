<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>uploader</title>
</head>
<body>
  <div class="global-container">

    <h1>Upload your image</h1>
    <p>File should be Jpeg, Png,...</p>

    <div class="upload-space"> 
      <p>Drag & Drop your image here</p>
    </div>

    <p>Or</p>

    <button type="button">Choose a file</button>
  </div>

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>