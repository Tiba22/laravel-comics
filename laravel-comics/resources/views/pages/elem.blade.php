@extends('layouts.main-layout')
@section('main')

  <div id="elem">


    <main>
      <div class="boxImgElem">
        <img src="{{$elem['thumb']}}" alt="">
        <div class="descBook">
          <span>
            comic book
          </span>
        </div>
        <div class="viewGallery">
          <span>
            view gallery
          </span>
        </div>
      </div>
      <div class="blueLine"></div>
      <div class="containerTopInfo">
        <div class="content">
          <div class="left">
            <h2>
              {{$elem['title']}}
            </h2>
            <div class="price">
              <span>
                U.S.Price: <strong> {{$elem['price']}} </strong>
              </span>
              <div class="available">
                <p>
                  AVAILABLE
                </p>
                <div class="check">
                  <p>
                    Check Availability
                  </p>
                </div>
              </div>
            </div>
            <div class="description">
              <p>
                {{$elem['description']}}
              </p>
            </div>
          </div>
          <div class="right">
            <h4>
              advertisement
            </h4>
            <img src="{{ asset('/storage/assets/adv.jpg') }}"alt="">
          </div>
        </div>
      </div>
      <div class="containerInfoBottom">
        <div class="infoBottom">
          <div class="left">
            <h4>
              Talent
            </h4>
            <div>
              <span class="subtitle">
                Art by:
              </span>
              <div>
                @foreach ($elem['artists'] as $a)
                  @if ($loop->last)
                    <a href="">
                      {{$a}}
                    </a>
                  @else
                    <a href="">
                      {{$a}}
                    </a>
                    ,
                  @endif
                @endforeach
              </div>
            </div>
            <div>
              <span>
                Written by:
              </span>
              <div>
                @foreach ($elem['writers'] as $a)
                  @if ($loop->last)
                    <a href="">
                      {{$a}}
                    </a>
                  @else
                    <a href="">
                      {{$a}}
                    </a>
                    ,
                  @endif
                @endforeach
              </div>
            </div>
          </div>
          <div class="right">
            <h4>
              Specs
            </h4>
            <div>
              <span>
                Series:
              </span>
              <a href="">
                {{$elem['series']}}
              </a>
            </div>
            <div>
              <span>
                U.S. Price:
              </span>
              <span>
                {{$elem['price']}}
              </span>
            </div>
            <div>
              <span>
                On Sale Date:
              </span>
              <span>
                {{$elem['sale_date']}}
              </span>
            </div>
          </div>
        </div>
        <div>
          <div>
            <div>
              <a href="">
                digital comics
              </a>
              <img src="" alt="">
            </div>
            <div>
              <a href="">
                shop dc
              </a>
              <img src="" alt="">
            </div>
            <div>
              <a href="">
                comic shop locator
              </a>
              <img src="" alt="">
            </div>
            <div>
              <a href="">
                subscription
              </a>
              <img src="" alt="">
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
@endsection
