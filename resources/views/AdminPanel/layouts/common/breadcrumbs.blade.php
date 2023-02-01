<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
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
