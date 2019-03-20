# Penjelasan
proyek ini adalah sebuah crud yang terdiri dari 2 `table` yaitu `t_kelas` dan `t_siswa`, `t_siswa` berisi data data informasi milik siswa tersebut dan `t_kelas` berisi data kelas tersebut.

# Komponen
setiap  `crud` diatur di dalam `controller` nya masing masing, `crud` untuk `t_siswa` di atur di dalam file `SiswaController` dan `crud` untuk `t_kelas` di antur di dalam file `KelasController`

## Cara Penginstallan 

Pertama ketik di cmd `composer create-project laravel/lumen nama-project --prefer-dist` 
Selain itu, download postman untuk melihat/mengecek database
Pada postman ada beberapa method :
- `POST` Untuk menampilkan database atau read pada crud,
- `GET` Untuk menambah dan mengubah pada database,
- `DELETE` Untuk mengha
## Cara Kerja

- Pertama, install dulu lumen
- Kedua, membuat database dengan ketik `php artisan make:migration NameDatabase` pada cmd
- Ketiga, mmebuat controller dengan ketik `php artisan wm:controller NameController` pada cmd
- Keempat, buatlah beberapa function supaya bekerja pada postman

