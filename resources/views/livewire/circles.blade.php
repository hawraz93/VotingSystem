<div>
  <div class="row form-row">
    <div class="mt-3 mr-2 card col-md ">
        <h5 class="card-header"> تۆمارکردنی بازنەکان</h5>
        <div class="card-body">
            <form wire:submit.prevent='circle_register'>
                    <div class="mt-2">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
                <div class="col-md">
                    <label for="prefectuers">پارێزگاکان</label>
                    <select wire:model='selectPrefecture' type="text" class="form-control" id="prefectuers">
                        <option selected value="">هەڵبژاردنی پارێزگا</option>
                        @foreach ($prefectures as $name)
                        <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                        </option>
                        @endforeach
                    </select>
                    <div class="row">
                        <div class="col-md">
                            <label for="">تکایە ژماری بازنەکە بنوسە </label>
                            <input wire:model='Cir_name' type="text" class="form-control" name="Cir_name" >
                            <div>
                                @error('Cir_name')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for=""></label>ژماری دەنگدەرەکان بنوسە</label>
                            <input wire:model='voter_num' type="number" class="form-control" value=""  name="voter_name">
                            <div>
                                @error('voter_num')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for=""> ژماری بەربژێر بنوسە </label>
                            <input wire:model='candids_num' type="number" class="form-control" value="" name="candids_name">
                            <div>
                                @error('candids_num')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="">ژمارەی کورسیەکان </label>
                            <input wire:model='seats_num' type="number" class="form-control" value="" name="seats_name">
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
        <div class="mt-3 mr-2 card col-md ">
            <div class="card-header">
            <h3 class="text-priemry">بازنەکان</h3></div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">بازنەکان</th>
      <th scope="col">ژم.دەنگدەر</th>
      <th scope="col">ژم.کاندید</th>
      <th scope="col">ژم.کورسی</th>
      <th scope="col">کردار</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($acircles as $item)
    <tr>
      <th scope="row">#</th>
      <td>{{ $item->Cir_name}}</td>
      <td>{{ $item->voter_num}}</td>
      <td>{{ $item->candids_num}}</td>
      <td>{{ $item->seats_num}}</td>
      <td><div class="text-center btn btn-danger btn-sm "
                    wire:click='deleteCircle({{ $item->id }})'>سڕینەوە</div>
                </td>
    </tr>
 @endforeach
  </tbody>
</table>



    </div>
</div>
</div>
