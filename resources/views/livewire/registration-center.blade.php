<div class='row form-row'>
      <div class="mt-3 card col-md ">
        <h5 class="card-header text-primary">تۆمارکردنی گەڕەکەکان </h5>
        <div class="card-body">
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
            <button class="mt-2 btn btn-primary">تۆمارکردن</button>

        </div>
    </form>
</div>
     </div>


    <div class="mt-3 mr-2 card col-md ">
        <h5 class="card-header text-primary" > گەڕەکەکان </h5>
        <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">پارێزگا </th>
                <th scope="col">بازنە  </th>
                <th scope="col">گەڕەك </th>
                <th scope="col"> </th>
                <th scope="col">کردار </th>
            </tr>
        </thead>
        @foreach ($registrationCeneters as $item)
        <tr>
            <th scope="row">#</th>
            <th> {{ $item->registPre->Pre_name }}</th>
            <th>{{ $item->registCir->Cir_name }}</th>
            <th>{{ $item->Reg_name }}</th>
            <th></th>
            <th><div class="text-center btn btn-danger btn-sm"
                wire:click='deletePoll({{ $item->id }})'>سڕینەوە</div></th>
        </tr>
        @endforeach
        </table>


    </div>
    </div>
</div>