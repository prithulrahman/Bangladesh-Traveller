<x-app-layout title="Explore">
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">Find Your Bus</h1>

            <!-- Search Form -->
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- From Destination -->
                    <div class="border border-gray-400 rounded-xl p-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">From Division</label>
                        <select id="from-division-select" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select Division</option>
                            @php $divisions = App\Models\Division::all(); @endphp
                            @foreach($divisions as $division)
                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                            @endforeach
                        </select>

                        <label class="block text-sm font-medium text-gray-700 mb-2 mt-4">From District</label>
                        <select id="from-district-select" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" disabled>
                            <option value="">Select District</option>
                        </select>
                    </div>

                    <!-- To Destination -->
                    <div class="border border-gray-400 rounded-xl p-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">To Division</label>
                        <select id="to-division-select" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select Division</option>
                            @foreach($divisions as $division)
                                <option value="{{ $division->id }}" {{ $toDivisionId == $division->id ? 'selected' : '' }}>{{ $division->name }}</option>
                            @endforeach
                        </select>

                        <label class="block text-sm font-medium text-gray-700 mb-2 mt-4">To District</label>
                        <select id="to-district-select" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" {{ $toDivisionId ? '' : 'disabled' }}>
                            <option value="">Select District</option>
                            @if($toDivisionId)
                                @php $toDistricts = App\Models\District::where('division_id', $toDivisionId)->get(); @endphp
                                @foreach($toDistricts as $district)
                                    <option value="{{ $district->id }}" {{ $toDistrictId == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>

            <!-- Results -->
            <div id="results-container" class="hidden">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Available Buses</h2>
                <div id="buses-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Buses will be loaded here -->
                </div>
            </div>

            <!-- No Results Message -->
            <div id="no-results" class="hidden text-center py-12">
                <p class="text-gray-500 text-lg">No buses found for this route. Please select different destinations.</p>
            </div>
        </div>
    </div>

    <style>
        #from-division-select,
        #from-district-select,
        #to-division-select,
        #to-district-select {
            color: #000;
        }

        #from-division-select option,
        #from-district-select option,
        #to-division-select option,
        #to-district-select option {
            color: #000;
            background-color: #fff;
        }
    </style>

    <script>
        function loadDistricts(divisionSelectId, districtSelectId) {
            document.getElementById(divisionSelectId).addEventListener('change', function() {
                const divisionId = this.value;
                const districtSelect = document.getElementById(districtSelectId);

                districtSelect.innerHTML = '<option value="">Select District</option>';
                districtSelect.disabled = true;

                if (divisionId === '') {
                    return;
                }

                fetch(`/api/districts/${divisionId}`)
                    .then(response => response.json())
                    .then(districts => {
                        districts.forEach(district => {
                            const option = document.createElement('option');
                            option.value = district.id;
                            option.textContent = district.name;
                            districtSelect.appendChild(option);
                        });
                        districtSelect.disabled = false;
                    })
                    .catch(error => console.error('Error fetching districts:', error));
            });

            document.getElementById(districtSelectId).addEventListener('change', searchBuses);
        }

        function searchBuses() {
            const fromDistrictId = document.getElementById('from-district-select').value;
            const toDistrictId = document.getElementById('to-district-select').value;

            document.getElementById('results-container').classList.add('hidden');
            document.getElementById('no-results').classList.add('hidden');

            if (!fromDistrictId || !toDistrictId) {
                return;
            }

            fetch(`/api/buses/search/${fromDistrictId}/${toDistrictId}`)
                .then(response => response.json())
                .then(routes => {
                    const busesList = document.getElementById('buses-list');
                    busesList.innerHTML = '';

                    if (routes.length === 0) {
                        document.getElementById('no-results').classList.remove('hidden');
                        return;
                    }

                    routes.forEach(route => {
                        const card = document.createElement('div');
                        card.className = 'bg-white rounded-lg shadow p-6 border-l-4 border-blue-500';
                        card.innerHTML = `
                            <h3 class="text-lg font-bold text-gray-900 mb-2">${route.bus.name}</h3>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p><span class="font-semibold">Route:</span> ${route.origin_district.name} → ${route.destination_district.name}</p>
                                <p><span class="font-semibold">Distance:</span> ${route.distance_km} km</p>
                                <p><span class="font-semibold">Fare:</span> ৳${parseFloat(route.fare).toFixed(2)}</p>
                            </div>
                            <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Book Now
                            </button>
                        `;
                        busesList.appendChild(card);
                    });

                    document.getElementById('results-container').classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error fetching buses:', error);
                    document.getElementById('no-results').classList.remove('hidden');
                });
        }

        // Initialize
        loadDistricts('from-division-select', 'from-district-select');
        loadDistricts('to-division-select', 'to-district-select');

        // If data was passed from home page, trigger search after page loads
        window.addEventListener('load', function() {
            const toDistrictId = document.getElementById('to-district-select').value;
            if (toDistrictId) {
                searchBuses();
            }
        });
    </script>
</x-app-layout>