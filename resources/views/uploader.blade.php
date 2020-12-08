<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>uploader</title>
  <style>
    .global-container{
      width: 402px;
      height: 469px;
      margin: 0 auto;

      background: #FFFFFF;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
    }
    .test{
      color: red;
    }
  </style>
</head>
<body>
  <div class="global-container">

    <h1 class="page-title">Upload your image</h1>
    <p>File should be Jpeg, Png,...</p>

    <div class="upload-space"> 
      <p>Drag & Drop your image here</p>
    </div>

    <p class="test">Or</p>

    <button type="button">Choose a file</button>
  </div>

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>