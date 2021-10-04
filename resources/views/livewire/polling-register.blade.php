<div>

<div class="row form-row">
    <div class="mt-3 mr-2 card col-md">
        <h5 class="card-header">تۆمارکردنی بنکەکانی دەنگدان</h5>
        <div class="card-body">
    <form wire:submit.prevent='polling_register'>
        <div class="mt-2">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="col-md-6">
            <label for="prefectuers">پارێزگا</label>
            <select wire:model='selectPrefecture' type="text" class="form-control" id="prefectuers">
                <option selected value="">هەڵبژاردنی پارێزگا</option>
                @foreach ($prefectures as $name)
                <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                </option>
                @endforeach
            </select>

            <label for="circle">بازنە</label>
            <select wire:model='selectCircle' type="text" class="form-control" id="circle">

                <option selected value="">هەڵبژاردنی بازنە</option>

                @foreach ($circles_1 as $name)
                <option value="{{ $name->id }}"> {{ $name->Cir_name }}</option>
                @endforeach
            </select>


            <label for="registration"> هەڵبژاردنی گەڕەک</label>
            <select wire:model='selectReg' type="text" class="form-control" id="registration">

                <option selected value=""> هەڵبژاردنی گەڕەک</option>

                @foreach ($REG_centers as $name)
                <option value="{{ $name->id }}"> {{ $name->Reg_name }}</option>
                @endforeach
            </select>

            <label for="">بنکەی دەنگدان</label>
            <input wire:model='Pol_name' type="text" class="form-control">
            <div>
                @error('Pol_name')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <button class="mt-2 btn btn-primary">تۆمارکردن</button>

        </div>
    </form>
</div>
</div>


    <div class="mt-3 mr-2 card col-md ">
        @foreach ($pollingCenters as $item)
        <div class="mt-1 row form-row col-12">

                <div class="text-center col-4 text-primary ">
                    {{ $item->Pol_name}}
                </div>
                <div class="text-center btn btn-danger btn-sm col-2"
                    wire:click='deletePoll({{ $item->id }})'>سڕینەوە</div>

        </div>
        @endforeach

    </div>
    </div>
    </div>
