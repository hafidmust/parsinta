<x-app-layout>
    
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if (session()->has('success'))

                            <div class="alert alert-success" role="alert">
                                {{session()->get('success')}}    
                            </div>
                        @endif
                    <div class="card">
                        
                        <div class="card-header">Welcome</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti rerum libero, dolor sunt sequi natus animi in eligendi harum voluptate voluptatum totam, quidem cumque tempora nostrum cum sapiente, dolore blanditiis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, ut harum voluptatum sint quo nihil quasi quaerat consequuntur modi consequatur tenetur quisquam, totam eum neque unde minus? Odit, natus repellendus!</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>