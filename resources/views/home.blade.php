<x-app-layout title="Home">

    <!-- Hero Section -->
    <section class="relative min-h-screen bg-cover bg-center flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-12 sm:py-20 before:absolute before:inset-0 before:bg-black before:opacity-30" style="background-image: url('{{ asset("images/person-traveling-enjoying-their-vacation.jpg") }}');" id="page1">
        <div class="relative z-10 flex flex-col items-center justify-center text-center max-w-4xl">
            <div class="mb-4 sm:mb-6 inline-block">
                <p class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white drop-shadow-lg">Welcome to</p>
                <p class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300 drop-shadow-lg mt-2 pb-4">Bangladesh Travellers</p>
            </div>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white drop-shadow-lg mb-4 sm:mb-6 lg:mb-8">Explore Bangladesh</h1>
            <p class="text-base sm:text-lg md:text-xl text-white drop-shadow-md mb-8 sm:mb-10 lg:mb-12 px-2">Discover the most beautiful and historical destinations across the country</p>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full sm:w-auto">
                @php
                    $divisions = App\Models\Division::all();
                @endphp
                <form class="w-full sm:w-auto" action="{{ route('explore') }}" method="GET">
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full sm:w-auto">
                        <!-- Division Dropdown -->
                        <select id="division-select" name="to_division" class="px-6 sm:px-8 lg:px-10 py-3 sm:py-4 text-sm sm:text-base lg:text-lg font-bold rounded-lg bg-blue-700 text-white cursor-pointer transition-all duration-300 hover:shadow-2xl hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Select Division</option>
                            @foreach($divisions as $division)
                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                            @endforeach
                        </select>

                        <!-- District Dropdown -->
                        <select id="district-select" name="to_district" class="px-6 sm:px-8 lg:px-10 py-3 sm:py-4 text-sm sm:text-base lg:text-lg font-bold rounded-lg bg-cyan-700 text-white cursor-pointer transition-all duration-300 hover:shadow-2xl hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-cyan-400 disabled:opacity-50 disabled:cursor-not-allowed" title="Select Division" disabled>
                            <option value="">Select District</option>
                        </select>

                        <!-- Explore Button -->
                        <button type="submit" class="w-full sm:w-auto bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 sm:py-4 px-6 sm:px-8 lg:px-10 rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Explore
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('division-select').addEventListener('change', function() {
            const divisionId = this.value;
            const districtSelect = document.getElementById('district-select');

            // Reset district dropdown
            districtSelect.innerHTML = '<option value="">Select District</option>';

            if (divisionId === '') {
                districtSelect.disabled = true;
                districtSelect.title = "Select Division first";
                return;
            }
            districtSelect.title = "";
            // Fetch districts for the selected division
            fetch(`/api/districts/${divisionId}`)
                .then(response => response.json())
                .then(districts => {
                    districts.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district.id;
                        option.textContent = district.name;
                        option.style.color = '#000';
                        option.style.backgroundColor = '#fff';
                        districtSelect.appendChild(option);
                    });
                    districtSelect.disabled = false;
                })
                .catch(error => {
                    console.error('Error fetching districts:', error);
                    districtSelect.disabled = true;
                });
        });
    </script>

    <style>
        #district-select option {
            color: #000 !important;
            background-color: #fff !important;
        }

        #division-select option {
            color: #000 !important;
            background-color: #fff !important;
        }
    </style>
</x-app-layout>