<div class="row">   
    <div class="col-8 card my-3">
        <div class="card-body  ">
            <form action="{{ $url }}" method="POST">
                @method($method)
                @csrf
                <div class="form-group"> 
                    <label class="form-label">{{ __('name or pokemon id')}}</label>
                    <input class="form-control" type="text-area" name="name" id="name" required @error('name') is-invalid @enderror  class="form-control my-2 rounded-lg" placeholder="{{ __('name or pokemon id')}}" >
                   
                    {{-- validaciones --}}
                    @error('name')
                        <div class="alert alert-danger">{{ $message }} </div>
                    @enderror

                </div>
                <button type="submit" class="my-3 btn btn-success" >{{ __('Send player')}}</button>
            </form>         
        </div>
    </div>
</div>