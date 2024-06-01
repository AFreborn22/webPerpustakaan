<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Response;
    use App\Models\Buku;
    use App\Models\Favorite;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;
    use Illuminate\Support\Facades\Auth;

    class FavoriteController extends Controller
    {
        public function index()
        {
            $bukus = Favorite::with('book')->get();

            return view('favorit.index', compact('bukus'));
        }

        public function addToFavorite(Request $request)
        {
            // Validasi permintaan
            $validatedData = $request->validate([
                'ISBN' => 'required',
                'Judul' => 'required',
                'Pengarang' => 'required',
                'Penerbit' => 'required',
            ]);

            // Ambil data buku dari halaman detail berdasarkan ISBN
            $book = Buku::where('ISBN', $validatedData['ISBN'])->first();

            // Buat data baru di tabel favorit
            $favorite = new Favorite();
            $favorite->ISBN = $book->ISBN;
            $favorite->cover_buku = $book->cover_buku;
            $favorite->judul = $book->Judul;
            $favorite->pengarang = $book->Pengarang;
            $favorite->penerbit = $book->Penerbit;
            $favorite->NIM = Auth::user()->NIM; // Mengambil NIM pengguna yang terautentikasi
            $favorite->save();

            return response()->json(['success' => true], Response::HTTP_OK);
        }
    }
