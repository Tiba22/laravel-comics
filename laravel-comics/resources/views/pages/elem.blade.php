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
            <div class="artBy">
              <span class="subtitle">
                Art by:
              </span>
              <div class="containerLink">
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
            <div class="writtenBy">
              <span class="subtitle">
                Written by:
              </span>
              <div class="containerLink">
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
            <div class="rightSeries">
              <p class="subtitle">
                Series:
              </p>
              <a href="">
                {{$elem['series']}}
              </a>
            </div>
            <div class="rightUSPrice">
              <p class="subtitle">
                U.S. Price:
              </p>
              <span>
                {{$elem['price']}}
              </span>
            </div>
            <div class="rightOnSaleDate">
              <p class="subtitle">
                On Sale Date:
              </p>
              <span>
                {{$elem['sale_date']}}
              </span>
            </div>
          </div>
        </div>
        <div class="containerBoxInfoBottom">
          <div class="boxInfoBottom">
            <div class="boxOne">
              <a href="">
                digital comics
              </a>
              <img src="{{ asset('/storage/assets/icons-1.png') }}" alt="">
            </div>
            <div class="boxTwo">
              <a href="">
                shop dc
              </a>
              <img src="{{ asset('/storage/assets/icons-4.png') }}" alt="">
            </div>
            <div class="boxThree">
              <a href="">
                comic shop locator
              </a>
              <img src="{{ asset('/storage/assets/icons-3.png') }}" alt="">
            </div>
            <div class="boxFour">
              <a href="">
                subscription
              </a>
              <img src="{{ asset('/storage/assets/icons-2.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </main>

  @endsection
