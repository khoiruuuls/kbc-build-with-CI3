update dari khoirul

- penambahan one to many dari consultant ke program
- responsive design on progress
- fix add function pada admin saat penambahan program dan consultant

update dari fadli 
- Revisi hide register dan membuat frame fix foto agar ukuran foto tidak mengikuti besaran foto aslinya

update dari sadam

- penambahan feild di consultant yaitu kota dan provinsi karna di login consultant ada inputnya
- register buat consultant udah berfungsi cuma yang input kota belum
- list provinsi menggunakan API provinsi
- di seminar ngebetulin search dan nav aktif yang belum berfungsi dan page seminar/index udah di beri hak akses yaitu consultant
- di admin nambah function seach buat program sama search buat konsultan , admin/index udah ku kasi hak akses jadi kalau mo login pake akun admin
- feild konsultant_id diganti jadi users_id di tabel seminar

update sadam
-crud program bisa create edit dan delete + upload foto
-terus sama crud consultant juga sama 

kalau misal ada foto yang gak terakupload bisa bilang bang soalnya susah disitunya ,tapi bismillah tetep terinput
>>>>>>> e2e6c547d0f7da4eb27d557c6c8f9d76b2e8a235


update sadam lagi
- crud program sudah bisa pilih mode
- alert delete




Update penutup project dari sadam

==DARI SISI WEB==
- revisi consultant pada tambah 
- revisi consultant pada edit
- revisi di beranda menampilkan program di urutkan berdasarkan banyaknya user yang ikut
- Membuat pagination menjadi berfungsi tapi desainnya agak ancur ,jadi gatau ngaturnya
- search pada program ku jadikan real time tapi yang consultan tidak
- di detil program atau program.php khusus login sebagai admin disitu ada button baru yaitu aktifkan ,artinya mengaktifkan program consul soalnya kan di status di tabel semuanya menunggu
- terus itu kita kalau jadi consultant di page admin itu cuma nampilin data program dari consultant yang login dan data consultantnya itu sendiri , nanti abang bisa coba

==DARI SISI DATABASE==
- penambahan feild pada tabel consultant yaitu status , status ini yang nantinya yang nentuin menunggu atau aktif
- terus di tabel users itu abang wajib pake punyaku soalnya data nya banyak , nah data data itu yang nentuin urutan program di page home / beranda
- tabel tambahan yaitu kuota_program , fungsinya agar tahu urutan program yang paling banyak diikuti , istilahnya yang sudah join 


misal ada salah kabari bang
