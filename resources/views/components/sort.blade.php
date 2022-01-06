<div>
    <a href="{{ request()->fullUrlWithQuery([$field => $sort]) }}">
        {{ $name }}
        @if($sort == 'asc')

        @elseif($sort == 'desc')
            <i class="bi bi-caret-up-fill"></i>
        @else
            <i class="bi bi-caret-down-fill"></i>
        @endif
    </a>
</div>