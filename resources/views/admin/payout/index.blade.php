@extends('admin.layouts.app')
@section('title', trans($page_title))
@section('content')

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            @if(adminAccessRoute(config('role.payout_manage.access.add')))
            <div class="media mb-4 justify-content-end">
                <a href="{{route('admin.payout-method.create')}}" class="btn btn-sm  btn-primary mr-2">
                    <span><i class="fas fa-plus"></i> @lang('Add New')</span>
                </a>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered no-wrap" id="zero_config">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">@lang('Name')</th>
                        <th scope="col">@lang('Status')</th>
                        @if(adminAccessRoute(config('role.payout_manage.access.edit')))
                        <th scope="col">@lang('Action')</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($methods as $method)
                        <tr>
                            <td data-label="@lang('Name')">{{ $method->name }} </td>
                            <td data-label="@lang('Status')">
                            <span
                                class="badge badge-pill badge-{{($method->status == 1) ?'success' : 'danger'}}">{{($method->status == 1) ?trans('Active') : trans('Deactive')}}</span>
                            </td>

                            @if(adminAccessRoute(config('role.payout_manage.access.edit')))
                            <td data-label="@lang('Action')">
                                <a href="{{ route('admin.payout-method.edit', $method->id) }}"
                                   class="btn btn-sm btn-primary"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   data-original-title="@lang('Edit Payment Methods Info')">
                                    <i class="fa fa-edit"></i></a>
                            </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-danger" colspan="8">
                                @lang('No Data Found')
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('style-lib')
    <link href="{{asset('assets/admin/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datatable-basic.init.js') }}"></script>
@endpush
