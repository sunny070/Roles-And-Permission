<h1>Create Role</h1><x-admin-layout>
   
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm-rounded-lg p-2">
            <div class="flex  p-2">
                <a href="{{ route('admin.permissions.index') }}" class="px-4 py-2 bg-gray-400 text-slate-100 hover:bg-gray-300 rounded-md">Permission Index</a>

            </div>
            
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('admin.permissions.store') }}">
                  @csrf
                  <div class="sm:col-span-6">
                    <label for="title" class="block text-sm font-medium text-gray-700"> Add Permission </label>
                    <div class="mt-1">
                      <input type="name" id="name"  name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('name')<span class="text-red-400 text-sm">{{ $message }}</span>
                      
                    @enderror
                  </div>
                 
                  </div>
                  <div class="sm:col-span-6 pt-5">
                   <button type="submit" class="px-4 py-2 bg-gray-500 hover:bg-gray-400 rounded-md ">Create</button> 
                    </div>
                  </div>
                </form>
              </div>
        </div>
    </div>
        </div>
    </div>
</x-admin-layout>
