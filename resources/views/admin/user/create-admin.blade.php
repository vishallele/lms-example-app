<div class="container p-2 mx-auto sm:p-4 flex justify-center">
	<div class="flex flex-col max-w-md p-6 rounded-md sm:p-10 dark:bg-gray-50 dark:text-gray-800 w-full">
		<div class="mb-8 text-center">
				<h1 class="my-3 text-4xl font-bold"></h1>
				<p class="text-lg font-bold dark:text-gray-600">Add new admin user</p>
		</div>
		<form action="/user/store" method="POST" class="space-y-12">
			<div class="space-y-2">
				<div>
					<label for="name" class="block mb-2 text-sm">Name</label>
					<input 
						type="name" 
						name="name" 
						id="name" 
						placeholder="Enter name" 
						class="w-full px-3 py-2 border rounded-md dark:border-gray-300 dark:bg-gray-50 dark:text-gray-800"
					/>
					@error('name')
						<p class="text-red-400 text-sm">{{ $message }}</p>
					@enderror
				</div>
				<div>
					<label for="email" class="block mb-2 text-sm">Email address</label>
					<input 
						type="email" 
						name="email" 
						id="email" 
						placeholder="leroy@jenkins.com" 
						class="w-full px-3 py-2 border rounded-md dark:border-gray-300 dark:bg-gray-50 dark:text-gray-800"
					>
					@error('email')
						<p class="text-red-400 text-sm">{{ $message }}</p>
					@enderror
				</div>
				<div>
					<div class="flex justify-between mb-2">
							<label for="password" class="text-sm">Password</label>
					</div>
					<input 
						type="password" 
						name="password" 
						id="password" 
						placeholder="*****" 
						class="w-full px-3 py-2 border rounded-md dark:border-gray-300 dark:bg-gray-50 dark:text-gray-800"
					>
					@error('password')
						<p class="text-red-400 text-sm">{{ $message }}</p>
					@enderror
				</div>
				<div>
					<div class="flex justify-between mb-2">
							<label for="password_confirmation" class="text-sm">Confirm Password</label>
					</div>
					<input 
						type="password" 
						name="password_confirmation" 
						id="password_confirmation" 
						placeholder="*****" 
						class="w-full px-3 py-2 border rounded-md dark:border-gray-300 dark:bg-gray-50 dark:text-gray-800"
					>
				</div>
			</div>
			<div>
				<div>
					<button type="submit" class="w-full px-8 py-3 font-semibold rounded-md dark:bg-gray-800 text-white">Submit</button>
				</div>
			</div>
			@csrf
		</form>
	</div>
</div>