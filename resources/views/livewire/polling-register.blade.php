<div>

<div class="row form-row">
    <div class="mt-3 mr-2 card col-md">
        <h5 class="card-header text-primary">تۆمارکردنی بنکەکانی دەنگدان</h5>
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
        <h5 class="card-header text-primary"> بنکەکانی دەنگدان</h5>
        <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">پارێزگا </th>
                <th scope="col">بازنە  </th>
                <th scope="col">گەڕەك </th>
                <th scope="col">بنکە </th>
                <th scope="col">کردار </th>
            </tr>
        </thead>
        @foreach ($pollingCenters as $item)
        <tr>
            <th scope="row">#</th>
            <th> {{ $item->pollpre->Pre_name }}</th>
            <th>{{ $item->pollcir->Cir_name }}</th>
            <th>{{ $item->pollReg->Reg_name }}</th>
            <th>{{ $item->Pol_name}}</th>
            <th><div class="text-center btn btn-danger btn-sm"
                wire:click='deletePoll({{ $item->id }})'>سڕینەوە</div></th>
        </tr>
        @endforeach
        </table>

    </div>
    </div>
    </div>
    </div>
