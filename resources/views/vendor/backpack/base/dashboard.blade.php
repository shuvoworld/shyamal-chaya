@extends(backpack_view('blank'))

@php
    if (config('backpack.base.show_getting_started')) {
        $widgets['before_content'][] = [
            'type'        => 'view',
            'view'        => 'backpack::inc.getting_started',
        ];
    } else {
        $widgets['before_content'][] = [
            'type'        => 'jumbotron',
            'heading'     => trans('backpack::base.welcome'),
            'content'     => trans('backpack::base.use_sidebar'),
            'button_link' => backpack_url('logout'),
            'button_text' => trans('backpack::base.logout'),
        ];
    }

@endphp

@section('content')
@php
Widget::add(
[
    'type'        => 'progress',
    'class'       => 'card text-white bg-primary mb-2',
    'value'       => '1100',
    'description' => 'Registered members',
    'progress'    => 57, // integer
    'hint'        => '8544 more until next milestone.',
]
);
Widget::add(
[
    'type'        => 'progress',
    'class'       => 'card text-white bg-warning mb-2',
    'value'       => '500',
    'description' => 'Number of plots',
    'progress'    => 2200, // integer
    'hint'        => '8544 more until next milestone.',
]
);
@endphp
@endsection
