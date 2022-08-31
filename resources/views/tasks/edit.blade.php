<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Edit Task</h1>
    <form action="/tasks/{{$task->id}}" method="post">
    @csrf
    @method('put')
    @include('tasks._form')
</form>
            </div>
        </div>
    </div>
</x-app-layout>
