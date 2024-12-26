<x-admin.layout>

    <x-slot:page_heading>
        <div class="flex items-center justify-between">
            Users    
            <a href="/users/type" class="px-4 py-2 text-white bg-gray-900 text-sm rounded-md">Add User</a>
        </div>
    </x-slot:page_heading>

    <div class="container p-2 mx-auto sm:p-4">

        <form method="get">
            @csrf
            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-1 justify-end">
                <input 
                    type="text" 
                    name="search" 
                    class="rounded-md w-full md:w-96 px-4 py-2 border" 
                    placeholder="Enter name, email or phone number" 
                    value="{{ request()->query('search') }}"
                />
                <!--<input type="text" class="rounded-md w-96 px-4 py-2 border" placeholder="Enter name, email or phone number" />-->
                <select class="rounded-md w-full md:w-44 px-4 py-2 border" name="user_type">
                    <option {{ request()->query('user_type') == '' ? 'selected' : '' }} value="">Select user type</option>
                    <option value="1" {{ request()->query('user_type') == '1' ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ request()->query('user_type') == '2' ? 'selected' : '' }}>Sub Admin</option>
                    <option value="3" {{ request()->query('user_type') == '3' ? 'selected' : '' }}>Instructor</option>
                    <option value="4" {{ request()->query('user_type') == '4' ? 'selected' : '' }}>Member</option>
                </select>
                <select class="rounded-md w-full md:w-36 px-4 py-2 border" name="status" value="{{ request()->query('status') }}>
                    <option value="">Select Status</option>
                    <option value="active" {{ request()->query('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request()->query('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                <button class="px-4 w-full md:w-24 py-2 text-white bg-gray-900 text-sm rounded-md font-bold shadow-md">Search</button>
            </div>
        </form>

        <div class="overflow-x-auto rounded-md shadow-md mt-5">
            <table class="w-full p-6 text-sm text-left whitespace-nowrap">
                <thead>
                    <tr class="bg-gray-800 text-white font-bold tracking-wide">
                        <th class="p-4">Name</th>
                        <th class="p-4">Phone</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="border-b dark:bg-gray-50 dark:border-gray-300">
                    @if($users)
                        @foreach( $users as $user )
                            <tr class="font-normal tracking-wide text-md font-bold">
                                <td class="px-3 py-2">
                                    <p>{{ $user->name }}</p>
                                </td>
                                <td class="px-3 py-2">
                                    <p>{{ $user->phone_number }}</p>
                                </td>
                                <td class="px-3 py-2">
                                    <p>{{ $user->email }}</p>
                                </td>
                                <td class="px-3 py-2">
                                    <button type="button" title="Open details" class="p-1 rounded-full dark:text-gray-400 hover:dark:bg-gray-300 focus:dark:bg-gray-300">
                                        <svg viewBox="0 0 24 24" class="w-4 h-4 fill-current">
                                            <path d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <div class="mt-5">
            {{ $users->withQueryString()->links() }}
        </div>

    </div>

</x-admin.layout>