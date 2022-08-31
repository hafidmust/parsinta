<div class="card">
    <div class="card-header">Task</div>
    {{-- {{print_r($errors->all())}} --}}
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="post" class="">
            @csrf
            @include('tasks._form')

        </form>
    </div>

</div>
