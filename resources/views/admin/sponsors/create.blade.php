@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.create') }} {{ trans('cruds.sponsor.title_singular') }}</h1>
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
                        <form action="{{ route("admin.sponsors.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.sponsor.fields.name') }}*</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($sponsor) ? $sponsor->name : '') }}" required>
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.sponsor.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('logo') ? 'has-error' : '' }}">
                                <label for="logo">{{ trans('cruds.sponsor.fields.logo') }}</label>
                                <div class="needsclick dropzone" id="logo-dropzone">

                                </div>
                                @if($errors->has('logo'))
                                <p class="help-block">
                                    {{ $errors->first('logo') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.sponsor.fields.logo_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('link') ? 'has-error' : '' }}">
                                <label for="link">{{ trans('cruds.sponsor.fields.link') }}</label>
                                <input type="text" id="link" name="link" class="form-control" value="{{ old('link', isset($sponsor) ? $sponsor->link : '') }}">
                                @if($errors->has('link'))
                                <p class="help-block">
                                    {{ $errors->first('link') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.sponsor.fields.link_helper') }}
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
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.sponsors.storeMedia') }}',
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
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($sponsor) && $sponsor->logo)
      var file = {!! json_encode($sponsor->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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