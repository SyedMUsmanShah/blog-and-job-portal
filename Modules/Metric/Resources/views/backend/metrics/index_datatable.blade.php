@extends('backend.layouts.app')

@section('title')
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active"
            icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <x-backend.section-header>
                <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small
                    class="text-muted">{{ __($module_action) }}</small>

                <x-slot name="subtitle">
                    @lang(':module_name Management Dashboard', ['module_name' => Str::title($module_name)])
                </x-slot>
                <x-slot name="toolbar">
                    {{-- @can('add_' . $module_name)
                <x-buttons.create route='{{ route("backend.$module_name.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}" />
                @endcan

                @can('restore_' . $module_name)
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href='{{ route("backend.$module_name.trashed") }}'>
                                <i class="fas fa-eye-slash"></i> @lang("View trash")
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                    </ul>
                </div>
                @endcan --}}
                </x-slot>
            </x-backend.section-header>

            {{-- <div class="row mt-4">
                <div class="col">
                    <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    @lang('metric::text.name')
                                </th>
                                <th>
                                    @lang('metric::text.updated_at')
                                </th>
                                <th class="text-end">
                                    @lang('metric::text.action')
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div> --}}
            <div class="row mt-5">
                <div class="col">

                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                @forelse ($jobs as $job)
                <div class="col-4">
                    <div class="float-left">
                        <div class="card text-left">
                          <img class="card-img-top" src="{{ url('/img/35-355144_the-dark-blue-part-of-this-pie-chart.png') }}" alt="">
                          <div class="card-body">
                            <h4 class="card-title">{{ $job->name }}</h4>
                            <p class="card-text">Clicks : {{ $job->clicks }}</p>
                            <p class="card-text">Applications: {{ \Modules\Application\Models\Application::where('designation', $job->name)->count() }}</p>
                          </div>
                        </div>
                    </div>
                </div>
                @empty
                    <h1>No Jobs Available</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@push('after-styles')
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">
@endpush

@push('after-scripts')
    <!-- DataTables Core and Extensions -->
    <script type="module" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

    <script type="module">
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: true,
            responsive: true,
            ajax: '{{ route("backend.$module_name.index_data") }}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    </script>
@endpush
