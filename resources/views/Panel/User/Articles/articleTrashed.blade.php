@extends('Panel.Layouts.master-panel')
@section('title' , 'سطل زباله مقالات')

@section('content')
    <div class="row">
        <div class="col-md-12 box-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="">لیست مقالات حذف شده</h4>
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr style="background-color: #e9ecef;">
                                <th>شماره</th>
                                <th>عنوان</th>
                                <th>خلاصه</th>
                                <th>تصویر</th>
                                <th>تگ ها</th>
                                <th>تاریخ تالیف</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articlesTrashed as $article)
                                <tr style="overflow: scroll; height: 60px;">
                                    <td>{{ $article->id }}</td>
                                    <td style="width: 20%"><a href="{{ route('userPanel.articles.index' , $article->slug) }}">{{ $article->title }}</a></td> {{--todo {{ route('userPanel.articles.show' , $article->slug ?? '') }} --}}
                                    <td style="width: 30%">{{ $article->summery }}</td>
                                    <td style="width: 10%">
                                        <a target="_blank" href="{{ url($article->image) }}"><img style="max-height: 60px;width: auto;" src="{{ url($article->image) }}" alt="{{ $article->slug }}"></a>
                                    </td>
                                    <td style="width: 10%">
                                        @foreach (json_decode($article->tags) as $tag)
                                            <a href="#"><span class="badge badge-pill badge-info"> {{ $tag }} </span></a>
                                        @endforeach
                                    </td>
                                    <td style="width: 10%">{{ $article->persian_date }}</td>
                                    <td style="width: 10%">
                                        <form class="d-inline" action="{{ route('userPanel.articles.hardDelete' , $article->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                        <form class="d-inline" action="{{ route('userPanel.articles.restoreArticle' , $article->id ) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">بازیابی</button>
                                        </form>
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
@endsection




{{--<div class="card card-body">--}}
{{--    <h4 class="card-title">فرم های اصلی</h4>--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-12 col-xs-12">--}}
{{--            <form>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail111">نام کاربری</label>--}}
{{--                    <input type="text" class="form-control" id="exampleInputEmail111" placeholder="نام">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail12">آدرس ایمیل</label>--}}
{{--                    <input type="email" class="form-control" id="exampleInputEmail12" placeholder="ایمیل">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword11">کلمه عبور</label>--}}
{{--                    <input type="password" class="form-control" id="exampleInputPassword11" placeholder="رمز عبور">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword12">کلمه عبور</label>--}}
{{--                    <input type="password" class="form-control" id="exampleInputPassword12" placeholder="تکرار رمز عبور">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <div class="custom-control custom-checkbox mr-sm-2">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="checkbox1" value="check">--}}
{{--                        <label class="custom-control-label" for="checkbox1">مرا به خاطر بسپار</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary mr-2">ارسال</button>--}}
{{--                <button type="submit" class="btn btn-danger">لغو</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

