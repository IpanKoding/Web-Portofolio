<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Ivan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#E2E2E2] p-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-5xl font-black mb-10 tracking-tighter uppercase">ADMIN <span class="text-[#F5B50A]">PANEL.</span></h1>

        <!-- ========================================== -->
        <!-- TEMPAT MUNCULNYA PESAN SUKSES / ERROR -->
        <!-- ========================================== -->
        @if(session('sukses'))
            <div class="bg-green-400 border-4 border-black p-4 mb-6 rounded-xl font-black uppercase shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                <i class="fa-solid fa-check-circle mr-2"></i> {{ session('sukses') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-400 border-4 border-black p-4 mb-6 rounded-xl font-bold shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                <p class="font-black uppercase mb-2"><i class="fa-solid fa-triangle-exclamation mr-2"></i> GAGAL DISIMPAN! Cek kesalahan ini:</p>
                <ul class="list-disc ml-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- ========================================== -->

        <div class="grid md:grid-cols-3 gap-10">
            <!-- FORM TAMBAH DATA -->
            <div class="bg-white border-4 border-black p-6 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)] h-fit">
                <h2 class="font-black text-2xl mb-6 border-b-4 border-[#F5B50A] inline-block">TAMBAH KARYA</h2>
                
                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <label class="font-black block text-sm uppercase">Judul Proyek</label>
                        <input type="text" name="judul" class="w-full border-4 border-black p-2 rounded-xl font-bold" placeholder="Contoh: 3D Render" required>
                    </div>
                    <div>
                        <label class="font-black block text-sm uppercase">Thumbnail (Gambar)</label>
                        <input type="file" name="image" class="w-full border-4 border-black p-2 rounded-xl font-bold bg-gray-100" required>
                    </div>
                    <div>
                        <label class="font-black block text-sm uppercase">Font-Awesome Icon</label>
                        <input type="text" name="icon" class="w-full border-4 border-black p-2 rounded-xl font-bold" placeholder="fa-solid fa-cube" required>
                    </div>
                    <div>
                        <label class="font-black block text-sm uppercase">Tipe Konten (Utama)</label>
                        <select name="tipe_konten" class="w-full border-4 border-black p-2 rounded-xl font-bold">
                            <option value="gambar">Gambar Biasa</option>
                            <option value="video">Video (MP4 Link)</option>
                            <option value="3d">3D Model (GLB Link)</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-black block text-sm uppercase">Link Video/3D (Jika Ada)</label>
                        <input type="text" name="file_konten" class="w-full border-4 border-black p-2 rounded-xl font-bold" placeholder="https://...">
                    </div>
                    <div>
                        <label class="font-black block text-sm uppercase">Deskripsi Proyek</label>
                        <textarea name="deskripsi" class="w-full border-4 border-black p-2 rounded-xl font-bold" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#F5B50A] border-4 border-black p-3 rounded-xl font-black uppercase shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:translate-y-1 hover:shadow-none transition-all">SIMPAN DATA</button>
                </form>
            </div>

            <!-- TABEL DAFTAR KARYA -->
            <div class="md:col-span-2 bg-white border-4 border-black p-6 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)] overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b-4 border-black uppercase text-sm font-black">
                            <th class="p-3">Judul</th>
                            <th class="p-3">Tipe Utama</th>
                            <th class="p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="font-bold">
                        @foreach($portfolios as $p)
                        <tr class="border-b-2 border-black">
                            <td class="p-3">{{ $p->judul }}</td>
                            <td class="p-3 uppercase text-xs"><span class="bg-black text-white px-2 py-1 rounded">{{ $p->tipe_konten }}</span></td>
                            <td class="p-3 flex gap-4 mt-1">
                                
                                <!-- Tombol Kelola Album (BARU) -->
                                <a href="{{ route('admin.gallery', $p->id) }}" class="text-green-600 hover:scale-125 transition-transform" title="Kelola Album / Banyak Foto">
                                    <i class="fa-solid fa-images"></i>
                                </a>

                                <!-- Tombol Edit -->
                                <a href="{{ route('admin.edit', $p->id) }}" class="text-blue-600 hover:scale-125 transition-transform" title="Edit Data Utama">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                
                                <!-- Tombol Hapus -->
                                <form action="{{ route('admin.delete', $p->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button onclick="return confirm('Yakin mau hapus data ini beserta seluruh albumnya?')" class="text-red-500 hover:scale-125 transition-transform" title="Hapus Data">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/" target="_blank" class="inline-block mt-10 font-black text-sm underline decoration-4 decoration-[#F5B50A]">LIHAT WEB UTAMA →</a>
            </div>
        </div>
    </div>
</body>
</html>