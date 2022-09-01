<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="mb-4">

                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                                @error('email')
                                    <div class="text-danger mt">
                                        {{$message}}
                                    </div>
                                @enderror
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                    <div class="text-danger mt">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="submit" value="Register" class="btn btn-primary">
                                <a href="{{url('auth/google')}}">Login Google</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>