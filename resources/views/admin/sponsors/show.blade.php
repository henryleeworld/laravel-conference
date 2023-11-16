@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.show') }} {{ trans('cruds.sponsor.title') }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <table class="table table-bordered table-striped" style="width:100%">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.sponsor.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $sponsor->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.sponsor.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $sponsor->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.sponsor.fields.logo') }}
                                        </th>
                                        <td>
                                            @if($sponsor->logo)
                                            <a href="{{ $sponsor->logo->getUrl() }}" target="_blank">
                                                <img src="{{ $sponsor->logo->getUrl('thumb') }}" width="50px" height="50px">
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.sponsor.fields.link') }}
                                        </th>
                                        <td>
                                            {{ $sponsor->link }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a style="margin-top:20px;" class="btn btn-light" href="{{ url()->previous() }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection