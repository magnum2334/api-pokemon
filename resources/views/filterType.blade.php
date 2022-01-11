<div class="row" >   
    <div class="col-12 card">
        <div class="card-body text-center ">
            <label class="font fs-4">filter type</label>
            <form action="{{ $url }}" method="POST">
                @method($method)
                @csrf
                <div class="form-group"> 
                    <div class="d-flex justify-content-center align-items-center ">
                        <div class="mx-3">
                            <select name="type" id="type">
                                <option value="normal">normal</option>
                                <option value="fighting">fighting</option>
                                <option value="flying">flying</option>
                                <option value="poison">poison</option>
                                <option value="ground">ground</option>
                                <option value="rock">rock</option>
                                <option value="bug">bug</option>
                                <option value="ghost">ghost</option>
                                <option value="steel">steel</option>
                                <option value="fire">fire</option>
                                <option value="water">water</option>
                                <option value="grass">grass</option>
                                <option value="electric">electric</option>
                                <option value="psychic">psychic</option>
                                <option value="ice">ice</option>
                                <option value="dragon">dragon</option>
                                <option value="dark">dark</option>
                                <option value="fairy">fairy</option>
                            </select>
                        </div>
                        <button type="submit" class="my-3 btn btn-success" ><i class="fas fa-search"></i></button> 
                    </div>
                    {{-- validaciones --}}
                    @error('type')
                        <div class="alert alert-danger">{{ $message }} </div>
                    @enderror
                </div>
            </form>         
        </div>
    </div>
</div>