@extends(backpack_view('blank'))

{{--@php--}}
{{--    if (config('backpack.base.show_getting_started')) {--}}
{{--        $widgets['before_content'][] = [--}}
{{--            'type'        => 'view',--}}
{{--            'view'        => 'backpack::inc.getting_started',--}}
{{--        ];--}}
{{--    } else {--}}
{{--        $widgets['before_content'][] = [--}}
{{--            'type'        => 'jumbotron',--}}
{{--            'heading'     => trans('backpack::base.welcome'),--}}
{{--            'content'     => trans('backpack::base.use_sidebar'),--}}
{{--            'button_link' => backpack_url('logout'),--}}
{{--            'button_text' => trans('backpack::base.logout'),--}}
{{--        ];--}}
{{--    }--}}

{{--@endphp--}}

@section('content')
    <h3>ShyamolChhaya  Cooperative Society Ltd.</h3>
    <h4>Reg # 00121 (Munshi)  Esta. 17.12.07</h4>
    @php
        Widget::add(
            [
            'type'    => 'div',
            'class'   => 'row',
            'content' =>
            [ // widgets
                [
                    'type' => 'card',
                    'class'  => 'card text-white bg-warning',
                    'content' => [
                    'body' => '<h5>Registered Members</h5><br/><a href="'.backpack_url('member').'" class="btn btn-primary">See Details</a>'
                    ]
                ],

                [
                    'type' => 'card',
                    'class'  => 'card text-white bg-info',
                    'content' => [
                    'body' => '<h5>Land Schedules</h5><br/><a href="'.backpack_url('plot-allocation').'" class="btn btn-warning">See Details</a>'
                    ]
                ]
            ],

        ]
        );

    @endphp
@endsection
