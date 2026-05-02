<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data - Ivan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#E2E2E2] p-6 flex items-center justify-center min-h-screen">
    
    <div class="bg-white border-4 border-black p-8 rounded-3xl shadow-[12px_12px_0px_rgba(245,181,10,1)] w-full max-w-2xl">
        <div class="flex justify-between items-center mb-6 border-b-4 border-black pb-4">
            <h2 class="font-black text-3xl uppercase">EDIT KARYA</h2>
            <a href="{{ route('admin.index') }}" class="font-bold text-red-500 hover:underline">← BATAL</a>
        </div>
        
        <form action="{{ route('admin.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT') <!-- Ini wajib buat fitur update di Laravel -->
            
            <div>
                <label class="font-black block text-sm uppercase">Judul Proyek</label>
                <input type="text" name="judul" value="{{ $data->judul }}" class="w-full border-4 border-black p-2 rounded-xl font-bold" required>
            </div>
            
            <div class="bg-gray-100 p-4 border-4 border-black rounded-xl">
                <label class="font-black block text-sm uppercase mb-2">Thumbnail Saat Ini</label>
                <img src="{{ asset('assets/img/'.$data->image) }}" class="w-32 h-20 object-cover border-2 border-black rounded mb-2">
                <p class="text-xs font-bold text-gray-500 mb-2">*Biarkan kosong jika tidak ingin mengganti gambar.</p>
                <input type="file" name="image" class="w-full font-bold">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="font-black block text-sm uppercase">Font-Awesome Icon</label>
                    <input type="text" name="icon" value="{{ $data->icon }}" class="w-full border-4 border-black p-2 rounded-xl font-bold" required>
                </div>
                <div>
                    <label class="font-black block text-sm uppercase">Tipe Konten</label>
                    <select name="tipe_konten" class="w-full border-4 border-black p-2 rounded-xl font-bold">
                        <option value="gambar" {{ $data->tipe_konten == 'gambar' ? 'selected' : '' }}>Gambar Biasa</option>
                        <option value="video" {{ $data->tipe_konten == 'video' ? 'selected' : '' }}>Video (MP4 Link)</option>
                        <option value="3d" {{ $data->tipe_konten == '3d' ? 'selected' : '' }}>3D Model (GLB Link)</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="font-black block text-sm uppercase">Link Video/3D (Jika Ada)</label>
                <input type="text" name="file_konten" value="{{ $data->file_konten }}" class="w-full border-4 border-black p-2 rounded-xl font-bold">
            </div>
            
            <div>
                <label class="font-black block text-sm uppercase">Deskripsi Proyek</label>
                <textarea name="deskripsi" class="w-full border-4 border-black p-2 rounded-xl font-bold" rows="4" required>{{ $data->deskripsi }}</textarea>
            </div>
            
            <button type="submit" class="w-full bg-[#F5B50A] border-4 border-black p-4 rounded-xl font-black text-lg uppercase shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:translate-y-1 hover:shadow-none transition-all mt-4">UPDATE DATA !</button>
        </form>
    </div>

</body>
</html>