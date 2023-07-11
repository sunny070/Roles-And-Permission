<x-admin-layout>
   
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{ route('admin.roles.create') }}" class="px-4 py-2 bg-green-400 hover:bg-green-300 rounded-md">Create Role</a>

            </div>
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                
                <th scope="col" class="flex justify-end px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 f whitespace-nowrap ">
                    <div class="flex items-center">
                        {{ $role->name }}
                    </div>
                    
                </td>
                <td>
                    <div class="flex justify-end">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.roles.edit',$role->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                            <form  class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"  method="POST" action="{{ route('admin.roles.destroy',$role->id) }}" onsubmit="return confirm('Are You Sure?');">
                                @csrf
                                @method('DELETE')
                             <button  type="submit"> Delete</button>
                            </form>   
                        </div>
                   </div>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>
