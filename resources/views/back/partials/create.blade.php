<section>
    
    <div class="container ">
      <h1>Create </h1>
    <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data"
    class="mt-5">
    @csrf
    <div class="d-flex flex-column gap-3">
      <label for="name">Nom de l'image</label>
    <input type="text" name="name">
    <label for="src">Nom de l'image</label>
    <input type="file" name="src">
  <button type="submit">Add image</button>
    </div>
    
    </form>
    </div>
    
  
</section>