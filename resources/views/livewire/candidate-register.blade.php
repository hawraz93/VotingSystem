<div>
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
            <input wire:model='number' type="text" class="form-control"  name="number" old="number" >
            <div>
                @error('number')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary mt-2">تۆمارکردن</button>

        </div>
    </form>
</div>
