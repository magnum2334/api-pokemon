<div class="row" >   
    <div class="col-12 card">
        <div class="card-body text-center ">
            <label class="font fs-4">search pokemon</label>
            <form action="{{ $url }}" method="POST">
                @method($method)
                @csrf
                <div class="form-group"> 
                    
                    <div class="d-flex justify-content-center align-items-center ">
                        <div class="mx-3">
                            <input class="form-control" type="text" name="name" id="name" required @error('name') is-invalid @enderror  class="form-control my-2 rounded-lg" placeholder="{{ __('name or pokemon id')}}" >
                        </div>
                        <button type="submit" class="my-3 btn btn-success" ><i class="fas fa-search"></i></button> 
                    </div>
                    {{-- validaciones --}}
                    @error('name')
                        <div class="alert alert-danger">{{ $message }} </div>
                    @enderror
                </div>
            </form>         
        </div>
    </div>
</div>