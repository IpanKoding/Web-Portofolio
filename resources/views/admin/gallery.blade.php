<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Album - Ivan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        function ubahInput() {
            let tipe = document.getElementById('tipe_konten').value;
            let divUpload = document.getElementById('input_upload');
            let divLink = document.getElementById('input_link');
            let labelUpload = document.getElementById('label_upload');
            let labelLink = document.getElementById('label_link');

            document.querySelector('input[name="file_upload"]').value = "";
            document.querySelector('input[name="file_konten"]').value = "";

            // KODINGAN YANG DIUBAH: SEKARANG '3d' JUGA PAKAI UPLOAD FILE
            if (tipe === 'gambar' || tipe === 'video' || tipe === '3d') {
                divUpload.classList.remove('hidden');
                divLink.classList.add('hidden');
                
                // Menyesuaikan label sesuai tipe
                if (tipe === 'gambar') {
                    labelUpload.innerText = 'Upload Gambar (.jpg, .png, .webp)';
                } else if (tipe === 'video') {
                    labelUpload.innerText = 'Upload Video (.mp4, .mov, .avi, .mkv)';
                } else if (tipe === '3d') {
                    labelUpload.innerText = 'Upload 3D Model (.glb)';
                }
            } else {
                // UNTUK YOUTUBE LINK
                divUpload.classList.add('hidden');
                divLink.classList.remove('hidden');
                labelLink.innerText = 'Link Video YouTube';
            }
        }
    </script>
</head>
<body class="bg-[#E2E2E2] p-6">
    <div class="max-w-6xl mx-auto">
        
        <div class="flex justify-between items-end mb-10 border-b-4 border-black pb-4">
            <div>
                <a href="{{ route('admin.index') }}" class="font-bold text-red-500 hover:underline mb-2 block">← KEMBALI KE ADMIN</a>
                <h1 class="text-4xl font-black tracking-tighter uppercase">ALBUM: <span class="text-[#F5B50A]">{{ $portfolio->judul }}</span></h1>
            </div>
        </div>

        @if(session('sukses'))
            <div class="bg-green-400 border-4 border-black p-4 mb-6 rounded-xl font-black uppercase shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                <i class="fa-solid fa-check-circle mr-2"></i> {{ session('sukses') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-400 border-4 border-black p-4 mb-6 rounded-xl font-bold shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                <p class="font-black uppercase mb-2">GAGAL DISIMPAN! Cek kesalahan ini:</p>
                <ul class="list-disc ml-5">
                    @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                </ul>
            </div>
        @endif

        <div class="grid md:grid-cols-3 gap-10">
            <!-- FORM TAMBAH ISI ALBUM -->
            <div class="bg-white border-4 border-black p-6 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)] h-fit">
                <h2 class="font-black text-xl mb-6 border-b-4 border-[#F5B50A] inline-block">TAMBAH ISI ALBUM</h2>
                
                <form action="{{ route('admin.gallery.store', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <label class="font-black block text-sm uppercase">Tipe Konten</label>
                        <select name="tipe_konten" id="tipe_konten" onchange="ubahInput()" class="w-full border-4 border-black p-2 rounded-xl font-bold">
                            <option value="gambar">Gambar (Upload File)</option>
                            <option value="video">Video (Upload MP4/MKV)</option>
                            <option value="video_link">Video (Link YouTube)</option>
                            <option value="3d">3D Model (Upload GLB)</option>
                        </select>
                    </div>

                    <div id="input_upload">
                        <!-- LABEL INI AKAN BERUBAH-UBAH TERGANTUNG PILIHAN DROPDOWN -->
                        <label id="label_upload" class="font-black block text-sm uppercase">Upload Gambar (.jpg, .png, .webp)</label>
                        <!-- ACCEPT SUDAH DITAMBAH .MKV DAN .GLB -->
                        <input type="file" name="file_upload" accept=".jpg,.jpeg,.png,.webp,.mp4,.mov,.avi,.mkv,.glb" class="w-full border-4 border-black p-2 rounded-xl font-bold bg-gray-100">
                    </div>

                    <div id="input_link" class="hidden">
                        <label id="label_link" class="font-black block text-sm uppercase">Masukkan Link</label>
                        <input type="text" name="file_konten" class="w-full border-4 border-black p-2 rounded-xl font-bold" placeholder="https://...">
                    </div>

                    <button type="submit" class="w-full bg-[#F5B50A] border-4 border-black p-3 rounded-xl font-black uppercase shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:translate-y-1 hover:shadow-none transition-all">TAMBAH KE ALBUM</button>
                </form>
            </div>

            <!-- PREVIEW ISI ALBUM -->
            <div class="md:col-span-2">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    @forelse($portfolio->galleries as $gal)
                        <div class="bg-white border-4 border-black p-3 rounded-2xl shadow-[4px_4px_0px_rgba(0,0,0,1)] relative group flex flex-col">
                            
                            <!-- KOTAK PREVIEW -->
                            <div class="w-full h-32 bg-gray-200 border-2 border-black rounded-lg overflow-hidden flex items-center justify-center relative">
                                @if($gal->tipe_konten == 'gambar')
                                    <img src="{{ asset('assets/img/'.$gal->file_konten) }}" class="w-full h-full object-cover">
                                @elseif($gal->tipe_konten == 'video')
                                    <video autoplay muted loop class="w-full h-full object-cover"><source src="{{ asset('assets/img/'.$gal->file_konten) }}" type="video/mp4"></video>
                                
                                @elseif($gal->tipe_konten == 'video_link')
                                    <iframe src="{{ $gal->file_konten }}" class="w-full h-full object-cover" allowfullscreen></iframe>
                                
                                @elseif($gal->tipe_konten == '3d')
                                    <i class="fa-solid fa-cube text-4xl text-gray-400"></i>
                                @endif
                            </div>

                            <span class="absolute top-1 left-1 bg-black text-white text-[10px] font-black px-2 py-1 rounded border-2 border-white uppercase z-10 pointer-events-none">{{ $gal->tipe_konten }}</span>
                            
                            <!-- TOMBOL HAPUS (Muncul pas di-hover) -->
                            <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl pointer-events-none group-hover:pointer-events-auto">
                                <form action="{{ route('admin.gallery.delete', $gal->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button onclick="return confirm('Hapus dari album?')" class="bg-red-500 text-white font-black px-4 py-2 border-2 border-black rounded-full hover:scale-110 transition-transform"><i class="fa-solid fa-trash-can mr-1"></i> HAPUS</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-10 border-4 border-black border-dashed rounded-2xl">
                            <h3 class="font-black text-gray-400 text-xl"><i class="fa-solid fa-folder-open text-3xl mb-2 block"></i>ALBUM INI MASIH KOSONG</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</body>
</html>