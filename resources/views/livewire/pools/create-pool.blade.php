<div class="max-w-2xl p-6 mx-auto bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-2xl font-semibold text-gray-800">Create a Pool</h2>

    @if (session()->has('message'))
        <div class="p-3 mb-4 text-green-700 bg-green-100 rounded-lg">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="createPool">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Pool Name</label>
            <input type="text" id="name" wire:model="name" class="w-full p-2 border rounded">
            @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-gray-700">Amount</label>
            <input type="number" id="amount" wire:model="amount" class="w-full p-2 border rounded">
            @error('amount') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="cycle_days" class="block text-gray-700">Cycle Days</label>
            <input type="number" id="cycle_days" wire:model="cycle_days" class="w-full p-2 border rounded">
            @error('cycle_days') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="max_participants" class="block text-gray-700">Max Participants (Optional)</label>
            <input type="number" id="max_participants" wire:model="max_participants" class="w-full p-2 border rounded">
            @error('max_participants') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="min_participants" class="block text-gray-700">Min Participants (Optional)</label>
            <input type="number" id="min_participants" wire:model="min_participants" class="w-full p-2 border rounded">
            @error('min_participants') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="start_date" class="block text-gray-700">Start Date</label>
            <input type="date" id="start_date" wire:model="start_date" class="w-full p-2 border rounded">
            @error('start_date') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="end_date" class="block text-gray-700">End Date</label>
            <input type="date" id="end_date" wire:model="end_date" class="w-full p-2 border rounded">
            @error('end_date') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="next_payment_date" class="block text-gray-700">Next Payment Date</label>
            <input type="date" id="next_payment_date" wire:model="next_payment_date" class="w-full p-2 border rounded">
            @error('next_payment_date') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full p-2 text-white bg-blue-600 rounded hover:bg-blue-700">
            Create Pool
        </button>
    </form>
</div>


{{-- <!-- Card Section -->
 <!-- Styles / Scripts -->
<div class="bg-gray-200">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8 lg:py-14">
        <div class="p-6 bg-white shadow-xs rounded-xl">
          <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">Create a Pool</h2>
            <p class="text-sm text-gray-600">Fill in the details to create your savings pool.</p>
          </div>
      
          <form>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
              <!-- Left Section -->
              <div class="space-y-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700">Pool Name</label>
                  <input type="text" class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter pool name">
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700">Contribution Amount</label>
                  <input type="number" class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter amount">
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700">Start Date</label>
                  <input type="date" class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700">End Date</label>
                  <input type="date" class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
              </div>
      
              <!-- Right Section -->
              <div class="space-y-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700">Cycle Frequency</label>
                  <select class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="weekly">Weekly</option>
                    <option value="bi-weekly">Bi-Weekly</option>
                    <option value="monthly">Monthly</option>
                  </select>
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700">Next Cycle Date</label>
                  <input type="date" class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700">Number of Participants</label>
                  <input type="number" class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter number">
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700">Pool Description</label>
                  <textarea class="w-full p-2 border-gray-200 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter description"></textarea>
                </div>
              </div>
            </div>
      
            <div class="flex justify-end gap-2 mt-6">
              <button type="button" class="px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">Cancel</button>
              <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Create Pool</button>
            </div>
          </form>
        </div>
      </div>
      
  
    </div>
  
   --}}