@extends('layout.maindosen')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/pinjam.css">
@endsection

@section('konten')
    <div class="height-100">
        <h3 class="home_page"><b>PINJAM BUKU</b></h3>

        <div class="container">
            <form>
                
                <div class="form-group">
                    <label for="book-title">Judul Buku:</label>
                    <input type="text" id="book-title" name="book-title" placeholder="" value="{{ $judulBuku }}"
                        disabled />
                </div>


                <div class="form-group">
                    <label for="borrow-date">Tanggal Pinjam:</label>
                    <input type="date" id="borrow-date" name="borrow-date" min=""
                        onchange="validateDate(); validateReturnDate()" />
                </div>
                <div class="form-group">
                    <label for="return-date">Tanggal Kembali:</label>
                    <input type="date" id="return-date" name="return-date" min="" onchange="validateReturnDate()"
                        disabled />
                </div>
                <img src="{{ asset('storage/' . $buku->cover) }}" alt="Gambar Buku" class="book-image" />

            </form>
            <div class="button-container">
                <a href="/bukuDosen ">
                    <button class="button-primary">Kembali</button>
                </a>
                <a href="{{ route('detail-pinjam-dosen', $buku->ISBN) }}">
                    <button class="button-secondary" onclick="validatePinjam(event)">Pinjam</button>
                </a>
            </div>
        </div>
    </div>

    <script src="JS/pinjam.js "></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
                function saveDatesToSession(borrowDate, returnDate) {
            $.ajax({
                type: 'POST',
                url: '{{ route('save_dates') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    borrow_date: borrowDate,
                    return_date: returnDate,
                },
                success: function(response) {
                    console.log('Dates saved to session');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    // Handle error if needed
                }
            });
        }

        document.getElementById('borrow-date').addEventListener('change', function() {
            var borrowDate = this.value;
            var returnDate = document.getElementById('return-date').value;
            saveDatesToSession(borrowDate, returnDate);
        });

        document.getElementById('return-date').addEventListener('change', function() {
            var borrowDate = document.getElementById('borrow-date').value;
            var returnDate = this.value;
            saveDatesToSession(borrowDate, returnDate);
        });

        function validateBorrowDate() {
            var borrowDateInput = document.getElementById("borrow-date");
            var pinjamButton = document.querySelector("button.button-secondary");

            if (!borrowDateInput.value) {
                pinjamButton.classList.add("disabled");
            } else {
                pinjamButton.classList.remove("disabled");
            }
        }

        function validatePinjam(event) {
            var borrowDateInput = document.getElementById("borrow-date");
            var returnDateInput = document.getElementById("return-date");

            if (!borrowDateInput.value) {
                event.preventDefault(); // Mencegah aksi default dari tombol "Pinjam"
                alert("Silahkan memilih tanggal pinjam dulu!");
                return;
            }

            
            $.ajax({
            type: 'POST',
            url: '{{ route('save_dates') }}',
            data: {
                _token: '{{ csrf_token() }}',
                borrow_date: borrowDateInput.value,
                return_date: returnDateInput.value,
            },
            success: function(response) {
                // Lakukan tindakan lain setelah tanggal berhasil disimpan (jika ada)
                // Redirect ke halaman selanjutnya
                window.location.href = "{{ route('detail-pinjam-dosen', $buku->ISBN) }}";
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Tampilkan pesan error jika ada masalah saat menyimpan tanggal
            }
        });
        }
    </script>
@endsection
