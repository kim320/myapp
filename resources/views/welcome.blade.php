@extends('layouts.master')

@section('content')
    <p>자식 뷰의 'content'</p>
    @if($itemCount = count($items))
        <p>과일 종류: {{ $itemCount }} 개</p>
    @else
        <p>아무것도 없어요!</p>
    @endif

    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    @include('partials.footer')
@endsection