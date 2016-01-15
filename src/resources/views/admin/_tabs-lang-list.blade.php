@if (count($locales) > 1)
<div class="btn-toolbar">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span id="active-locale">@lang('global.languages.'.$locale)</span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            @foreach ($locales as $lang)
            <li><a class="@if($lang == $locale)active @endif" href="?{{ http_build_query(Request::except('locale') + ['locale' => $lang]) }}" data-locale="{{ $lang }}">@lang('global.languages.'.$lang)</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif
