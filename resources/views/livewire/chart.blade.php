<div class="mt-3">
  <div class="card shadow">
    <h5 class="card-header text-primary">دەنگەکان </h3>
      <div class="card-body">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ناوی گەڕەک</th>
      <th scope="col">بنکە</th>
      <th scope="col">ژم.دەنگدەر</th>
      <th scope="col">کاندید</th>
      <th scope="col">دەنگی بەدەسهێنراو </th>
      <th scope="col">دەنگی سوتاو </th>

      <th scope="col">کردار</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($vote as $item)
    <tr>
      <th scope="row">#</th>
      <td>{{ $item->voteReg->Reg_name}}</td>
      <td>{{ $item->votePoll->Pol_name}}</td>
      <td>{{ $item->allVoteNum}}</td>
      <td>{{ $item->voteCandid->Can_name}}</td>
      <td>{{ $item->voteNum}}</td>
      <td>{{ $item->removeVote}}</td>
      <td><div class="text-center btn btn-danger btn-sm "
                    wire:click='deleteVote({{ $item->id }})'>سڕینەوە</div>
                </td>
    </tr>
 @endforeach
  </tbody>
</table>
  </div>
</div>
</div>
