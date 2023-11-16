@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('global.edit') }} {{ trans('cruds.gallery.title_singular') }}</h1>
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
                        <form action="{{ route("admin.galleries.update", [$gallery->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.gallery.fields.name') }}*</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($gallery) ? $gallery->name : '') }}" required>
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.gallery.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="mb-3 {{ $errors->has('photos') ? 'has-error' : '' }}">
                                <label for="photos">{{ trans('cruds.gallery.fields.photos') }}</label>
                                <div class="needsclick dropzone" id="photos-dropzone">

                                </div>
                                @if($errors->has('photos'))
                                <p class="help-block">
                                    {{ $errors->first('photos') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.gallery.fields.photos_helper') }}
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
    var uploadedPhotosMap = {}
Dropzone.options.photosDropzone = {
    url: '{{ route('admin.galleries.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
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
      $('form').append('<input type="hidden" name="photos[]" value="' + response.name + '">')
      uploadedPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPhotosMap[file.name]
      }
      $('form').find('input[name="photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($gallery) && $gallery->photos)
      var files =
        {!! json_encode($gallery->photos) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="photos[]" value="' + file.file_name + '">')
        }
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