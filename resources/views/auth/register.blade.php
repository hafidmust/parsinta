<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                    <div class="text-danger mt">
                                        {{$message}}
                                    </div>
                                @enderror
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" value="{{old('username')}}" class="form-control">
                                @error('username')
                                    <div class="text-danger mt">
                                        {{$message}}
                                    </div>
                                @enderror

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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>