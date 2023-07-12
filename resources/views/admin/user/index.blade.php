<x-admin-layout>
   
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                
                <th scope="col" class=" px-6 py-3">
                    Email
                </th>
                <th scope="col" class=" px-6 py-3">
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 f whitespace-nowrap ">
                    <div class="flex items-center">
                        {{ $user->name }}
                    </div>
                    
                </td>
                <td scope="row" class="px-6 py-4 f whitespace-nowrap ">
                    <div class="flex items-center">
                        {{ $user->email }}
                    </div>
                    
                </td>
                <td>
                    <div class="flex justify-end">
                        <div class="flex space-x-2">
                            
                            <a href="" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Roles</a>
                            <a href="" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Permission</a>
                            
                            <form  class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"  method="POST" action="{{ route('admin.users.destroy',$user->id) }}" onsubmit="return confirm('Are You Sure?');">
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
