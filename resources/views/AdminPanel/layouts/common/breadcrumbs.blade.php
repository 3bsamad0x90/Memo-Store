<div class="content-header">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-sm-3">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb mt-1">
            @if(isset($breadcrumbs))
            @foreach($breadcrumbs as $item)
                @if($item['url'] != '')
                    <li class="breadcrumb-item">
                        <a href="{{$item['url']}}">{{$item['text']}}</a>
                    </li>
                @else
                    <li class="breadcrumb-item active">
                        {{$item['text']}}
                    </li>
                @endif
            @endforeach
            @endif
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
