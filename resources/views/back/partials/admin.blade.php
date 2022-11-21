<section>
    <div class="container ">
      <div class="my-5">
        <a href="{{ route('create') }}"><button>Create</button></a>
      </div>
      <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">Image</th>
              <th scope="col">Nom</th>
              <th scope="col">Description</th>
              <th scope="col">supprimer</th>
              <th scope="col">editer</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($images as $image )
               <tr>
                @if ($image->src == null)
                <td><img src="{{ $image->image }}" width="150px" height="150px" alt=""></td>
                @else
                <td><img src="{{ asset('storage/'.$image->src) }}" width="150px" height="150px" alt=""></td>
                @endif
              <td>{{ $image->name }}</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium tempore atque corrupti reprehenderit id provident.</td>
              <form action="delete/{{ $image->id }}" method="POST">
              @csrf
              @method('DELETE')
              <td><button type="submit" class="btn btn-danger">Delete</button></a></td>
              </form>
              <td><a href="edit/{{ $image->id }}"><button class="btn btn-warning">Edit</button></a></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>

  </section>