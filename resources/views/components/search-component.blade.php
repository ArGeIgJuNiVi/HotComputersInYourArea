
<div class="relative overflow-hidden">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-2 sm:py-5">
      <div class="text-center">
  
        <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
          <form>
            <div class="relative z-10 flex gap-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100">
              <div class="w-full">
                <label for="hs-search-article-1" class="block text-sm text-gray-700 font-medium"><span class="sr-only">Search product</span></label>
                <input type="text" wire:model.live.debounce.300ms="searchTerm" name="hs-search-article-1" id="hs-search-article-1" class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500" placeholder="Search product..">
              </div>
              <div>
                <a class="size-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                  <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </a>
              </div>
            </div>
          </form>
        </div>
  
        <div class="mt-10 sm:mt-20">
          @foreach ($categories as $category)
            @include('components.categories',[
              'categoryName' => $category->name,
              'category_id' => $category->id
              // 'icon' => '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>'
            ])
          @endforeach
        </div>
      </div>
    </div>
  </div>