# AJAX-JQuery
Pemrograman Web B pertemuan 7 membuat Submit Form Without Page Refresh.

| Nama | NRP |
| ---- | --- |
| Najma Lail Arazy | 5025241243 |

Ketika pengguna menekan tombol Submit, jQuery mendeteksi peristiwa pengiriman form menggunakan event `on('submit')`. Perintah `e.preventDefault()` digunakan untuk mencegah perilaku bawaan browser yang biasanya langsung memuat ulang halaman setelah form dikirim. Setelah itu, jQuery mengambil nilai dari setiap input (nama, email, dan pesan) menggunakan metode `.val()` dan melakukan pemeriksaan apakah ada kolom yang masih kosong. Jika ditemukan kolom yang belum diisi, JavaScript akan menampilkan pesan peringatan di bawah tombol submit yang berisi daftar nama kolom yang kosong. Namun, jika semua kolom sudah terisi, maka AJAX digunakan untuk mengirim data tersebut ke file `process.php` di server menggunakan metode `POST`.

Selama proses pengiriman, fungsi beforeSend akan menampilkan pesan `Mengirim data...` sebagai indikator bahwa data sedang diproses. Setelah server memberikan balasan melalui `echo` di file PHP, fungsi `success` akan menangkap hasilnya dan menampilkannya langsung pada elemen dengan `id response` tanpa perlu me-refresh halaman. Dengan cara ini, pengguna bisa melihat hasil pengiriman secara instan. Apabila terjadi kesalahan seperti koneksi gagal atau file PHP tidak ditemukan, fungsi `error` akan menampilkan pesan kesalahan yang sesuai.

Tampilan:

<img width="651" height="647" alt="image" src="https://github.com/user-attachments/assets/c21d301c-67ee-450b-894e-55a64a9f2d5d" />

<img width="648" height="675" alt="image" src="https://github.com/user-attachments/assets/b5d41964-6083-4f8e-816b-b6353f9ed7ba" />

