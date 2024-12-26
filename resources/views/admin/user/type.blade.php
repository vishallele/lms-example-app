<x-admin.layout>

    <x-slot:page_heading>
        <div class="flex items-center justify-between">
            Select User Type
            <a href="/users" class="px-4 py-2 text-white bg-gray-900 text-sm rounded-md">Back</a>
        </div>
    </x-slot:page_heading>

    <div class="container p-2 mx-auto sm:p-4">
        <form action="/user/create">
            @csrf
            <div class="flex justify-center divide-y-2">
                <div class="flex flex-col gap-4 w-96">

                    <div class="p-4 border border-2 border-gray-600 w-full rounded-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <input type="radio" name="type" value="admin"/>
                            </div>
                            <div class="font-bold text-sm text-gray-700">
                                Admin
                            </div>
                        </div>
                    </div>

                    <div class="p-4 border border-2 border-gray-600 w-full rounded-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <input type="radio" name="type" value="sub_admin"/>
                            </div>
                            <div class="font-bold text-sm text-gray-700">
                                Sub Admin
                            </div>
                        </div>
                    </div>

                    <div class="p-4 border border-2 border-gray-600 w-full rounded-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <input type="radio" name="type" value="instructor"/>
                            </div>
                            <div class="font-bold text-sm text-gray-700">
                                Instructor
                            </div>
                        </div>
                    </div>

                    <div class="p-4 border border-2 border-gray-600 w-full rounded-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <input type="radio" name="type" value="member"/>
                            </div>
                            <div class="font-bold text-sm text-gray-700">
                                Member
                            </div>
                        </div>
                    </div>

                    <button class="px-4 w-full py-4 text-white bg-gray-700 text-sm rounded-md font-bold shadow-md">
                        Submit
                    </button>

                </div>

            </div>
        </form>
    </div>

</x-admin.layout>