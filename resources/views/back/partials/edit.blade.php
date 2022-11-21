<section>
    <div class="container ">
        <h1>Edit </h1>
        <form action="../update/{{ $image->id }}" method="POST" enctype="multipart/form-data" class="mt-5">
            @csrf
            <div class="d-flex flex-column gap-3">
                <label for="name">Nom de l'image</label>
                <input type="text" name="name" >
                <label for="src">Browse image</label>
                <input type="file" name="src">
                <label for="image">Image link</label>
                <input type="text" name="image">
                <button type="submit">Edit image</button>
            </div>
        </form>
    </div>
</section>