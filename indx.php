<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="mx-4 my-4 p-4">
    <form method="post" enctype="multipart/form-data">
    <h2>File Upload</h2>
    <br>
    <div>
        <label for="formFileLg" class="form-label f-5">Upload Your File here</label>
        <input class="form-control form-control-lg" name="input_file" id="formFileLg" type="file">
    </div>
    <button type="submit" name="Submit" class="btn btn-outline-primary my-3">Submit</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </form>
</body>
</html>
<?php
  if(isset($_POST['Submit'])){
    $path = 'uploads/';
    $path = $path . basename($_FILES['input_file']['name']);

    $allow_Ext = [
      'png',
      'jpg',
      'jpeg'
    ];
    
    $File_Exist = pathinfo($_FILES['input_file']['name'], PATHINFO_EXTENSION);


    if(!file_exists($_FILES['input_file']['tmp_name'])){
      echo '<div class="alert alert-danger" role="alert">
      Please select file to upload
    </div>';
    
  }else if(!in_array($File_Exist,$allow_Ext)){
      echo '<div class="alert alert-danger" role="alert">
      upload valid Images only like png, jpg, jpeg
    </div>';

    }
    else{
      if(move_uploaded_file($_FILES['input_file']['tmp_name'], $path)){
        echo '<div class="alert alert-primary" role="alert">
        Your file is uploaded successfully
        </div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">
        File Upload is fail
      </div>';
      }
    }

    
    // echo "<pre>";
    // print_r($_FILES['input_file']);
  }
?>