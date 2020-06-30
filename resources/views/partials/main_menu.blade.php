@foreach ($items as $menu_item)
    @php
        $submenu = $menu_item->children;
    @endphp

    @if ($menu_item->children->count())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ $menu_item->url }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu_item->title }}</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($menu_item->children as $item)
                    <a class="dropdown-item" href="{{$item->url}}">{{$item->title}}</a>
                @endforeach
            </div>
        </li>
    @else
        <li class="nav-item active">
            <a class="nav-link" href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
        </li>
    @endif
                       
@endforeach