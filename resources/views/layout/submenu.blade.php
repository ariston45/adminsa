@foreach ($childs as $child)
	<li class="nav-item">
		<a href="{{ url($child->mn_slug) }}"
			@if (request()->is($child->mn_slug . '*') == true) class="nav-link tree-submenu active" @else class="nav-link tree-submenu" @endif >
			{{-- <i class="{{ $child->mn_icon_code }} nav-icon"></i> --}}
			<img src="{{ url('image/ar_items.svg') }}" class="nav-icon" alt="nav-icon">
			<p>{{ $child->mn_title }}</p>
		</a>
	</li>
@endforeach
