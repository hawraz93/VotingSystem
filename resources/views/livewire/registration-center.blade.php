<div>
    <form wire:submit.prevent='reg_register'>
        <div class="mt-2">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="col-md">

            <label for="prefectuers">پارێزگا</label>
            <select wire:model='selectPrefecture' type="text" class="form-control" id="prefectuers">
                <option selected value="">دیاری کردنی پارێزگا</option>
                @foreach ($prefectures as $name)
                <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                </option>
                @endforeach
            </select>


            <label for="circle">بازنە</label>
            <select wire:model='selectCircle' type="text" class="form-control" id="circle">

                <option selected value="">هەڵبژاردنی بازنە</option>
                @foreach ($circles as $name)
                <option value="{{ $name->id }}"> {{ $name->Cir_name }}</option>
                @endforeach
            </select>

            <label for="">گەڕەک </label>
            <input wire:model='Reg_name' type="text" class="form-control"  name="Reg_name" old="Reg_name" >
            <div>
                @error('Reg_name')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary mt-2">تۆمارکردن</button>

        </div>
    </form></div>
