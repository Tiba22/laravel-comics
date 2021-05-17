<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
  <body>
    <div class="jumboimg">
      <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">
    </div>
    <div class="jumbo">
      <div class="jumbocomics">

        <ul>
          @foreach ($data as $item)
            <li>
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
            </li>
          @endforeach
        </ul>

      </div>
    </div>
  </body>
  </html>
