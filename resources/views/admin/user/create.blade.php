<x-admin.layout>

    <x-slot:page_heading>
        <div class="flex items-center justify-between">
            Add User
            <a href="/users" class="px-4 py-2 text-white bg-gray-900 text-sm rounded-md">Back</a>
        </div>
    </x-slot:page_heading>

    @includeWhen( $user_type === 'admin', 'admin.user.create-admin')
    @includeWhen( $user_type === 'sub_admin', 'admin.user.create-subadmin')
    @includeWhen( $user_type === 'instructor', 'admin.user.create-instructor')
    @includeWhen( $user_type === 'member', 'admin.user.create-member')
    @includeWhen( $user_type === null, 'admin.user.no-type-selected')

</x-admin.layout>