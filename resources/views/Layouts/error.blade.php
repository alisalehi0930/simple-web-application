@if(isset ($errors) && count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        <p class="list-unstyled mb-0">
        {{ $errors->first() }}
    </div>
@endif

{{--@if(Session::get('success', false))--}}
{{--        <?php $data = \Illuminate\Support\Facades\Session::get('success'); ?>--}}
{{--    @if (is_array($data))--}}
{{--        @foreach ($data as $msg)--}}
{{--            <div class="alert alert-warning" role="alert">--}}
{{--                <i class="fa fa-check"></i>--}}
{{--                {{ $msg }}--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    @else--}}
{{--        <div class="alert alert-warning" role="alert">--}}
{{--            <i class="fa fa-check"></i>--}}
{{--            {{ $data }}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--@endif--}}
