@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}</h1>
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
                        <form action="{{ route("admin.settings.update", [$setting->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 {{ $errors->has('key') ? 'has-error' : '' }}">
                                <label for="key">{{ trans('cruds.setting.fields.key') }}*</label>
                                <input type="text" id="key" name="key" class="form-control" value="{{ old('key', isset($setting) ? $setting->key : '') }}" required>
                                @if($errors->has('key'))
                                <p class="help-block">
                                    {{ $errors->first('key') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.setting.fields.key_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('value') ? 'has-error' : '' }}">
                                <label for="value">{{ trans('cruds.setting.fields.value') }}</label>
                                <textarea id="value" name="value" class="form-control ">{{ old('value', isset($setting) ? $setting->value : '') }}</textarea>
                                @if($errors->has('value'))
                                <p class="help-block">
                                    {{ $errors->first('value') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.setting.fields.value_helper') }}
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