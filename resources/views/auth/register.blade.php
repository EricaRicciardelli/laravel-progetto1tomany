<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                      <label for="password_confirmation" class="form-label">Password confirmation</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>