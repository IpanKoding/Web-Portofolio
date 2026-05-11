<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Muhammad Ivan Ardianto</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>
    
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #E2E4E6; }
        /* Custom Class untuk Font Bulat */
        .font-display { font-family: 'Fredoka One', cursive; letter-spacing: 0.02em; }
        /* Efek Outline untuk Background Text Table of Content */
        .text-outline { color: transparent; -webkit-text-stroke: 2px #cfcfcf; }
        /* Efek Garis Bawah Kuning Terputus untuk judul Portofolio */
        .underline-split { position: relative; display: inline-block; padding-bottom: 2px; }
        .underline-split::after { content: ''; position: absolute; left: 0; bottom: 0; width: 45%; height: 4px; background-color: #F5B50A; }
        .underline-split::before { content: ''; position: absolute; right: 0; bottom: 0; width: 45%; height: 4px; background-color: #F5B50A; }
        .border-dotted-custom { border-left: 2px dotted #4b5563; }
    </style>
</head>
<body class="text-[#2D2D2D] relative overflow-x-hidden selection:bg-[#F5B50A] selection:text-black">

    <div class="fixed right-4 top-1/2 -translate-y-1/2 rotate-90 origin-right text-[10px] font-bold text-gray-500 tracking-[0.3em] pointer-events-none z-0 hidden md:block uppercase">
        IVAN ARDIANTO © 2026
    </div>

    <nav class="fixed top-0 left-0 w-full z-50 bg-[#E2E4E6] border-b-4 border-[#2D2D2D] shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#home" class="text-3xl font-black tracking-tighter font-display">IVAN<span class="text-[#F5B50A]">.</span></a>
            <div class="hidden md:flex space-x-10 font-bold text-sm">
                <a href="#home" class="hover:text-[#F5B50A] transition-colors">Home</a>
                <a href="#about" class="hover:text-[#F5B50A] transition-colors">About Me</a>
                <a href="#portfolio" class="hover:text-[#F5B50A] transition-colors">Portofolio</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 pt-32 pb-20 relative z-10">
        
        <section id="home" class="min-h-[80vh] flex flex-col md:flex-row items-center mb-20">
            <div class="w-full md:w-1/2 relative z-20">
                <span class="bg-[#F5B50A] text-black px-4 py-1 rounded-full font-bold text-sm border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] inline-block mb-4">Creative Visual</span>
                
                <div class="relative mt-4 mb-8">
                    <span class="text-[#F5B50A] absolute -top-10 -left-6 text-7xl font-display">"</span>
                    <h1 class="text-[5.5rem] md:text-[8.5rem] font-display leading-[0.85] tracking-tight uppercase text-[#2D2D2D]">
                        <div class="relative inline-block">
                            <span class="absolute inset-0 bg-[#F5B50A] rounded-[40px] scale-x-[1.1] scale-y-[1.1] -z-10 translate-x-4"></span>
                            PORTO
                        </div>
                        <br>FOLO<span class="text-[#F5B50A] text-8xl md:text-9xl">.</span>
                    </h1>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full border-2 border-black flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs"></i></div>
                    <span class="font-bold tracking-wider uppercase">Muhammad Ivan A.</span>
                </div>
            </div>

            <div class="w-full md:w-1/2 h-[500px] relative mt-16 md:mt-0 flex justify-end items-center">
                <div class="absolute w-[300px] md:w-[400px] h-[300px] md:h-[400px] border border-gray-400 rounded-full -z-10"></div>
                <div class="absolute bottom-10 right-10 w-[200px] md:w-[280px] h-[250px] md:h-[350px] bg-[#F5B50A] rounded-tl-[80px] rounded-br-[40px] -z-10"></div>
                
                <model-viewer 
                    src="{{ asset('assets/img/asset.glb') }}" 
                    auto-rotate camera-controls disable-zoom shadow-intensity="1" class="w-full h-full z-10 cursor-pointer">
                </model-viewer>
            </div>
        </section>

        <div id="about" class="flex items-center gap-4 mb-12 pt-10">
            <h3 class="font-bold text-lg italic underline decoration-[#F5B50A] decoration-4">About</h3>
            <div class="flex-grow border-t-2 border-black"></div>
        </div>

        <section class="flex flex-col lg:flex-row gap-12 mb-16">
            <div class="w-full lg:w-[35%]">
                <div class="relative w-full h-[400px] border-4 border-black rounded-3xl overflow-hidden bg-gray-300 mb-8 grayscale shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <i class="fa-solid fa-user-tie text-9xl text-gray-400"></i>
                        <p class="font-black mt-4 text-gray-500">PHOTO HERE</p>
                    </div>
                </div>
                <div id="contact" class="bg-[#F5B50A] border-4 border-black p-6 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                    <h4 class="font-black text-xl mb-4 border-b-2 border-black pb-2">CONTACT ME :</h4>
                    <ul class="space-y-3 font-bold text-sm">
                        <li><i class="fa-solid fa-envelope w-6"></i> ivanardianto72@gmail.com</li>
                        <li><i class="fa-brands fa-whatsapp w-6 text-lg"></i> +62 818 0579 2478</li>
                        <li><i class="fa-brands fa-instagram w-6 text-lg"></i> ivan_dev</li>
                    </ul>
                </div>
            </div>

            <div class="w-full lg:w-[65%]">
                <h2 class="text-6xl font-display mb-8"><span class="text-[#F5B50A]">"</span>HELLO.</h2>
                <p class="text-lg font-bold leading-relaxed mb-6">Saya Muhammad Ivan Ardianto</p>
                <p class="text-gray-700 font-medium mb-10 leading-loose text-justify">Saya adalah seorang Multimedia Specialist yang saat ini sedang menempuh pendidikan D3 Teknologi Multimedia Broadcasting di Politeknik Elektronika Negeri Surabaya (PENS), setelah sebelumnya menyelesaikan studi di MAN 1 Ponorogo dengan spesialisasi Keterampilan Multimedia. Saya memiliki penguasaan teknis yang kuat pada perangkat lunak standar industri seperti Adobe Premiere Pro, After Effects, Adobe Photoshop, dan Figma. Memiliki pengalaman langsung sebagai Editor, Videografer, dan Desainer Grafis di berbagai instansi dan perusahaan, termasuk Siniar PENS dan SF Group Service Enterprise. Saya dikenal sebagai individu yang adaptif, berorientasi pada detail, dan mampu bekerja sama di dalam tim untuk memproduksi konten visual kreatif secara efektif sesuai dengan tenggat waktu.</p>
                
                <div class="grid md:grid-cols-2 gap-8 border-t-4 border-black border-dotted pt-8">
                    <div>
                        <h4 class="font-black border-b-4 border-[#F5B50A] inline-block mb-4">EDUCATION</h4>
                        
                        <div class="mb-4">
                            <p class="font-bold">2024 - 2027 <span class="bg-[#F5B50A] text-black px-2 py-0.5 rounded-full text-xs ml-1 shadow-[2px_2px_0px_rgba(0,0,0,1)]">Studying</span></p>
                            <p class="font-black text-sm mt-1">D3 Teknologi Multimedia Broadcasting</p>
                            <p class="text-sm text-gray-600 font-bold">Politeknik Elektronika Negeri Surabaya</p>
                        </div>

                        <div>
                            <p class="font-bold">2021 - 2024</p>
                            <p class="font-black text-sm mt-1">IPS - Multimedia</p>
                            <p class="text-sm text-gray-600 font-bold">MAN 1 Ponorogo</p>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-black border-b-4 border-[#F5B50A] inline-block mb-4">SOFTWARE SKILLS</h4>
                        
                        <div class="flex flex-wrap gap-3">
                            <div class="w-12 h-12 bg-[#00005B] text-[#E998FF] flex items-center justify-center rounded-xl font-black text-xl border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-transform cursor-pointer" title="Adobe Premiere Pro">Pr</div>
                            <div class="w-12 h-12 bg-[#00005B] text-[#9999FF] flex items-center justify-center rounded-xl font-black text-xl border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-transform cursor-pointer" title="Adobe After Effects">Ae</div>
                            <div class="w-12 h-12 bg-[#001E36] text-[#31A8FF] flex items-center justify-center rounded-xl font-black text-xl border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-transform cursor-pointer" title="Adobe Photoshop">Ps</div>
                            <div class="w-12 h-12 bg-[#330000] text-[#FF9A00] flex items-center justify-center rounded-xl font-black text-xl border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-transform cursor-pointer" title="Adobe Illustrator">Ai</div>
                            <div class="w-12 h-12 bg-white text-black flex items-center justify-center rounded-xl font-black text-2xl border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-transform cursor-pointer" title="Figma"><i class="fa-brands fa-figma"></i></div>
                            <div class="w-12 h-12 bg-[#EA7600] flex items-center justify-center rounded-xl border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-transform cursor-pointer" title="Blender 3D">
                                <img src="https://cdn.simpleicons.org/blender/white" class="w-7 h-7" alt="Blender">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-32">
            <h4 class="font-black text-xl border-b-4 border-[#F5B50A] inline-block mb-10">RELEVANT EXPERIENCE</h4>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <div class="relative pl-6 border-l-4 border-black">
                    <div class="absolute w-4 h-4 bg-[#F5B50A] border-2 border-black rounded-full -left-[10px] top-1"></div>
                    <p class="font-black text-lg">Staff Medfo</p>
                    <p class="font-bold text-[#F5B50A] text-sm mb-3 drop-shadow-[1px_1px_0px_rgba(0,0,0,1)]">HIMA MMB PENS | 2025 - Sekarang</p>
                    <ul class="text-sm text-gray-700 font-medium space-y-1 list-disc list-inside">
                        <li>Memproduksi aset visual publikasi program kerja.</li>
                        <li>Mengelola jadwal konten media sosial himpunan.</li>
                        <li>Mendokumentasikan berbagai kegiatan organisasi.</li>
                    </ul>
                </div>

                <div class="relative pl-6 border-l-4 border-black">
                    <div class="absolute w-4 h-4 bg-[#F5B50A] border-2 border-black rounded-full -left-[10px] top-1"></div>
                    <p class="font-black text-lg">Video Editor</p>
                    <p class="font-bold text-[#F5B50A] text-sm mb-3 drop-shadow-[1px_1px_0px_rgba(0,0,0,1)]">SINIAR PENS | 2025 - 2027</p>
                    <ul class="text-sm text-gray-700 font-medium space-y-1 list-disc list-inside">
                        <li>Memproduksi dan mengedit konten podcast.</li>
                        <li>Berkolaborasi aktif dalam tim secara efisien.</li>
                        <li>Menguasai perangkat lunak editing standar industri.</li>
                    </ul>
                </div>

                <div class="relative pl-6 border-l-4 border-black">
                    <div class="absolute w-4 h-4 bg-[#F5B50A] border-2 border-black rounded-full -left-[10px] top-1"></div>
                    <p class="font-black text-lg">Volunteer Media Komunikasi</p>
                    <p class="font-bold text-[#F5B50A] text-sm mb-3 drop-shadow-[1px_1px_0px_rgba(0,0,0,1)]">Grebeg Suro | 2025</p>
                    <ul class="text-sm text-gray-700 font-medium space-y-1 list-disc list-inside">
                        <li>Memproduksi dan mengedit konten promosi Grebeg Suro.</li>
                        <li>Berkolaborasi aktif dalam tim secara efisien.</li>
                        <li>Menggunakan Software Editing dengan baik.</li>
                    </ul>
                </div>
                
                <div class="relative pl-6 border-l-4 border-black">
                    <div class="absolute w-4 h-4 bg-[#F5B50A] border-2 border-black rounded-full -left-[10px] top-1"></div>
                    <p class="font-black text-lg">Graphic Designer</p>
                    <p class="font-bold text-[#F5B50A] text-sm mb-3 drop-shadow-[1px_1px_0px_rgba(0,0,0,1)]">Intern SF Group Enterprise | 2024 - 2025</p>
                    <ul class="text-sm text-gray-700 font-medium space-y-1 list-disc list-inside">
                        <li>Merancang materi visual untuk klien & medsos.</li>
                        <li>Mengelola komunikasi efektif untuk visi desain.</li>
                        <li>Bekerja tangkas di bawah tekanan tenggat waktu.</li>
                    </ul>
                </div>

                <div class="relative pl-6 border-l-4 border-black">
                    <div class="absolute w-4 h-4 bg-[#F5B50A] border-2 border-black rounded-full -left-[10px] top-1"></div>
                    <p class="font-black text-lg">Production Team</p>
                    <p class="font-bold text-[#F5B50A] text-sm mb-3 drop-shadow-[1px_1px_0px_rgba(0,0,0,1)]">Locomotive Picture | 2021 - 2024</p>
                    <ul class="text-sm text-gray-700 font-medium space-y-1 list-disc list-inside">
                        <li>Terlibat aktif dalam produksi berbagai project short film.</li>
                        <li>Mendukung operasional produksi film di lapangan.</li>
                        <li>Berkontribusi dalam pembuatan konten visual kreatif.</li>
                    </ul>
                </div>

                <div class="relative pl-6 border-l-4 border-black">
                    <div class="absolute w-4 h-4 bg-[#F5B50A] border-2 border-black rounded-full -left-[10px] top-1"></div>
                    <p class="font-black text-lg">Designer & Videographer</p>
                    <p class="font-bold text-[#F5B50A] text-sm mb-3 drop-shadow-[1px_1px_0px_rgba(0,0,0,1)]">Multimedia Creative MAN 1 | 2021 - 2024</p>
                    <ul class="text-sm text-gray-700 font-medium space-y-1 list-disc list-inside">
                        <li>Mengoperasikan kamera profesional untuk acara.</li>
                        <li>Mengedit foto/video dan produksi aset medsos.</li>
                        <li>Mengoperasikan Adobe CC Suite dengan mahir.</li>
                    </ul>
                </div>

            </div>
        </section>

        <div id="portfolio" class="flex items-center gap-4 mb-6 pt-10">
            <h3 class="font-black text-2xl italic underline-split text-[#2D2D2D] pb-1">Portofolio</h3>
            <div class="flex-grow border-t-2 border-[#2D2D2D]"></div>
        </div>

        <div class="relative text-center my-14 select-none flex justify-center items-center">
            <h2 class="text-4xl md:text-6xl lg:text-[6rem] font-display absolute w-full inset-0 flex justify-center items-center text-outline z-0">
                " TABLE OF CONTENT.
            </h2>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-display relative z-10 flex items-center justify-center gap-3 md:gap-4 text-[#2D2D2D]">
                TABLE 
                <span class="bg-[#2D2D2D] text-[#F5B50A] px-3 py-1 rounded-lg text-2xl md:text-4xl -rotate-6 shadow-[2px_2px_0px_rgba(0,0,0,1)] border-2 border-black">OF</span> 
                CONTENT<span class="text-[#F5B50A]">.</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-32 relative z-10">
            @foreach ($portfolios as $item)
                <div class="flex flex-col items-center cursor-pointer hover:-translate-y-2 transition-transform duration-300" onclick="bukaModal('modal-{{ $item->id }}')">
                    <div class="w-full aspect-square bg-[#F5B50A] rounded-[2rem] flex items-center justify-center mb-4 shadow-sm border-2 border-transparent hover:border-black transition-colors">
                        <i class="{{ $item->icon }} text-6xl text-[#2D2D2D]"></i>
                    </div>
                    <div class="bg-[#F5B50A] w-[80%] py-2 px-4 rounded-full text-center shadow-[2px_2px_0px_rgba(0,0,0,1)] border-2 border-black">
                        <h3 class="font-bold text-[11px] uppercase text-[#2D2D2D] tracking-wider truncate">{{ $item->judul }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
        
    </main>

    @foreach ($portfolios as $item)
    <div id="modal-{{ $item->id }}" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 sm:p-6 opacity-0 transition-opacity duration-300">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="tutupModal('modal-{{ $item->id }}')"></div>
        <div class="relative bg-[#E2E2E2] border-4 border-black w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-3xl shadow-[16px_16px_0px_rgba(245,181,10,1)] flex flex-col transform scale-95 transition-transform duration-300" id="box-{{ $item->id }}">
            <div class="sticky top-0 bg-[#E2E2E2] border-b-4 border-black p-4 md:p-6 flex justify-between items-center z-50">
                <div class="flex items-center gap-4 text-[#F5B50A]">
                    <i class="{{ $item->icon }} text-3xl md:text-5xl drop-shadow-[2px_2px_0px_rgba(0,0,0,1)]"></i>
                    <h2 class="text-2xl md:text-5xl font-black font-display uppercase text-black tracking-tighter">{{ $item->judul }}</h2>
                </div>
                <button onclick="tutupModal('modal-{{ $item->id }}')" class="w-10 h-10 md:w-14 md:h-14 bg-red-500 border-4 border-black text-black font-black text-xl md:text-2xl rounded-full shadow-[4px_4px_0px_rgba(0,0,0,1)]">X</button>
            </div>
            <div class="p-6 md:p-10">
                <div class="bg-white border-4 border-black p-6 md:p-8 rounded-2xl shadow-[8px_8px_0px_rgba(0,0,0,1)] mb-10">
                    <h3 class="font-black text-2xl mb-4 border-b-4 border-[#F5B50A] inline-block">TENTANG PROYEK</h3>
                    <p class="text-lg font-bold text-gray-700 leading-relaxed">{{ $item->deskripsi }}</p>
                </div>
                <div class="columns-1 md:columns-2 gap-6 space-y-6">
                    @foreach($item->galleries as $gal)
                        <div class="break-inside-avoid w-full border-4 border-black rounded-2xl overflow-hidden bg-white shadow-[6px_6px_0px_rgba(0,0,0,1)] relative flex items-center justify-center {{ $gal->tipe_konten != 'gambar' ? 'h-[250px]' : '' }}">
                            @if($gal->tipe_konten == 'gambar')
                                <img src="{{ asset('assets/img/' . $gal->file_konten) }}" class="w-full h-auto" loading="lazy">
                            @elseif($gal->tipe_konten == 'video')
                                <video autoplay muted loop playsinline class="w-full h-full object-cover border-none"><source src="{{ asset('assets/img/' . $gal->file_konten) }}" type="video/mp4"></video>
                                <div class="absolute top-3 right-3 bg-red-500 text-white font-black px-3 py-1 rounded-full border-2 border-black text-xs shadow-[2px_2px_0px_rgba(0,0,0,1)] z-10"><i class="fa-solid fa-play"></i> VIDEO</div>
                            @elseif($gal->tipe_konten == 'video_link')
                                <iframe src="{{ $gal->file_konten }}" allowfullscreen class="w-full h-full object-cover border-none" loading="lazy"></iframe>
                                <div class="absolute top-3 right-3 bg-red-600 text-white font-black px-3 py-1 rounded-full border-2 border-black text-xs shadow-[2px_2px_0px_rgba(0,0,0,1)] z-10"><i class="fa-brands fa-youtube"></i> YOUTUBE</div>
                            @elseif($gal->tipe_konten == '3d')
                                <model-viewer src="{{ asset('assets/img/' . $gal->file_konten) }}" auto-rotate camera-controls disable-zoom shadow-intensity="1" class="w-full h-full outline-none" loading="lazy"></model-viewer>
                                <div class="absolute top-3 right-3 bg-purple-500 text-white font-black px-3 py-1 rounded-full border-2 border-black text-xs shadow-[2px_2px_0px_rgba(0,0,0,1)] z-10"><i class="fa-solid fa-cube"></i> 3D</div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end">
        <div id="ai-chat-window" class="hidden w-[300px] md:w-[380px] bg-white border-4 border-black rounded-3xl shadow-[8px_8px_0px_rgba(0,0,0,1)] mb-4 flex flex-col overflow-hidden transition-all duration-300 origin-bottom-right transform scale-95 opacity-0">
            <div class="bg-[#F5B50A] border-b-4 border-black p-4 flex justify-between items-center">
                <div class="flex items-center gap-2 font-black text-black text-lg">
                    <i class="fa-solid fa-robot text-2xl"></i>
                    <span>IVAN-BOT GENIUS</span>
                </div>
                <button onclick="toggleChat()" class="text-black hover:scale-125 transition-transform"><i class="fa-solid fa-xmark text-xl font-black"></i></button>
            </div>
            <div id="chat-body" class="p-4 h-[350px] overflow-y-auto flex flex-col gap-4 bg-[#E2E2E2] scroll-smooth">
                <div class="flex gap-2">
                    <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center flex-shrink-0 text-[#F5B50A]"><i class="fa-solid fa-robot text-sm"></i></div>
                    <div class="bg-white border-2 border-black rounded-xl rounded-tl-none p-3 text-sm font-bold shadow-[2px_2px_0px_rgba(0,0,0,1)]">
                        Halo mazeh! 👋 Aku asisten AI Ivan yang sudah ditenagai Gemini 3. Mau tanya apapun soal coding, porto Ivan, atau apa aja bebas!
                    </div>
                </div>
            </div>
            <div class="p-3 bg-white border-t-4 border-black flex gap-2">
                <input type="text" id="chat-input" placeholder="Tanya apa saja..." class="w-full border-2 border-black rounded-xl px-3 py-2 text-sm font-bold outline-none focus:bg-gray-100" onkeypress="handleEnter(event)">
                <button onclick="sendMessage()" class="bg-[#F5B50A] border-2 border-black px-4 py-2 rounded-xl text-black hover:scale-105 transition-transform shadow-[2px_2px_0px_rgba(0,0,0,1)]"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
        <button onclick="toggleChat()" class="bg-black text-[#F5B50A] p-5 rounded-full border-4 border-[#F5B50A] shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:scale-110 transition-transform flex items-center justify-center relative">
            <i class="fa-solid fa-robot text-2xl"></i>
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-500 border-2 border-black rounded-full animate-pulse"></span>
        </button>
    </div>

    <script>
        function bukaModal(id) {
            const modal = document.getElementById(id);
            const box = document.getElementById('box-' + id.split('-')[1]);
            modal.classList.remove('hidden');
            setTimeout(() => { modal.classList.remove('opacity-0'); box.classList.remove('scale-95'); box.classList.add('scale-100'); }, 10);
            document.body.style.overflow = 'hidden'; 
        }
        function tutupModal(id) {
            const modal = document.getElementById(id);
            const box = document.getElementById('box-' + id.split('-')[1]);
            modal.classList.add('opacity-0');
            box.classList.remove('scale-100'); box.classList.add('scale-95');
            setTimeout(() => { modal.classList.add('hidden'); document.body.style.overflow = 'auto'; }, 300);
        }

        const chatWindow = document.getElementById('ai-chat-window');
        const chatBody = document.getElementById('chat-body');
        const chatInput = document.getElementById('chat-input');
        
        const API_KEY = "{{ env('GEMINI_API_KEY') }}";
        let chatOpen = false;

        function toggleChat() {
            chatOpen = !chatOpen;
            chatWindow.classList.toggle('hidden');
            setTimeout(() => { chatWindow.classList.toggle('scale-95'); chatWindow.classList.toggle('opacity-0'); chatWindow.classList.toggle('scale-100'); chatWindow.classList.toggle('opacity-100'); }, 10);
        }

        function handleEnter(e) { if(e.key === 'Enter') sendMessage(); }

        async function sendMessage() {
            let text = chatInput.value.trim();
            if(!text) return;
            
            appendMessage('user', text);
            chatInput.value = '';

            const tempId = "loading-" + Math.floor(Math.random() * 1000);
            
            const loadingHTML = `
                <div class="flex gap-2 mb-4" id="${tempId}">
                    <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center flex-shrink-0 text-[#F5B50A]"><i class="fa-solid fa-robot text-sm"></i></div>
                    <div class="bg-white border-2 border-black rounded-xl rounded-tl-none p-3 text-sm font-bold shadow-[2px_2px_0px_rgba(0,0,0,1)] animate-pulse text-gray-500 italic">
                        Ivan-Bot lagi mikir...
                    </div>
                </div>`;
            chatBody.innerHTML += loadingHTML;
            chatBody.scrollTop = chatBody.scrollHeight;

            try {
                const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-3-flash-preview:generateContent?key=${API_KEY}`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        contents: [{ parts: [{ text: `Kamu Ivan-Bot, asisten AI web Ivan. Ivan anak TI jago Laravel, Videography & 3D. Jawab santai. DILARANG menggunakan tanda bintang (*) atau format list panjang. Jawab seperti orang chatting biasa. Pertanyaan: ${text}` }] }]
                    })
                });

                const data = await response.json();
                
                const loadingElement = document.getElementById(tempId);
                if (loadingElement) loadingElement.remove();

                if (data.candidates && data.candidates[0].content) {
                    appendMessage('ai', data.candidates[0].content.parts[0].text);
                } else if (data.error) {
                    appendMessage('ai', "Waduh mazeh, Google ngasih error nih: " + data.error.message);
                }

            } catch (error) {
                const loadingElement = document.getElementById(tempId);
                if (loadingElement) loadingElement.remove();
                appendMessage('ai', "Koneksi terputus mazeh! Coba cek internet atau API Key kamu.");
            }
        }

        function appendMessage(sender, text) {
            let formattedText = text.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>');
            formattedText = formattedText.replace(/\*(.*?)\*/g, '<i>$1</i>');
            formattedText = formattedText.replace(/(\d+\.\s)/g, '<br><br>$1');

            if(formattedText.startsWith('<br><br>')) {
                formattedText = formattedText.substring(8);
            }

            let msgHTML = `<div class="flex gap-2 ${sender === 'user' ? 'justify-end' : ''} mb-4">
                ${sender !== 'user' ? '<div class="w-8 h-8 rounded-full bg-black flex items-center justify-center flex-shrink-0 text-[#F5B50A]"><i class="fa-solid fa-robot text-sm"></i></div>' : ''}
                <div class="${sender === 'user' ? 'bg-[#F5B50A] rounded-tr-none' : 'bg-white rounded-tl-none'} border-2 border-black rounded-xl p-3 text-sm font-bold shadow-[2px_2px_0px_rgba(0,0,0,1)] max-w-[85%] text-left whitespace-pre-line leading-relaxed">${formattedText}</div>
            </div>`;
            
            const API_KEY = "{{ env('GEMINI_API_KEY') }}";
            chatBody.innerHTML += msgHTML;
            chatBody.scrollTop = chatBody.scrollHeight;
        }
    </script>
</body>
</html>
