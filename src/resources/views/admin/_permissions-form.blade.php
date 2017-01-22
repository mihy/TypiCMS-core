<input type="hidden" name="permissions[]" value="change-locale">
<input type="hidden" name="permissions[]" value="update-preferences">

<div class="checkbox">
    <label>
        {!! Form::checkbox('permissions[]', 'dashboard') !!} @lang('roles::global.Access dashboard')
    </label>
</div>
<div class="checkbox">
    <label>
        {!! Form::checkbox('permissions[]', 'index-settings') !!} @lang('roles::global.Change settings')
    </label>
</div>
<div class="checkbox">
    <label>
        {!! Form::checkbox('permissions[]', 'index-history') !!} @lang('roles::global.View history')
    </label>
</div>
<div class="checkbox">
    <label>
        {!! Form::checkbox('permissions[]', 'destroy-history') !!} @lang('roles::global.Empty history')
    </label>
</div>
<div class="table-responsive">
    <table class="table table-condensed table-permissions table-checkboxes">
        <thead>
            <tr>
                <th></th>
                <th>@lang('Index')</th>
                <th>@lang('View')</th>
                <th>@lang('Create')</th>
                <th>@lang('Store')</th>
                <th>@lang('Edit')</th>
                <th>@lang('Update')</th>
                <th>@lang('Sort')</th>
                <th>@lang('Delete')</th>
            </tr>
        </thead>
        <tbody>
            @foreach (TypiCMS::modules() as $module => $properties)
            <tr>
                <td>@lang($module.'::global.name')</td>
                <td>{!! Form::checkbox('permissions[]', 'index-'.$module) !!}</td>
                <td>{!! Form::checkbox('permissions[]', 'show-'.str_singular($module)) !!}</td>
                <td>{!! Form::checkbox('permissions[]', 'create-'.str_singular($module)) !!}</td>
                <td>{!! Form::checkbox('permissions[]', 'store-'.str_singular($module)) !!}</td>
                <td>{!! Form::checkbox('permissions[]', 'edit-'.str_singular($module)) !!}</td>
                <td>{!! Form::checkbox('permissions[]', 'update-'.str_singular($module)) !!}</td>
                <td>{!! Form::checkbox('permissions[]', 'sort-'.$module) !!}</td>
                <td>{!! Form::checkbox('permissions[]', 'destroy-'.str_singular($module)) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
