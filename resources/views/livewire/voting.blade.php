<div>
    <div class=" row form-row justify-content-center">
        <form wire:submit.prevent='polling_register'>
            <div class="mt-2">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            <div class="col-md-4 mt-2  ">
                <label for="prefectuers">Prefectuers</label>
                <select wire:model='pre_selecte' type="text" class="form-control" id="prefectuers">
                    <option selected value="">Select Governorate</option>
                    @foreach ($prefectures as $name)
                    <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                    </option>
                    @endforeach
                </select>
            </div>

                <div class="col-md-4 mt-2">
                <label class="mb-0" for="circle">Circle</label>
                <select wire:model='selectCircle' type="text" class="form-control" id="circle">
                    <option selected value="">Select Circle</option>
                    @foreach ($circles as $name)
                    <option value="{{ $name->id }}"> {{ $name->Cir_name }}</option>
                    @endforeach
                </select>
                </div>

                <div class="col-md-4 mt-2">
                    <label class="mb-0" for="registration"> Select Candid </label>
                    <select wire:model='selectcandid' type="text" class="form-control" id="registration">
                        <option selected value="">Select Circle</option>
                        @foreach ($candids as $name)
                        <option value="{{ $name->id }}"> {{ $name->Can_name }} {{ $name->number }}</option>
                        @endforeach
                    </select>
                    </div>

                <div class="col-md-4 mt-2">
                <label class="mb-0" for="registration"> Select Neighborhood</label>
                <select wire:model='selectReg' type="text" class="form-control" id="registration">
                    <option selected value="">Select Circle</option>
                    @foreach ($REG_centers as $name)
                    <option value="{{ $name->id }}"> {{ $name->Reg_name }}</option>
                    @endforeach
                </select>
                </div>

                <div class="col-md-4 mt-2">
                <label class="mb-0" for="registration"> Polling stations</label>
                <select wire:model='selectpolling' type="text" class="form-control" id="registration">
                    <option selected value="">Select Circle</option>
                    @foreach ($poll_centers as $name)
                    <option value="{{ $name->id }}"> {{ $name->Pol_name }}</option>
                    @endforeach
                </select>
                </div>


                <div class="col-md-4 mt-2">
                <label class="mb-0" for="">Number of votes</label>
                <input wire:model='voteNum' type="text" class="form-control">
                <div>
                    @error('voteNum')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary mt-2">Submit</button>

            </div>
        </form>
    </div>

</div>
