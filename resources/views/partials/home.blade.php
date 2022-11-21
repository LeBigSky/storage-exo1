<section>
  <div class="continer d-flex justify-content-around">
    @foreach ($images as $image )
  <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $image->name }}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="show/{{ $image->id }}" class="btn btn-primary">Afficher Image</a>
        </div>
      </div>
@endforeach
  </div>
</section>