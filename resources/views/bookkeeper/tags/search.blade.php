@extends('tags.base_index')

@section('header_content')
    @include('partials.header', [
        'headerTitle' => $pageTitle
    ])
@endsection

@section('content')
    <div class="tags-list-container">
        @include('tags.list')
    </div>

    <div class="content-footer">
        {!! action_button(route('bookkeeper.tags.index'), 'icon-arrow-left', trans('tags.all'), '', 'l') !!}
    </div>
@endsection