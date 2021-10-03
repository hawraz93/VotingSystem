<div>
    <form wire:submit.prevent='polling_register'>
        <div class="mt-2">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="col-md-6">
            <label for="prefectuers">Prefectuers</label>
            <select wire:model='selectPrefecture' type="text" class="form-control" id="prefectuers">
                <option selected value="">Select Governorate</option>
                @foreach ($prefectures as $name)
                <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                </option>
                @endforeach
            </select>

            <label for="circle">Circle</label>
            <select wire:model='selectCircle' type="text" class="form-control" id="circle">

                <option selected value="">Select Circle</option>

                @foreach ($circles_1 as $name)
                <option value="{{ $name->id }}"> {{ $name->Cir_name }}</option>
                @endforeach
            </select>


            <label for="registration">Registeration Scole</label>
            <select wire:model='selectReg' type="text" class="form-control" id="registration">

                <option selected value="">Select Circle</option>

                @foreach ($REG_centers as $name)
                <option value="{{ $name->id }}"> {{ $name->Reg_name }}</option>
                @endforeach
            </select>

            <label for="">Polling Centre name</label>
            <input wire:model='Pol_name' type="text" class="form-control">
            <div>
                @error('Pol_name')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary mt-2">Submit</button>

        </div>
    </form>
</div>
