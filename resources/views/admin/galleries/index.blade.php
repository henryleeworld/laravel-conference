@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ trans('cruds.gallery.title_singular') }} {{ trans('global.list') }}</h1>
                @can('gallery_create')
				<div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route("admin.galleries.create") }}">
                            {{ trans('global.add') }} {{ trans('cruds.gallery.title_singular') }}
                        </a>
                    </div>
                </div>
                @endcan
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
                        <div class="table-responsive">
					        <table class=" table table-bordered table-striped table-hover datatable datatable-Gallery" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="10">

                                        </th>
                                        <th>
                                            {{ trans('cruds.gallery.fields.id') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.gallery.fields.name') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.gallery.fields.photos') }}
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($galleries as $key => $gallery)
                                    <tr data-entry-id="{{ $gallery->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $gallery->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $gallery->name ?? '' }}
                                        </td>
                                        <td>
                                            @if($gallery->photos)
                                                @foreach($gallery->photos as $key => $media)
                                                <a href="{{ $media->getUrl() }}" target="_blank">
                                                    <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                                                </a>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @can('gallery_show')
                                            <a class="btn btn-xs btn-primary" href="{{ route('admin.galleries.show', $gallery->id) }}">
                                                {{ trans('global.view') }}
                                            </a>
                                            @endcan

                                            @can('gallery_edit')
                                            <a class="btn btn-xs btn-info" href="{{ route('admin.galleries.edit', $gallery->id) }}">
                                                {{ trans('global.edit') }}
                                            </a>
                                            @endcan

                                            @can('gallery_delete')
                                            <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script type="module">
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('gallery_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.galleries.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Gallery:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection