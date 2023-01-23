

<form method="POST" action="{{route('movies.store')}}">
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