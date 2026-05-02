<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioGallery;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index() {
        $portfolios = Portfolio::latest()->get();
        return view('admin.index', compact('portfolios'));
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:1048576',
            'icon' => 'required',
            'tipe_konten' => 'required',
            'deskripsi' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('assets/img'), $imageName);

        Portfolio::create([
            'judul' => $request->judul,
            'image' => $imageName,
            'icon' => $request->icon,
            'tipe_konten' => $request->tipe_konten,
            'file_konten' => $request->file_konten,
            'deskripsi' => $request->deskripsi,
        ]);
        return back()->with('sukses', 'Data Berhasil Ditambah!');
    }

    public function edit($id) {
        $data = Portfolio::findOrFail($id);
        return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Portfolio::findOrFail($id);
        $request->validate([
            'judul' => 'required',
            'icon' => 'required',
            'tipe_konten' => 'required',
            'deskripsi' => 'required',
        ]);

        $input = [
            'judul' => $request->judul,
            'icon' => $request->icon,
            'tipe_konten' => $request->tipe_konten,
            'file_konten' => $request->file_konten,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('image')) {
            if (File::exists(public_path('assets/img/'.$data->image))) File::delete(public_path('assets/img/'.$data->image));
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/img'), $imageName);
            $input['image'] = $imageName;
        }

        $data->update($input);
        return redirect()->route('admin.index')->with('sukses', 'Mantap! Data Berhasil Diupdate!');
    }

    public function destroy($id) {
        $data = Portfolio::findOrFail($id);
        if (File::exists(public_path('assets/img/'.$data->image))) File::delete(public_path('assets/img/'.$data->image));
        $data->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus!');
    }

    public function gallery($id) {
        $portfolio = Portfolio::with('galleries')->findOrFail($id);
        return view('admin.gallery', compact('portfolio'));
    }

    public function storeGallery(Request $request, $id) {
        $request->validate(['tipe_konten' => 'required']);
        $file_konten = '';

        if ($request->tipe_konten == 'gambar') {
            $request->validate(['file_upload' => 'required|image|mimes:jpeg,png,jpg,webp|max:1048576']);
            $fileName = time() . '_' . uniqid() . '.' . $request->file_upload->extension();  
            $request->file_upload->move(public_path('assets/img'), $fileName);
            $file_konten = $fileName;
        } elseif ($request->tipe_konten == 'video') {
            $request->validate(['file_upload' => 'required|mimes:mp4,mov,avi|max:1048576']);
            $fileName = time() . '_' . uniqid() . '.' . $request->file_upload->extension();  
            $request->file_upload->move(public_path('assets/img'), $fileName);
            $file_konten = $fileName;
        } else {
            // UNTUK LINK (3D & YOUTUBE)
            $request->validate(['file_konten' => 'required']);
            $link = $request->file_konten;
            
            // JURUS MAGIC REVISI: Sekarang support YouTube Shorts!
            if ($request->tipe_konten == 'video_link') {
                if (strpos($link, 'youtube.com/watch?v=') !== false) {
                    $link = str_replace('watch?v=', 'embed/', $link);
                } elseif (strpos($link, 'youtu.be/') !== false) {
                    $link = str_replace('youtu.be/', 'youtube.com/embed/', $link);
                } elseif (strpos($link, 'youtube.com/shorts/') !== false) {
                    // MENGUBAH LINK SHORTS JADI EMBED
                    $link = str_replace('youtube.com/shorts/', 'youtube.com/embed/', $link);
                }
                
                // Bersihkan embel-embel link dari YouTube (seperti &t= atau ?si= atau ?feature=share)
                $link = explode('&', $link)[0]; 
                $link = explode('?si=', $link)[0];
                $link = explode('?feature=', $link)[0];
            }
            
            $file_konten = $link;
        }

        PortfolioGallery::create([
            'portfolio_id' => $id,
            'tipe_konten' => $request->tipe_konten,
            'file_konten' => $file_konten,
        ]);
        return back()->with('sukses', 'Mantap! Isi Album Berhasil Ditambah!');
    }

    public function destroyGallery($id) {
        $gallery = PortfolioGallery::findOrFail($id);
        if (($gallery->tipe_konten == 'gambar' || $gallery->tipe_konten == 'video') && File::exists(public_path('assets/img/'.$gallery->file_konten))) {
            File::delete(public_path('assets/img/'.$gallery->file_konten));
        }
        $gallery->delete();
        return back()->with('sukses', 'Isi Album Berhasil Dihapus!');
    }
}