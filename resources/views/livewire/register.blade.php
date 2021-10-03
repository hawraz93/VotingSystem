<div class="row form-row">
    <div class="mt-2">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="card mt-3 col-md mr-2">

        <h5 class="card-header">Prefectuers Register </h5>
        <div class="card-body">
            <form wire:submit.prevent='Prefectuers_register'>
                <div class="col-md">
                    <label for="">Write Prefectuers </label>
                    <input wire:model='Pre_name' type="text" class="form-control" name="Pre_name">
                    <div>
                        @error('Pre_name')
                        <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
              {{-- prefectuer and sircole --}}


    <div class="card mt-3 mr-2 col-md ">
        <h5 class="card-header">Circle Register </h5>
        <div class="card-body">
            <form wire:submit.prevent='circle_register'>
                <div class="col-md">
                    <label for="prefectuers">Prefectuers</label>
                    <select wire:model='pre_selecte' type="text" class="form-control" id="prefectuers">
                        <option selected value="">Select Governorate</option>
                        @foreach ($prefectures as $name)
                        <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                        </option>
                        @endforeach
                    </select>

                    <label for="">Write Circle </label>
                    <input wire:model='Cir_name' type="text" class="form-control">
                    <div>
                        @error('Cir_name')
                        <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-2">Submit</button>
                </div>
            </form>
        </div>
    </div>

                     {{-- end  prefectuer and sircole --}}

                     {{-- Prefectuer and Circle and Registration --}}
    <div class="card mt-3 col-md ">
        <h5 class="card-header">Name Regisrtration center </h5>
        <div class="card-body">
            <livewire:registration-center>
        </div>
    </div>
                         {{-- Prefectuer and Circle and Registration --}}


</div>

<div class="row form-row">
    <div class="card mt-3 col-md mr-2">
        <h5 class="card-header">Polling Register </h5>
        <div class="card-body">
       <livewire:polling-register>
        </div>
    </div>

    <div class="card mt-3 col-md ">
        <h5 class="card-header">Candidate Register </h5>
        <div class="card-body">
             <livewire:candidate-register>
        </div>
    </div>


</div>
