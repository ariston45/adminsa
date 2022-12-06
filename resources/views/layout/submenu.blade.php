@foreach ($childs as $child)
<li class="nav-item">
  <a href="{{ url($child->mn_slug) }}" @if (request()->is($child->mn_slug) == true ) class="nav-link active" @else class="nav-link" @endif >
    <i class="{{ $child->mn_icon_code }} nav-icon"></i>
    <p>{{ $child->mn_title }}</p>
  </a>
</li>
@endforeach