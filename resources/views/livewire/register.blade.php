<div class="row form-row">
    <div class="mt-2">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="mt-3 mr-2 card col-md">

        <h5 class="card-header">تۆمارکردنی پارێزگاکان </h5>
        <div class="card-body">
            <form wire:submit.prevent='Prefectuers_register'>
                <div class="col-md">
                    <label for="">تکایە ناوی پارێزگاکەت بنوسە </label>
                    <input wire:model='Pre_name' type="text" class="form-control" name="Pre_name">
                    <div>
                        @error('Pre_name')
                        <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="mt-2 btn btn-primary">تۆمارکردن</button>
                </div>
            </form>
        </div>
    </div>
    {{-- prefectuer and sircole --}}


    <div class="mt-3 mr-2 card col-md ">
        <h5 class="card-header"> تۆمارکردنی بازنەکان</h5>
        <div class="card-body">
            <form wire:submit.prevent='circle_register'>
                <div class="col-md">
                    <label for="prefectuers">پارێزگاکان</label>
                    <select wire:model='pre_selecte' type="text" class="form-control" id="prefectuers">
                        <option selected value="">هەڵبژاردنی پارێزگا</option>
                        @foreach ($prefectures as $name)
                        <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                        </option>
                        @endforeach
                    </select>
                    <div class="row">
                        <div class="col-md">
                            <label for="">تکایە ژماری بازنەکە بنوسە </label>
                            <input wire:model='Cir_name' type="text" class="form-control" value="">
                            <div>
                                @error('Cir_name')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for=""></label>ژماری دەنگدەرەکان بنوسە</label>
                            <input wire:model='voter_num' type="text" class="form-control" value="">
                            <div>
                                @error('voter_num')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for=""> ژماری بەربژێر بنوسە </label>
                            <input wire:model='candids_num' type="text" class="form-control" value="">
                            <div>
                                @error('candids_num')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="">ژمارەی کورسیەکان </label>
                            <input wire:model='seats_num' type="text" class="form-control" value="">
                            <div>
                                @error('seats_num')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button class="mt-2 btn btn-primary">تۆمارکردن</button>
                </div>
            </form>
        </div>
    </div>

    {{-- end  prefectuer and sircole --}}

    {{-- Prefectuer and Circle and Registration --}}
    <div class="mt-3 card col-md ">
        <h5 class="card-header">تۆمارکردنی گەڕەکەکان </h5>
        <div class="card-body">
            <livewire:registration-center>
        </div>
    </div>
    {{-- Prefectuer and Circle and Registration --}}


</div>

<div class="row form-row">
    <div class="mt-3 mr-2 card col-md">
        <h5 class="card-header">تۆمارکردنی بنکەکانی دەنگدان</h5>
        <div class="card-body">
            <livewire:polling-register>
        </div>
    </div>

    <div class="mt-3 card col-md ">
        <h5 class="card-header">تۆمارکردنی کاندیدەکان </h5>
        <div class="card-body">
            <livewire:candidate-register>
        </div>
    </div>


</div>
