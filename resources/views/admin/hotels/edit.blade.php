@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.edit') }} {{ trans('cruds.hotel.title_singular') }}</h1>
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
                        <form action="{{ route("admin.hotels.update", [$hotel->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.hotel.fields.name') }}*</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($hotel) ? $hotel->name : '') }}" required>
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.hotel.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('photo') ? 'has-error' : '' }}">
                                <label for="photo">{{ trans('cruds.hotel.fields.photo') }}</label>
                                <div class="needsclick dropzone" id="photo-dropzone">

                                </div>
                                @if($errors->has('photo'))
                                <p class="help-block">
                                    {{ $errors->first('photo') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.hotel.fields.photo_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('address') ? 'has-error' : '' }}">
                                <label for="address">{{ trans('cruds.hotel.fields.address') }}</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($hotel) ? $hotel->address : '') }}">
                                @if($errors->has('address'))
                                <p class="help-block">
                                    {{ $errors->first('address') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.hotel.fields.address_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="description">{{ trans('cruds.hotel.fields.description') }}</label>
                                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($hotel) ? $hotel->description : '') }}</textarea>
                                @if($errors->has('description'))
                                <p class="help-block">
                                    {{ $errors->first('description') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.hotel.fields.description_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('rating') ? 'has-error' : '' }}">
                                <label for="rating">{{ trans('cruds.hotel.fields.rating') }}</label>
                                <input type="number" id="rating" name="rating" class="form-control" value="{{ old('rating', isset($hotel) ? $hotel->rating : '') }}" step="1">
                                @if($errors->has('rating'))
                                <p class="help-block">
                                    {{ $errors->first('rating') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.hotel.fields.rating_helper') }}
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

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.hotels.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    dictCancelUpload: '取消上傳',
    dictCancelUploadConfirmation: '你確定要取消上傳嗎？',
    dictDefaultMessage :
        '<span><i></i>拖放附件到此處</span> \
        <span>（或點擊此處）</span><br /> \
        <i></i>',
    dictFileTooBig: "檔案大小超過 @{{maxFilesize}} MB。",
    dictInvalidFileType: '不合法的檔案類型。',
	dictMaxFilesExceeded: "最多上傳 @{{maxFiles}} 個檔案。",
    dictRemoveFile: '刪除檔案',
    dictResponseError: '檔案上傳失敗！',
    dictUploadCanceled: '上傳已經取消。',
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($hotel) && $hotel->photo)
      var file = {!! json_encode($hotel->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@stop