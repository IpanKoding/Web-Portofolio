<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Ivan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>
</head>
<body class="bg-[#E2E2E2] text-[#2D2D2D] relative overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-[#E2E2E2] border-b-4 border-[#2D2D2D] shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#home" class="text-3xl font-black tracking-tighter">IVAN<span class="text-[#F5B50A]">.</span></a>
            <div class="hidden md:flex space-x-10 font-bold text-sm">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About Me</a>
                <a href="#portfolio" class="nav-link">Portofolio</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <!-- WADAH UTAMA -->
    <main class="max-w-6xl mx-auto px-6 pt-32">
        
        <!-- SECTION 1: HERO (LANDING PAGE) -->
        <section id="home" class="min-h-[80vh] flex flex-col md:flex-row items-center mb-20">
            <div class="w-full md:w-1/2 relative z-10">
                <span class="bg-[#F5B50A] text-black px-4 py-1 rounded-full font-bold text-sm border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] inline-block mb-4">Creative Visual</span>
                <h1 class="text-[5rem] md:text-[8rem] font-black leading-[0.85] tracking-tighter mb-8">PORTO<br>FOLO<span class="text-[#F5B50A]">.</span></h1>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full border border-black flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs"></i></div>
                    <span class="font-bold">Ivan Developer</span>
                </div>
            </div>

            <div class="w-full md:w-1/2 h-[500px] relative flex items-center justify-center mt-10 md:mt-0">
                <div class="absolute w-[300px] md:w-[400px] h-[300px] md:h-[400px] border border-gray-400 rounded-full"></div>
                <div class="absolute bottom-10 right-10 w-[200px] md:w-[280px] h-[250px] md:h-[350px] bg-[#F5B50A] rounded-tl-[80px] rounded-br-[40px]"></div>
                <model-viewer 
                    src="https://modelviewer.dev/shared-assets/models/Astronaut.glb" 
                    auto-rotate camera-controls disable-zoom shadow-intensity="1"
                    class="w-full h-full z-10">
                </model-viewer>
            </div>
        </section>

        <!-- SECTION 2: ABOUT -->
        <div id="about" class="flex items-center gap-4 mb-12 pt-20">
            <h3 class="font-bold text-lg italic underline decoration-[#F5B50A] decoration-4">About</h3>
            <div class="flex-grow border-t-2 border-black"></div>
        </div>

        <section class="grid md:grid-cols-3 gap-12 mb-32">
            <div>
                <div class="relative w-full h-[400px] border-4 border-black rounded-3xl overflow-hidden bg-gray-300 mb-8 grayscale shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <i class="fa-solid fa-user-tie text-9xl text-gray-400"></i>
                        <p class="font-black mt-4 text-gray-500">PHOTO HERE</p>
                    </div>
                </div>
                <div id="contact" class="bg-[#F5B50A] border-4 border-black p-6 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                    <h4 class="font-black text-xl mb-4 border-b-2 border-black pb-2">CONTACT ME :</h4>
                    <ul class="space-y-3 font-bold text-sm">
                        <li><i class="fa-solid fa-envelope w-6"></i> ivan@example.com</li>
                        <li><i class="fa-brands fa-whatsapp w-6 text-lg"></i> +62 812 3456</li>
                        <li><i class="fa-brands fa-instagram w-6 text-lg"></i> ivan_dev</li>
                    </ul>
                </div>
            </div>

            <div class="md:col-span-2">
                <h2 class="text-6xl font-black mb-8"><span class="text-[#F5B50A]">"</span>HELLO.</h2>
                <p class="text-lg font-bold leading-relaxed mb-6">Saya Ivan, seorang mahasiswa pengembang web yang suka menggabungkan kode dinamis dengan visual kreatif.</p>
                <p class="text-gray-600 font-medium mb-10 leading-loose">Dari membuat tampilan depan yang interaktif hingga sistem belakang yang rumit, saya menikmati setiap prosesnya. Saya juga mengeksplorasi integrasi AI dan desain 3D untuk menambah kedalaman pada karya saya.</p>
                
                <div class="grid md:grid-cols-2 gap-8 border-t-4 border-black border-dotted pt-8">
                    <div>
                        <h4 class="font-black border-b-4 border-[#F5B50A] inline-block mb-4">EDUCATION</h4>
                        <p class="font-bold">2026 - Informatics Engineering</p>
                        <p class="text-sm text-gray-500 font-bold">Universitas Kamu - S.Kom</p>
                    </div>
                    <div>
                        <h4 class="font-black border-b-4 border-[#F5B50A] inline-block mb-4">SOFTWARE SKILLS</h4>
                        <div class="flex gap-4 text-3xl">
                            <i class="fa-brands fa-laravel text-red-600"></i>
                            <i class="fa-brands fa-php text-blue-700"></i>
                            <i class="fa-brands fa-js text-yellow-500"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: PORTOFOLIO (HASIL SUNTIKAN DATABASE) -->
        <div id="portfolio" class="flex items-center gap-4 mb-12 pt-20">
            <h3 class="font-bold text-lg italic underline decoration-[#F5B50A] decoration-4">Portofolio</h3>
            <div class="flex-grow border-t-2 border-black"></div>
        </div>

        <!-- Wadah Grid Tailwind (Pengganti row & col-md-4) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-32">
            
            <!-- Buka pengulangan -->
            @foreach ($portfolios as $item)
                
                <!-- Kotak Portofolio (THUMBNAIL) -->
                <div class="bg-white border-4 border-black p-5 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)] hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full cursor-pointer" onclick="bukaModal('modal-{{ $item->id }}')">
                    
                    <!-- Nampilin Icon -->
                    <div class="text-[#F5B50A] mb-4 flex justify-between items-center border-b-2 border-black pb-3">
                        <i class="{{ $item->icon }} text-4xl"></i>
                        <!-- Nampilin Judul -->
                        <h3 class="font-black text-xl text-right uppercase tracking-wider">{{ $item->judul }}</h3>
                    </div>
                    
                    <!-- Nampilin Gambar + Efek Hover -->
                    <div class="w-full h-48 border-2 border-black rounded-xl overflow-hidden bg-gray-200 mt-auto relative group">
                        <img src="{{ asset('assets/img/' . $item->image) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
                        
                        <!-- Overlay Hitam & Tombol (Muncul saat di-hover) -->
                        <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="bg-[#F5B50A] text-black font-black px-6 py-2 border-2 border-black rounded-full shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:scale-105 transition-transform">BUKA POP-UP</span>
                        </div>
                    </div>

                </div>

                <!-- ============================================== -->
                <!-- KODINGAN POP-UP (MODAL) - Tersembunyi by default -->
                <!-- ============================================== -->
                <div id="modal-{{ $item->id }}" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 sm:p-6 opacity-0 transition-opacity duration-300">
                    
                    <!-- Background Gelap Blur (Bisa diklik untuk tutup) -->
                    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="tutupModal('modal-{{ $item->id }}')"></div>

                    <!-- Kotak Konten Pop-up (Desain Brutalism) -->
                    <div class="relative bg-[#E2E2E2] border-4 border-black w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-3xl shadow-[16px_16px_0px_rgba(245,181,10,1)] flex flex-col transform scale-95 transition-transform duration-300" id="box-{{ $item->id }}">
                        
                        <!-- Header Pop-up -->
                        <div class="sticky top-0 bg-[#E2E2E2] border-b-4 border-black p-4 md:p-6 flex justify-between items-center z-10">
                            <div class="flex items-center gap-4 text-[#F5B50A]">
                                <i class="{{ $item->icon }} text-3xl md:text-5xl drop-shadow-[2px_2px_0px_rgba(0,0,0,1)]"></i>
                                <h2 class="text-2xl md:text-5xl font-black uppercase text-black tracking-tighter">{{ $item->judul }}</h2>
                            </div>
                            <!-- Tombol X untuk Tutup -->
                            <button onclick="tutupModal('modal-{{ $item->id }}')" class="w-10 h-10 md:w-14 md:h-14 bg-red-500 border-4 border-black text-black font-black text-xl md:text-2xl rounded-full hover:bg-red-600 hover:scale-110 transition-transform shadow-[4px_4px_0px_rgba(0,0,0,1)] flex items-center justify-center">
                                X
                            </button>
                        </div>

                        <!-- Isi Pop-up -->
                        <div class="p-6 md:p-10">
                            <!-- Gambar Besar -->
                            <div class="w-full h-[250px] md:h-[450px] border-4 border-black rounded-2xl overflow-hidden bg-white mb-8 shadow-[8px_8px_0px_rgba(0,0,0,1)] relative">
                                <img src="{{ asset('assets/img/' . $item->image) }}" class="w-full h-full object-cover" alt="{{ $item->judul }}">
                            </div>

                            <!-- Teks Penjelasan -->
                            <div class="bg-white border-4 border-black p-6 md:p-8 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                                <h3 class="font-black text-2xl mb-4 border-b-4 border-[#F5B50A] inline-block">TENTANG PROYEK</h3>
                                <p class="text-lg font-bold text-gray-700 leading-relaxed mb-4">
                                    Ini adalah tampilan Pop-up untuk karya <strong>{{ $item->judul }}</strong>. Pengunjung bisa melihat gambarmu lebih besar dan membaca detail proyek secara interaktif!
                                </p>
                                <p class="text-md font-medium text-gray-600">
                                    Desain pop-up ini dibuat senada dengan tema website kamu, sehingga kesan brutalism-nya tetap terasa solid dan menyatu.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- AKHIR POP-UP -->

            @endforeach
            <!-- Tutup pengulangan -->

        </div>
    </main>

    <!-- AI WIDGET -->
    <div class="fixed bottom-6 right-6 z-50">
        <button class="bg-black text-[#F5B50A] p-5 rounded-full border-4 border-[#F5B50A] shadow-xl hover:scale-110 transition-transform">
            <i class="fa-solid fa-robot text-2xl"></i>
        </button>
    </div>

    <!-- SCRIPT UNTUK MENJALANKAN POP-UP (WAJIB ADA) -->
    <script>
        function bukaModal(id) {
            const modal = document.getElementById(id);
            const box = document.getElementById('box-' + id.split('-')[1]);
            
            // Munculkan di layar
            modal.classList.remove('hidden');
            
            // Sedikit delay agar animasi munculnya halus
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                box.classList.remove('scale-95');
                box.classList.add('scale-100');
            }, 10);
            
            // Kunci scroll background biar layarnya nggak geser
            document.body.style.overflow = 'hidden'; 
        }

        function tutupModal(id) {
            const modal = document.getElementById(id);
            const box = document.getElementById('box-' + id.split('-')[1]);
            
            // Jalankan animasi menghilang
            modal.classList.add('opacity-0');
            box.classList.remove('scale-100');
            box.classList.add('scale-95');
            
            // Tunggu 300ms (sesuai durasi animasi) baru benar-benar di-hidden
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Buka kunci scroll lagi
            }, 300);
        }
    </script>

</body>
</html>