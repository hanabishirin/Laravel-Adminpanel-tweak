<table class="table table-striped table-hover">

    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.id') }}</th>
        <td>{{ $school->id }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.name') }}</th>
        <td>{{ $school->name }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.address') }}</th>
        <td>{{ $school->address }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.city') }}</th>
        <td>{{ $school->city }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.latitude') }}</th>
        <td>{{ $school->latitude }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.longitude') }}</th>
        <td>{{ $school->longitude }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.type') }}</th>
        <td>{{ $school->type }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.is_public') }}</th>
        <td>{{ $school->is_public }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.school_zone') }}</th>
        <td>{{ $school->school_zone }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.ranking_city') }}</th>
        <td>{{ $school->ranking_city }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.ranking_state') }}</th>
        <td>{{ $school->ranking_state }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.ranking_city_5_years') }}</th>
        <td>{{ $school->ranking_city_5_years }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.ranking_state_5_years') }}</th>
        <td>{{ $school->ranking_state_5_years }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.school_img_url') }}</th>
        <td>{{ $school->school_img_url }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.created_at') }}</th>
        <td>{{ $school->created_at }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.school.tabs.content.overview.updated_at') }}</th>
        <td>{{ $school->updated_at }}</td>
    </tr>

    {{--@if ($user->trashed())--}}
    {{--<tr>--}}
    {{--<th>{{ trans('labels.backend.access.users.tabs.content.overview.deleted_at') }}</th>--}}
    {{--<td>{{ $user->deleted_at }} ({{ $user->deleted_at->diffForHumans() }})</td>--}}
    {{--</tr>--}}
    {{--@endif--}}
</table>