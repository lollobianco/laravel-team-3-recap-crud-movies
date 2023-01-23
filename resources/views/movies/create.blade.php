<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <!-- Styles -->
</head>
<body>
  
  <div class="container p-5">
    
    <a href="{{route('home')}}"><button type="submit" class="btn btn-warning">HOME</button></a>

  <form method="POST" class="mt-5" action="{{route('movies.store')}}">
    @csrf


    <div class="mb-3">
      <label  class="form-label"> Titolo</label>
      <input name="title" type="text" class="form-control"  >
    </div>

    
    <div class="mb-3">
        <label  class="form-label">Titolo originale</label>
        <input name="original_title"  type="text" class="form-control"  >
      </div>

      
    <div class="mb-3">
        <label class="form-label">Nazionalità</label>
        <input name="nationality"  type="text" class="form-control">
      </div>

      
     <div class="mb-3">
        <label  class="form-label">Data</label>
        <input name="date"  type="text" class="form-control" >
      </div> 

      
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Voto</label>
        <input name="vote" type="text" class="form-control" >
      </div>
    
    <button name=""  type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

</body>
</html>

