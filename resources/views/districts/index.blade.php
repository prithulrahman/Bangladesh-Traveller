<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-300 shadow-xl overflow-hidden">
            <div class="p-8 lg:p-12">
                <h2 class="text-3xl font-black text-slate-900 mb-6">Districts List</h2>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-blue-100">
                                <th class="px-6 py-3 border-b border-slate-300 text-left text-sm font-semibold text-slate-700">ID</th>
                                <th class="px-6 py-3 border-b border-slate-300 text-left text-sm font-semibold text-slate-700">District Name</th>
                                <th class="px-6 py-3 border-b border-slate-300 text-left text-sm font-semibold text-slate-700">Division</th>
                                <th class="px-6 py-3 border-b border-slate-300 text-left text-sm font-semibold text-slate-700">Latitude</th>
                                <th class="px-6 py-3 border-b border-slate-300 text-left text-sm font-semibold text-slate-700">Longitude</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($disctricts as $district)
                                <tr class="hover:bg-blue-50 transition-colors">
                                    <td class="px-6 py-4 border-b border-slate-200 text-sm text-slate-800">{{ $district->id }}</td>
                                    <td class="px-6 py-4 border-b border-slate-200 text-sm text-slate-800">{{ $district->name }}</td>
                                    <td class="px-6 py-4 border-b border-slate-200 text-sm text-slate-800">{{ $district->division->name }}</td>
                                    <td class="px-6 py-4 border-b border-slate-200 text-sm text-slate-800">{{ $district->lat }}</td>
                                    <td class="px-6 py_4 border-b border-slate-200 text-sm text-slate-800">{{ $district->long }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>