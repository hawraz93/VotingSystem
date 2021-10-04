
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

    <div class="mt-3 mr-2 card col-md ">
        @foreach ($prefectures as $item)
        <div class="mt-1 row form-row col-12">

                <div class="text-center col-4 text-primary ">
                    {{ $item->Pre_name}}
                </div>
                <div class="text-center btn btn-danger btn-sm col-2"
                    wire:click='deletePrefection({{ $item->id }})'>سڕینەوە</div>

        </div>
        @endforeach

    </div>
    </div>
    {{-- prefectuer and sircole --}}

<livewire:circles>
    {{-- end  prefectuer and sircole --}}

    {{-- Prefectuer and Circle and Registration --}}

            <livewire:registration-center>

    {{-- Prefectuer and Circle and Registration --}}




            <livewire:polling-register>


            <livewire:candidate-register>



