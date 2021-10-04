<div>

        <form wire:submit.prevent='voteRegister'>
            <div class="mt-2">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            <div class="row">
            <div class="col-md-4 mt-2  ">
                <label for="prefectuers" class="form-label" >پارێزگا</label>
                <select wire:model='selectPrefecture' type="text" class="form-control" id="prefectuers">
                    <option selected value="">پارێزگاکەت دیاری بکە </option>
                    @foreach ($prefectures as $name)
                    <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                    </option>
                    @endforeach
                </select>
            </div>

                <div class="col-md-4 mt-2">
                <label class="mb-0" for="circle" class="form-label">بازنە</label>
                <select wire:model='selectCircle' type="text" class="form-control" id="circle">
                    <option selected value="">بەزنەکەت دیاری بکە</option>
                    @foreach ($circles as $name)
                    <option value="{{ $name->id }}"> {{ $name->Cir_name }}</option>
                    @endforeach
                </select>
                </div>

                <div class="col-md-4 mt-2">
                    <label class="mb-0" for="registration" class="form-label"> کاندید </label>
                    <select wire:model='selectcandid' type="text" class="form-control" id="registration">
                        <option selected value="">هەڵبژاردنی کاندید</option>
                        @foreach ($candids as $name)
                        <option value="{{ $name->id }}"> {{ $name->Can_name }} {{ $name->number }}</option>
                        @endforeach
                    </select>
                    </div>

                <div class="col-md-4 mt-2">
                <label class="mb-0" for="registration" class="form-label"> گەڕەک</label>
                <select wire:model='selectReg' type="text" class="form-control" id="registration">
                    <option selected value="">دیاری کردنی گەڕەک</option>
                    @foreach ($REG_centers as $name)
                    <option value="{{ $name->id }}"> {{ $name->Reg_name }}</option>
                    @endforeach
                </select>
                </div>

                <div class="col-md-4 mt-2">
                <label class="mb-0" for="registration" class="form-label"> بنکەی دەنگدان </label>
                <select wire:model='selectpolling' type="text" class="form-control" id="registration">
                    <option selected value="">هەڵبژاردنی بنکەی دەنگدان</option>
                    @foreach ($poll_centers as $name)
                    <option value="{{ $name->id }}"> {{ $name->Pol_name }}</option>
                    @endforeach
                </select>
                </div>


                <div class="col-md-4 mt-2">
                <label class="mb-0" for="" class="form-label">ژمارەی دەنگ </label>
                <input wire:model='voteNum' type="text" class="form-control">
                <div>
                    @error('voteNum')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary mt-2">تۆمارکردن</button>

            </div>
            </div>
        </form>
    </div>

