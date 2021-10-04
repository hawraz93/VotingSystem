<div>

            <!-- Content Row -->
            <div class="mt-3 row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-primary h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">

                                    <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                         ژمارەی دەنگدەر
                                       </div>
                                        @foreach ($circless as $cir)
                                    <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $cir->voter_num }}</div>
                                    @endforeach
                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-calendar fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-success h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">



                                    <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">
                                        ژماەری بەربژێر</div>
                                        @foreach ($circless as $cir)
                                    <div class="mb-0 text-gray-800 h5 font-weight-bold"> {{ $cir->candids_num }}</div>
                                    @endforeach
                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-dollar-sign fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-info h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">
                                    <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">کۆی ژمارەی دەنگەکان
                                    </div>
                                    <div class="row no-gutters align-items-center" wire:poll='summ'>
                                        <div class="col-auto">
                                            <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold" > {{number_format($persentage, 2, '.', ',')  }}%</div>
                                        </div>
                                        <div class="col">
                                            <div class="mr-2 progress progress-sm">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $numberOfVotes }}%"
                                                    aria-valuenow="{{ $numberOfVoter }}" aria-valuemin="0" aria-valuemax="{{ $numberOfVotes }}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-clipboard-list fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-warning h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">
                                    <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">
                                        ژمارەی کورسیەکان</div>

                                        @foreach ($circless as $cir)
                                        <div class="mb-0 text-gray-800 h5 font-weight-bold">{{  $cir->seats_num }}</div>
                                        @endforeach

                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-comments fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mb-4 shadow card">
                <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">تۆمارکدنی دەنگەکان</h6>
                </div>
                <div class="card-body">
                    <livewire:voting>
                </div>
            </div>




    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="mb-4 shadow card">
                <!-- Card Header - Dropdown -->
                <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <div class="row">
                        <div class="mt-2 col-md-4 ">
                            <label  class="mb-0" for="prefectuers" class="form-label">پارێزگا</label>
                            <select wire:model='selectPrefecture' type="text" class="form-control" id="prefectuers">
                                <option selected value="">پارێزگاکەت دیاری بکە </option>
                                @foreach ($prefectures as $name)
                                <option value="{{ $name->id }}"> {{ $name->Pre_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-2 col-md-4">
                            <label class="mb-0" for="circle" class="form-label">بازنە</label>
                            <select wire:model='selectCircle' type="text" class="form-control" id="circle">
                                <option selected value="">بەزنەکەت دیاری بکە</option>
                                @foreach ($circles as $name)
                                <option value="{{ $name->id }}"> {{ $name->Cir_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-2 col-md-4">
                            <label class="mb-0" for="registration" class="form-label"> کاندید </label>
                            <select wire:model='selectcandid' type="text" class="form-control" id="registration">
                                <option selected value="">هەڵبژاردنی کاندید</option>
                                @foreach ($candids as $name)
                                <option value="{{ $name->id }}"> {{ $name->Can_name }} {{ $name->number }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-4 text-white shadow card bg-success">
                        <div class="card-body">
                            <div class="row">


                            @foreach ($circless as $cir)
                         <h4 class="col-md-5">{{ $cir->voter_num }} ژمارەی دەنگدەر</h4>
                         <h4  class="col-md-3">{{ $cir->candids_num }} ژماەری بەربژێر </h4>
                         <h4  class="col-md-4">{{ $cir->seats_num }} ژمارەی کورسیەکان</h4>
                            @endforeach
                        </div>
                            <div class="mt-4 text-center text-warning small">
                                <h4 wire:poll='summ'> {{ $numberOfVotes }} کۆی ژمارەی دەنگەکان</h4>

                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="mb-4 shadow card">
                <!-- Card Header - Dropdown -->
                <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="text-gray-400 fas fa-ellipsis-v fa-sm fa-fw"></i>
                        </a>
                        <div class="shadow dropdown-menu dropdown-menu-right animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->

                <div class="card-body">


                    <div class="pt-4 pb-2 chart-pie">
                        <canvas id="myPieChart"></canvas>


                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
