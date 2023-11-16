@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.edit') }} {{ trans('cruds.price.title_singular') }}</h1>
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
                        <form action="{{ route("admin.prices.update", [$price->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.price.fields.name') }}*</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($price) ? $price->name : '') }}" required>
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.price.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('price') ? 'has-error' : '' }}">
                                <label for="price">{{ trans('cruds.price.fields.price') }}*</label>
                                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($price) ? $price->price : '') }}" step="0.01" required>
                                @if($errors->has('price'))
                                <p class="help-block">
                                    {{ $errors->first('price') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.price.fields.price_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('amenities') ? 'has-error' : '' }}">
                                <label for="amenities">{{ trans('cruds.price.fields.amenities') }}
                                <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                <select name="amenities[]" id="amenities" class="form-control select2" multiple="multiple">
                                    @foreach($amenities as $id => $amenities)
                                    <option value="{{ $id }}" {{ (in_array($id, old('amenities', [])) || isset($price) && $price->amenities->contains($id)) ? 'selected' : '' }}>{{ $amenities }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('amenities'))
                                <p class="help-block">
                                    {{ $errors->first('amenities') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.price.fields.amenities_helper') }}
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