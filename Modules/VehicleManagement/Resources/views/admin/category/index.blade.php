@section('title', 'Vehicle Category')

@extends('adminmodule::layouts.master')

@push('css_or_js')
@endpush

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="d-flex align-items-center gap-3 justify-content-between mb-4">
                <h2 class="fs-22 text-capitalize">{{ translate('vehicle_attribute') }}</h2>
            </div>

            <div class="row g-4">
                <!------ Attribute Header------------------->
                @include('vehiclemanagement::admin.partials._attribute_header')

                @can('vehicle_add')
                    <div class="col-12">
                        <form action="{{ route('admin.vehicle.attribute-setup.category.store') }}"
                              enctype="multipart/form-data" method="POST">
                            @csrf

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-primary text-uppercase mb-4">{{ translate('add_new_category') }}</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="category_name"
                                                       class="mb-2">{{ translate('category_name') }}</label>
                                                <input type="text" id="category_name" name="category_name"
                                                       class="form-control"
                                                       placeholder="Ex: Category" value="{{ old('category_name') }}"
                                                       required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="category_type"
                                                       class="mb-2">{{ translate('category_type') }}</label>
                                                <select id="category_type" name="type" class="form-control js-select"
                                                        required>
                                                    <option value="" disabled
                                                            selected>{{translate('select_category_type')}}</option>
                                                    <option value="car">{{translate('car')}}</option>
                                                    <option value="motor_bike">{{translate('Motor_Bike')}}</option>
                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <label for="short_desc"
                                                       class="mb-2">{{ translate('short_desc') }}</label>
                                                <div class="character-count">
                                                    <textarea id="short_desc" rows="5" name="short_desc"
                                                              class="form-control character-count-field" maxlength="800"
                                                              data-max-character="800" placeholder="Ex: Description"
                                                              required>{{ old('short_desc') }}</textarea>
                                                    <span>{{translate('0/800')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body d-flex flex-column gap-3">
                                                <h5 class="text-center text-capitalize">{{ translate('category_image') }}</h5>

                                                <div class="d-flex justify-content-center">
                                                    <div class="upload-file">
                                                        <input type="file" class="upload-file__input " accept=".png"
                                                               name="category_image" required>
                                                        <div class="upload-file__img w-auto h-auto">
                                                            <img width="150"
                                                                 src="{{ asset('public/assets/admin-module/img/media/upload-file.png') }}"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <p class="opacity-75 mx-auto text-center max-w220">{{ translate('5MB_image_note') }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end gap-3">
                                        <button type="submit"
                                                class="btn btn-primary">{{ translate('submit') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endcan
                <div class="col-12">
                    <h2 class="fs-22 text-capitalize">{{ translate('category_list') }}</h2>

                    <div class="d-flex flex-wrap justify-content-between align-items-center my-3 gap-3">
                        <ul class="nav nav--tabs p-1 rounded bg-white" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{!request()->has('status') || request()->get('status')=='all'?'active':''}}"
                                   href="{{url()->current()}}?status=all">
                                    {{ translate('all') }}
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{request()->get('status')=='active'?'active':''}}"
                                   href="{{url()->current()}}?status=active">
                                    {{ translate('active') }}
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{request()->get('status')=='inactive'?'active':''}}"
                                   href="{{url()->current()}}?status=inactive">
                                    {{ translate('inactive') }}
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted text-capitalize">{{ translate('total_category') }} : </span>
                            <span class="text-primary fs-16 fw-bold"
                                  id="total_record_count">{{ $categories->total() }}</span>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="all-tab-pane" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-top d-flex flex-wrap gap-10 justify-content-between">
                                        <form action="javascript:;"
                                              class="search-form search-form_style-two" method="GET">
                                            <div class="input-group search-form__input_group">
                                                <span class="search-form__icon">
                                                    <i class="bi bi-search"></i>
                                                </span>
                                                <input type="search" class="theme-input-style search-form__input"
                                                       value="{{request()->get('search')}}" name="search" id="search"
                                                       placeholder="{{translate('search_here_by_Category_Name')}}">
                                            </div>
                                            <button type="submit"
                                                    class="btn btn-primary search-submit" data-url="{{ url()->full() }}">{{ translate('search') }}</button>
                                        </form>

                                        <div class="d-flex flex-wrap gap-3">
                                            @can('super-admin')
                                                <a href="{{ route('admin.vehicle.attribute-setup.category.index', ['status' => request('status')]) }}"
                                                   class="btn btn-outline-primary px-3" data-bs-toggle="tooltip" data-bs-title="{{ translate('refresh') }}">
                                                    <i class="bi bi-arrow-repeat"></i>
                                                </a>

                                                <a href="{{ route('admin.vehicle.attribute-setup.category.trashed') }}"
                                                   class="btn btn-outline-primary px-3" data-bs-toggle="tooltip" data-bs-title="{{ translate('manage_Trashed_Data') }}">
                                                    <i class="bi bi-recycle"></i>
                                                </a>
                                            @endcan

                                            @can('vehicle_log')
                                                <a href="{{route('admin.vehicle.attribute-setup.category.log')}}"
                                                   class="btn btn-outline-primary px-3" data-bs-toggle="tooltip" data-bs-title="{{ translate('view_Log') }}">
                                                    <i class="bi bi-clock-fill"></i>
                                                </a>
                                            @endcan
                                            @can('vehicle_export')
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-outline-primary"
                                                            data-bs-toggle="dropdown">
                                                        <i class="bi bi-download"></i>
                                                        {{ translate('download') }}
                                                        <i class="bi bi-caret-down-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                                        <li><a class="dropdown-item"
                                                               href="{{route('admin.vehicle.attribute-setup.category.export')}}?status={{request()->get('status') ?? "all"}}&&file=excel">{{translate('excel')}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endcan
                                        </div>
                                    </div>

                                    <div class="table-responsive mt-3">
                                        <table class="table table-borderless align-middle">
                                            <thead class="table-light align-middle">
                                            <tr>
                                                <th>{{ translate('SL') }}</th>
                                                <th>{{ translate('category_image') }}</th>
                                                <th class="text-capitalize name">{{ translate('category_name') }}</th>
                                                <th class="text-capitalize total-vehicle">{{ translate('total_vehicle') }}</th>
                                                @can('vehicle_edit')
                                                    <th class="status">{{ translate('status') }}</th>
                                                @endcan
                                                <th class="text-center action">{{ translate('action') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($categories as $key => $category)
                                                <tr id="hide-row-{{$category->id}}" class="record-row">
                                                    <td>{{ $categories->firstItem() +$key }}</td>
                                                    <td >
                                                        <div class="avatar bg-transparent rounded">
                                                            <img src="{{ onErrorImage(
                                                                    $category?->image,
                                                                    asset('storage/app/public/vehicle/category') . '/' . $category?->image,
                                                                    asset('public/assets/admin-module/img/media/car.png'),
                                                                    'vehicle/category/',
                                                                ) }}"
                                                                 class="dark-support rounded custom-box-size"
                                                                 alt="" style="--size: 42px">
                                                        </div>
                                                    </td>
                                                    <td class="name">{{ $category->name }}</td>
                                                    <td class="total-vehicle">{{ $category->vehicles->count() }}</td>
                                                    @can('vehicle_edit')
                                                        <td class="status">
                                                            <label class="switcher">
                                                                <input class="switcher_input status-change"

                                                                       data-url={{ route('admin.vehicle.attribute-setup.category.status') }} id="{{ $category->id }}"
                                                                       type="checkbox" {{$category->is_active?'checked':''}}>
                                                                <span class="switcher_control"></span>
                                                            </label>
                                                        </td>
                                                    @endcan
                                                    <td class="action">
                                                        <div
                                                            class="d-flex justify-content-center gap-2 align-items-center">
                                                            @can('vehicle_log')
                                                                <a href="{{route('admin.vehicle.attribute-setup.category.log')}}?id={{$category->id}}"
                                                                   class="btn btn-outline-primary btn-action">
                                                                    <i class="bi bi-clock-fill"></i>
                                                                </a>
                                                            @endcan
                                                            @can('vehicle_edit')
                                                                <a href="{{route('admin.vehicle.attribute-setup.category.edit', ['id'=>$category->id])}}"
                                                                   class="btn btn-outline-info btn-action">
                                                                    <i class="bi bi-pencil-fill"></i>
                                                                </a>
                                                            @endcan
                                                            @can('vehicle_delete')
                                                                <button
                                                                    data-id="delete-{{ $category->id }}" data-message="{{ translate('want_to_delete_this_category?') }}"
                                                                    type="button"
                                                                    class="btn btn-outline-danger btn-action form-alert">
                                                                    <i class="bi bi-trash-fill"></i>
                                                                </button>

                                                                <form
                                                                    action="{{ route('admin.vehicle.attribute-setup.category.delete', ['id'=>$category->id]) }}"
                                                                    id="delete-{{ $category->id }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                </form>
                                                            @endcan
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="15">
                                                        <div class="d-flex flex-column justify-content-center align-items-center gap-2 py-3">
                                                            <img src="{{ asset('public/assets/admin-module/img/empty-icons/no-data-found.svg') }}" alt="" width="100">
                                                            <p class="text-center">{{translate('no_data_available')}}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        {!! $categories->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection

@push('script')
    <script>
        "use strict";
        let selectBox = document.getElementById('category_type');
        // Add the 'required' attribute to the select box
        selectBox.attr('required', 'required');
    </script>
@endpush
