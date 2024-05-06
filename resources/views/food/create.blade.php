<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Inserisci la tua ricetta</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('food.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="name" name="nome" aria-describedby="emailHelp" value="{{old('nome')}}">
                      @error('nome')
                          <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Descrizione</label>
                      <textarea class="form-control" id="description" name="descrizione">{{old('descrizione')}}</textarea>
                      @error('descrizione')
                          <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="img" class="form-label">Immagine</label>
                      <input type="file" class="form-control" id="img" name="immagine">
                      @error('immagine')
                          <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Seleziona la categoria</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>