<x-app-layout>
    
</x-app-layout>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @include('tasks._create')
        </div>
        <div class="col-md-6">
            {{-- get bisa --}}
            <form action="{{route('tasks.index')}}" method="get">
                {{-- @csrf --}}
                <input type="text" name="search" class="form-control" placeholder="Cari task">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>



<ol class="list-group mt-4">
    @foreach ($tasks as $index => $task)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$index+1}} - {{$task->list}}
            <div class="d-flex">
            <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-primary me-2">edit</a>
            <form action="{{route('tasks.destroy',$task->id)}}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="hapus" class="btn btn-danger">
            
            </form>
            </div>
        </li>
    @endforeach
</ol>
</div>