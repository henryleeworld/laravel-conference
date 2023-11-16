@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.edit') }} {{ trans('cruds.amenity.title_singular') }}</h1>
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
                        <form action="{{ route("admin.amenities.update", [$amenity->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.amenity.fields.name') }}*</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($amenity) ? $amenity->name : '') }}" required>
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.amenity.fields.name_helper') }}
                                </p>
                            </div>
                            <div>
                                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection