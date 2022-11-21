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
            </tr>
          </thead>
          <tbody>
            @foreach ($images as $image )
               <tr>
              <td><img src="{{ asset('storage/'.$image->src) }}" width="150px" height="150px" alt=""></td>
              <td>{{ $image->name }}</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium tempore atque corrupti reprehenderit id provident.</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
      
  </section>