<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Data Pendaki') }}
            </h2>
            <a href="{{ route('admin.pendaki.index') }}" class="text-gray-600 hover:text-gray-900">
                ← Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <form action="{{ route('admin.pendaki.update', $pendaki) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- No KTP -->
                        <div>
                            <label for="no_ktp" class="block text-sm font-semibold text-gray-700 mb-2">
                                No KTP <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="no_ktp" 
                                   name="no_ktp" 
                                   value="{{ old('no_ktp', $pendaki->no_ktp) }}"
                                   class="w-full px-4 py-3 border @error('no_ktp') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                   required>
                            @error('no_ktp')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="nama" 
                                   name="nama" 
                                   value="{{ old('nama', $pendaki->nama) }}"
                                   class="w-full px-4 py-3 border @error('nama') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                   required>
                            @error('nama')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Alamat -->
                        <div>
                            <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-2">
                                Alamat <span class="text-red-500">*</span>
                            </label>
                            <textarea id="alamat" 
                                      name="alamat" 
                                      rows="3"
                                      class="w-full px-4 py-3 border @error('alamat') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                      required>{{ old('alamat', $pendaki->alamat) }}</textarea>
                            @error('alamat')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tanggal Pendakian -->
                        <div>
                            <label for="tanggal_pendakian" class="block text-sm font-semibold text-gray-700 mb-2">
                                Tanggal Pendakian <span class="text-red-500">*</span>
                            </label>
                            <input type="date" 
                                   id="tanggal_pendakian" 
                                   name="tanggal_pendakian" 
                                   value="{{ old('tanggal_pendakian', $pendaki->tanggal_pendakian->format('Y-m-d')) }}"
                                   class="w-full px-4 py-3 border @error('tanggal_pendakian') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                   required>
                            @error('tanggal_pendakian')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- No HP -->
                        <div>
                            <label for="no_hp" class="block text-sm font-semibold text-gray-700 mb-2">
                                No HP/WhatsApp <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="no_hp" 
                                   name="no_hp" 
                                   value="{{ old('no_hp', $pendaki->no_hp) }}"
                                   class="w-full px-4 py-3 border @error('no_hp') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                   required>
                            @error('no_hp')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="flex space-x-4 pt-4">
                            <button type="submit" class="flex-1 bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                                Update Data
                            </button>
                            <a href="{{ route('admin.pendaki.index') }}" class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-semibold transition">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
