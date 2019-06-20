<h1>{!! trans('admin::themes.labels.themes') !!}</h1>
<br/>

<h2>{!! trans('admin::themes.labels.manage_themes') !!}</h2>

{!! trans('admin::themes.labels.view_all_uploaded') !!}

<br />

<div class="form-horizontal">
    <div class="form-inline">
        <a href="{{ route('admin.themes.list') }}" class="btn btn-warning"><i class="fa fa-tint"></i> &nbsp; Manage Themes</a>
    </div>
</div>

@if (!empty($blockSettings))

    <br />

    <h2>{!! trans('admin::themes.labels.block_setting') !!}</h2>

    @foreach($blockSettings as $name => $url)
        <p><a href="{{ url('support/'.$url) }}">{{ $name }}</a></p>
    @endforeach

@endif
