<x-admin-layout>
    <x-slot name="title">Edit Data Pendaki</x-slot>
    <x-slot name="subtitle">Update informasi pendaki {{ $pendaki->nama }}</x-slot>

    <div class="max-w-3xl">
        <div class="bg-white rounded-xl shadow-md p-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-bold text-gray-900">Form Edit Pendaki</h3>
                <a href="{{ route('admin.pendaki.index') }}" class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-gray-900 transition">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>
            </div>

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
                           class="w-full px-4 py-3 border @error('no_ktp') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                           required>
                    @error('no_ktp')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
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
                           class="w-full px-4 py-3 border @error('nama') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                           required>
                    @error('nama')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
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
                              class="w-full px-4 py-3 border @error('alamat') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                              required>{{ old('alamat', $pendaki->alamat) }}</textarea>
                    @error('alamat')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
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
                           class="w-full px-4 py-3 border @error('no_hp') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                           placeholder="081234567890"
                           required>
                    @error('no_hp')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                    <a href="{{ route('admin.pendaki.index') }}" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 font-medium transition">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-lg hover:from-green-700 hover:to-green-800 font-semibold transition shadow-md flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
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
