<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div id="search-menu">
        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
            </path>
        </svg>
    </div>
    <!-- Dropdown menu -->
    <div id="search-wrapper" class="w-72 z-10 rounded shadow-xl bg-white absolute p-2 right-0 m-3 flex">
        <input type="search" name="s" title="Search"
            class="w-full rounded bg-gray-100 px-2 py-1 border-[1px] border-gray-200 text-sm mr-2"
            placeholder="ស្វែងរកអត្ថបទ" value="<?php echo get_search_query() ?>">
        <button type="submit" class="text-white bg-primary rounded text-sm p-2.5 text-center">
            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                </path>
            </svg>
            <span class="sr-only">Icon description</span>
        </button>
    </div>
</form>