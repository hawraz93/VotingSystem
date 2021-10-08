<div class='row form-row'>
        <div class="mt-3 card col-md ">
        <h5 class="card-header text-primary">تۆمارکردنی کاندیدەکان </h5>
        <div class="card-body">
    <form wire:submit.prevent='candidate_register'>

        <div class="mt-2">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="col-md-6">
            <label for="prefectures">پارێزگا</label>
            <select wire:model='selectPrefecture' type="text" class="form-control" id="prefectures">
                <option selected value="">هەڵبژاردنی پارێزگا</option>
                @foreach ($prefectuers_1 as $pre)
                <option value="{{ $pre->id }}"> {{ $pre->Pre_name }}</option>
                @endforeach
            </select>


            <label for="circle">بازنە</label>
            <select wire:model='selectCircle' type="text" class="form-control" id="circle">

                <option selected value="">هەڵبژاردنی بەزنە</option>
                @foreach ($circles_1 as $name)
                <option value="{{ $name->id }}"> {{ $name->Cir_name }}</option>
                @endforeach
            </select>

            <label for="">تکایە ناوی کاند بنوسە  </label>
            <input wire:model='Can_name' type="text" class="form-control"  name="Can_name" old="Can_name" >
            <div>
                @error('Can_name')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>

            <label for="">ژمارەی کاندید </label>
            <input wire:model='number' type="number " class="form-control"  name="number" old="number" >
            <div>
                @error('number')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <button class="mt-2 btn btn-primary">تۆمارکردن</button>

        </div>
    </form>
</div>
</div>
    <div class="mt-3 mr-2 card col-md ">
        
            <h5 class="card-header text-primary">کاندیدەکان </h3>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">پارێزگا </th>
                            <th scope="col">بازنە  </th>
                            <th scope="col"> کاندید</th>
                            <th scope="col">کردار </th>
                        </tr>
                    </thead>
                    @foreach ($candidates as $item)
                    <tr>
                        <th scope="row">#</th>
                        <th> {{ $item->candidPre->Pre_name }}</th>
                        <th>{{ $item->candidCir->Cir_name }}</th>
                        <th>{{ $item->Can_name }}</th>
                  
                        <th><div class="text-center btn btn-danger btn-sm"
                            wire:click='deletePoll({{ $item->id }})'>سڕینەوە</div></th>
                    </tr>
                    @endforeach
                    </table>
                            
                </div>
    


    </div>
</div>
