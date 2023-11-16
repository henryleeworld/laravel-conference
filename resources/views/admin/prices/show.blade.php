@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.show') }} {{ trans('cruds.price.title') }}</h1>
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
                                            {{ trans('cruds.price.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $price->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.price.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $price->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.price.fields.price') }}
                                        </th>
                                        <td>
                                            ${{ $price->price }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            設施
                                        </th>
                                        <td>
                                            @foreach($price->amenities as $id => $amenities)
                                            <span class="label label-info label-many">{{ $amenities->name }}</span>
                                            @endforeach
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