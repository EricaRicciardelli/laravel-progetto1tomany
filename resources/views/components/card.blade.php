<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($food->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$food->name}}</h5>
      <p class="card-text">{{$food->description}}</p>
      @if ($food->category)
          <a href="{{route('category.foods', ['category'=>$food->category_id])}}">{{$food->category->name}}</a>
          @else
          <p>No category</p>
      @endif
      <a href="{{route('food.show', ["food"=>$food])}}" class="btn btn-primary">Show</a>
      <a href="{{route('food.edit', ["food"=>$food])}}" class="btn btn-primary">Modifica</a>
    <form method="POST" action="{{route('food.destroy', compact('food'))}}">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
    </div>
  </div>