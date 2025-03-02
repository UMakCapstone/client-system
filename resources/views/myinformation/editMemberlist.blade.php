@extends('layouts.layout')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-12 gap-6">
        {{-- Sidebar --}}
        @include('components.sidebar')

        <!-- Members Masterlist Content -->
<div class="col-span-9">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6">Members Masterlist</h1>

        <form action="#" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6">
                <!-- First Name -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        First Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="first_name" value="{{ old('first_name', $driver->first_name ?? '') }}" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('first_name') border-red-500 @enderror"
                    placeholder="Enter first name" required oninvalid="this.setCustomValidity('Please fill out this field')" oninput="this.setCustomValidity('')">
                    @error('first_name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                     @enderror
                </div>

                <!-- Middle Name -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Middle Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="middle_name" value="{{ old('middle_name', $driver->middle_name ?? '') }}" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('middle_name') border-red-500 @enderror"
                    placeholder="Enter middle name" oninvalid="this.setCustomValidity('Please fill out this field')" oninput="this.setCustomValidity('')">
                    @error('middle_name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Last Name -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Last Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="last_name" value="{{ old('last_name', $driver->last_name ?? '') }}" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('last_name') border-red-500 @enderror"
                    placeholder="Enter last name" required oninvalid="this.setCustomValidity('Please fill out this field')" oninput="this.setCustomValidity('')">
                    @error('last_name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Sex -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Sex <span class="text-red-500">*</span>
                    </label>
                    <select name="sex" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('sex') border-red-500 @enderror"
                    required oninvalid="this.setCustomValidity('Please select an option')" oninput="this.setCustomValidity('')">
                        <option value="">Select Sex</option>
                        <option value="male" {{ old('sex', $driver->sex ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('sex', $driver->sex ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('sex')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Birthdate -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Birthdate <span class="text-red-500">*</span>
                    </label>
                    <input type="date" name="birthdate" value="{{ old('birthdate', $driver->birthdate ?? '') }}"
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('birthdate') border-red-500 @enderror"
                    required oninvalid="this.setCustomValidity('Please select a date')" oninput="this.setCustomValidity('')">
                    @error('birthdate')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Membership Type -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>
                        Membership Type <span class="text-red-500">*</span>
                    </label>
                    <select name="membership_type" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('membership_type') border-red-500 @enderror"
                    required oninvalid="this.setCustomValidity('Please select a membership type')" oninput="this.setCustomValidity('')">
                        <option value="">Select Membership Type</option>
                        <option value="operator" {{ old('membership_type', $driver->membership_type ?? '') == 'operator' ? 'selected' : '' }}>Operator</option>
                        <option value="driver" {{ old('membership_type', $driver->membership_type ?? '') == 'driver' ? 'selected' : '' }}>Driver</option>
                        <option value="allied_worker" {{ old('membership_type', $driver->membership_type ?? '') == 'allied_worker' ? 'selected' : '' }}>Allied Worker</option>
                        <option value="others" {{ old('membership_type', $driver->membership_type ?? '') == 'others' ? 'selected' : '' }}>Others</option>
                    </select>
                    @error('membership_type')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Address -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Complete Address <span class="text-red-500">*</span>
                    </label>
                    <textarea name="address" rows="2" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('address') border-red-500 @enderror"
                    required oninvalid="this.setCustomValidity('Please provide your address')" oninput="this.setCustomValidity('')">{{ old('address', $driver->address ?? '') }}</textarea>
                    @error('address')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Contact Number -->
                <div>
                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Contact Number <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" name="contact_number" value="{{ old('contact_number', $driver->contact_number ?? '') }}"
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('contact_number') border-red-500 @enderror"
                    required pattern="[0-9]{11}" placeholder="Enter 11-digit phone number" oninvalid="this.setCustomValidity('Please enter a valid 11-digit phone number')" oninput="this.setCustomValidity('')">
                    @error('contact_number')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end space-x-4">
                <a href="#"
                   class="px-6 py-2.5 rounded-lg text-gray-700 hover:bg-gray-50 border border-gray-300 transition-all duration-200">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>


    </div>
</div>
@endsection