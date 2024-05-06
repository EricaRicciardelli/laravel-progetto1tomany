<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica la tua ricetta</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('food.update', compact('food'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="name" name="nome" aria-describedby="emailHelp" value="{{$food->name}}">
                      @error('nome')
                          <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Descrizione</label>
                      <textarea class="form-control" id="description" name="descrizione">{{$food->description}}</textarea>
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
                    <button type="submit" class="btn btn-primary">Modifica</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>