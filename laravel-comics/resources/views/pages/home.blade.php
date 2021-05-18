@extends('layouts.main-layout')
@section('main')

    <div class="jumbo">
      <div class="jumbocomics">

        <ul>
          @foreach ($data as $item)
            <li>
              <a href="{{ route('elem', $loop->index )}}">
                <div class="box">
                  <div class="boxImg">
                    <img src="{{$item['thumb']}}" alt="">
                  </div>
                  <div class="boxText">
                    <h3>
                      {{$item['series']}}
                    </h3>
                  </div>
                </div>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    @endsection
