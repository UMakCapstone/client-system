@extends('layouts.layout')

@section('content')
<div class="min-h-screen bg-gray-50 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 gap-6">

            {{-- Sidebar --}}
            @include('components.sidebar')

            {{-- Main Content --}}
            <div class="col-span-9">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-bold text-gray-800">Edit Cooperative Vehicle Details</h2>
                        <a href="#" class="text-gray-500 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </div>

                    <form action="#" method="POST" class="space-y-6" onsubmit="return validateForm()">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-6">
                            {{-- Vehicle Information --}}
                            <div class="space-y-6">
                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Type of Unit <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="unit_type" id="unit_type" value="{{ old('unit_type', $vehicle->unit_type ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('unit_type') border-red-500 @enderror"
                                           placeholder="Enter type of unit" required>
                                    <p id="unit_type_error" class="hidden mt-1 text-sm text-red-500">Please enter the type of unit</p>
                                    @error('unit_type')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        MV File No. <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="mv_file_no" id="mv_file_no" value="{{ old('mv_file_no', $vehicle->mv_file_no ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('mv_file_no') border-red-500 @enderror"
                                           placeholder="Enter MV file number" required>
                                    <p id="mv_file_no_error" class="hidden mt-1 text-sm text-red-500">Please enter the MV file number</p>
                                    @error('mv_file_no')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        Engine No. <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="engine_no" id="engine_no" value="{{ old('engine_no', $vehicle->engine_no ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('engine_no') border-red-500 @enderror"
                                           placeholder="Enter engine number" required>
                                    <p id="engine_no_error" class="hidden mt-1 text-sm text-red-500">Please enter the engine number</p>
                                    @error('engine_no')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        Chassis No. <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="chassis_no" id="chassis_no" value="{{ old('chassis_no', $vehicle->chassis_no ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('chassis_no') border-red-500 @enderror"
                                           placeholder="Enter chassis number" required>
                                    <p id="chassis_no_error" class="hidden mt-1 text-sm text-red-500">Please enter the chassis number</p>
                                    @error('chassis_no')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        Plate No. <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="plate_no" id="plate_no" value="{{ old('plate_no', $vehicle->plate_no ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('plate_no') border-red-500 @enderror"
                                           placeholder="Enter plate number" required>
                                    <p id="plate_no_error" class="hidden mt-1 text-sm text-red-500">Please enter the plate number</p>
                                    @error('plate_no')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Registration Information --}}
                            <div class="space-y-6">
                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        LTFRB Case No. <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="ltfrb_case_no" id="ltfrb_case_no" value="{{ old('ltfrb_case_no', $vehicle->ltfrb_case_no ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('ltfrb_case_no') border-red-500 @enderror"
                                           placeholder="Enter LTFRB case number" required>
                                    <p id="ltfrb_case_no_error" class="hidden mt-1 text-sm text-red-500">Please enter the LTFRB case number</p>
                                    @error('ltfrb_case_no')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Date Granted <span class="text-red-500">*</span>
                                    </label>
                                    <input type="date" name="date_granted" id="date_granted" value="{{ old('date_granted', $vehicle->date_granted ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('date_granted') border-red-500 @enderror"
                                           required>
                                    <p id="date_granted_error" class="hidden mt-1 text-sm text-red-500">Please select the date granted</p>
                                    @error('date_granted')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Date of Expiry <span class="text-red-500">*</span>
                                    </label>
                                    <input type="date" name="date_expiry" id="date_expiry" value="{{ old('date_expiry', $vehicle->date_expiry ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('date_expiry') border-red-500 @enderror"
                                           required>
                                    <p id="date_expiry_error" class="hidden mt-1 text-sm text-red-500">Please select the date of expiry</p>
                                    @error('date_expiry')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        Origin <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="origin" id="origin" value="{{ old('origin', $vehicle->origin ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('origin') border-red-500 @enderror"
                                           placeholder="Enter origin" required>
                                    <p id="origin_error" class="hidden mt-1 text-sm text-red-500">Please enter the origin</p>
                                    @error('origin')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                        </svg>
                                        Via <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="via" id="via" value="{{ old('via', $vehicle->via ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('via') border-red-500 @enderror"
                                           placeholder="Enter route via" required>
                                    <p id="via_error" class="hidden mt-1 text-sm text-red-500">Please enter the via route</p>
                                    @error('via')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        Destination <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="destination" id="destination" value="{{ old('destination', $vehicle->destination ?? '') }}"
                                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all duration-200 @error('destination') border-red-500 @enderror"
                                           placeholder="Enter destination" required>
                                    <p id="destination_error" class="hidden mt-1 text-sm text-red-500">Please enter the destination</p>
                                    @error('destination')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end space-x-4 pt-6 border-t">
                            <a href="#"
                               class="px-6 py-2.5 rounded-lg text-gray-700 hover:bg-gray-50 border border-gray-300 transition-all duration-200">
                                Cancel
                            </a>
                            <button type="submit"
                                    class="px-6 py-2.5 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-all duration-200">
                                Save Vehicle Details
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function validateForm() {
    let isValid = true;
    const requiredFields = [
        'unit_type', 'mv_file_no', 'engine_no', 'chassis_no', 'plate_no', 
        'ltfrb_case_no', 'date_granted', 'date_expiry', 'origin', 'via', 'destination'
    ];
    
    // Reset all error messages
    requiredFields.forEach(field => {
        document.getElementById(`${field}_error`).classList.add('hidden');
    });
    
    // Check each required field
    requiredFields.forEach(field => {
        const input = document.getElementById(field);
        if (!input.value.trim()) {
            document.getElementById(`${field}_error`).classList.remove('hidden');
            isValid = false;
        }
    });
    
    // Additional validation for dates
    if (document.getElementById('date_granted').value && document.getElementById('date_expiry').value) {
        const dateGranted = new Date(document.getElementById('date_granted').value);
        const dateExpiry = new Date(document.getElementById('date_expiry').value);
        
        if (dateExpiry <= dateGranted) {
            document.getElementById('date_expiry_error').textContent = 'Expiry date must be after granted date';
            document.getElementById('date_expiry_error').classList.remove('hidden');
            isValid = false;
        }
    }
    
    return isValid;
}
</script>
@endsection