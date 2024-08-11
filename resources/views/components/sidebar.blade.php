<!--Sidebar-->
<aside id="sidebar" class="hidden w-1/2 border-r bg-side-nav md:w-1/6 lg:w-1/6 border-side-nav md:block lg:block">

    <ul class="flex flex-col list-reset">
        <li class="w-full h-full px-2 py-3 bg-white border-b border-light-border">
            <a href="{{ route('dashboard') }}"
                class="font-sans text-sm font-hairline no-underline hover:font-normal text-nav-item">
                <i class="float-left mx-2 fas fa-tachometer-alt"></i>
                Dashboard
                <span><i class="float-right fas fa-angle-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full px-2 py-3 border-b border-light-border">
            <a href="forms.html" class="font-sans text-sm font-hairline no-underline hover:font-normal text-nav-item">
                <i class="float-left mx-2 fab fa-wpforms"></i>
                Forms
                <span><i class="float-right fa fa-angle-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full px-2 py-3 border-b border-light-border">
            <a href="buttons.html" class="font-sans text-sm font-hairline no-underline hover:font-normal text-nav-item">
                <i class="float-left mx-2 fas fa-grip-horizontal"></i>
                Buttons
                <span><i class="float-right fa fa-angle-right"></i></span>
            </a>
        </li>
        <li class="relative w-full h-full px-2 py-3 border-b border-light-border">
            <a href="#" class="font-sans text-sm font-hairline no-underline hover:font-normal text-nav-item">
                <i class="float-left mx-2 fas fa-table"></i>
                Tables
                <span><i class="float-right fa fa-angle-right"></i></span>
            </a>
            <ul class="absolute left-0 hidden w-full mt-2 bg-white shadow-lg top-full list-reset">
                <li class="px-2 py-3 border-b border-light-border">
                    <a href="{{ route('kegiatan.index') }}" class="no-underline hover:font-normal text-nav-item">
                        Kegiatan
                    </a>
                </li>
                <li class="px-2 py-3 border-b border-light-border">
                    <a href="{{ route('topik.index') }}" class="no-underline hover:font-normal text-nav-item">
                        Topik
                    </a>
                </li>
                <li class="px-2 py-3 border-b border-light-border">
                    <a href="{{ route('peluang.index') }}" class="no-underline hover:font-normal text-nav-item">
                        Peluang
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside>
<!--/Sidebar-->

<script>
    // JavaScript to handle the dropdown toggle
    document.querySelectorAll('#sidebar li').forEach(function(el) {
        el.addEventListener('click', function() {
            let dropdown = el.querySelector('ul');
            if (dropdown) {
                dropdown.classList.toggle('hidden');
            }
        });
    });
</script>
