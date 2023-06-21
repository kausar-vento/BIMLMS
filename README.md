<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## TENTANG BIMLMS

<b>BIMLMS</b> merupakan website penyedia Course Online yang bisa digunakan untuk mendapatkan materi - materi secara mudah dan efisien. Terdapat bebrapa materi dan modul - modul yang bisa digunakan. Harga dari setia course relative aman di kantong:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


## FITUR BIMLMS
<ul>
    <li>Admin
        <ul>
            <li>Manage User
                <p>Pada fitur ini admin bisa mengawasi kegiatan user, jika mendapati user melakukan perbuatan yang tidak pantasa terdapat fitur ban untuk membuat user tidak                    bisa masuk ke halaman BIMLMS</p>
                <p>Berikut adalah tampilan dari Manage User:</p>
                <img src="tampilan aplikasi/Admin/manage-acount-user.PNG" />
            </li>
            <li>Manage Category
                <p>Pada halaman ini admin bisa menambahkan beberapa category. Setiap category terdapat subcategory yang admin bisa admin gunakan</p>
                <ul>
                    <li>Category
                        <ul>
                            <li>Home Category
                                <img src="tampilan aplikasi/Admin/home-category.PNG" />
                            </li>
                            <li>Create Category
                                <img src="tampilan aplikasi/Admin/create-category.PNG" />
                            </li>
                            <li>Edit Category
                                <img src="tampilan aplikasi/Admin/edit-category.PNG" />
                            </li>
                        </ul>
                    </li>
                    <li>Sub Category
                        <ul>
                            <li>Home Sub Category
                                <img src="tampilan aplikasi/Admin/home-subcategory.PNG" />
                            </li>
                            <li>Create Sub Category
                                <img src="tampilan aplikasi/Admin/create-subcategory.PNG" />
                            </li>
                            <li>Edit Sub Category
                                <img src="tampilan aplikasi/Admin/edit-subcategory.PNG" />
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Manage Course
                <p>Pada halaman ini admin bisa menambahkan course, dengan mengisikan data - data dari course yang diperlukan maka course akan berhasil terbuat. Setiap                          didalam course terdapat materi yang bisa admin tambahkan. Berikut adalah tampilanya</p>
                <ul>
                    <li>Course
                        <ul>
                            <li>Home Course
                                <img src="tampilan aplikasi/Admin/home-course.PNG" />
                            </li>
                            <li>Create Course
                                <img src="tampilan aplikasi/Admin/create-course-1.PNG" />
                                <img src="tampilan aplikasi/Admin/create-course-2.PNG" />
                                <img src="tampilan aplikasi/Admin/create-course-3.PNG" />
                            </li>
                            <li>Edit Course
                                <img src="tampilan aplikasi/Admin/edit-course-1.PNG" />
                                <img src="tampilan aplikasi/Admin/edit-course-2.PNG" />
                                <img src="tampilan aplikasi/Admin/edit-course-3.PNG" />
                            </li>
                        </ul>
                    </li>
                    <li>Materi
                        <ul>
                            <li>Home Materi
                                <img src="tampilan aplikasi/Admin/home-materi.PNG" />
                            </li>
                            <li>Create Materi
                                <img src="tampilan aplikasi/Admin/create-materi.PNG" />
                            </li>
                            <li>Edit Materi
                                <img src="tampilan aplikasi/Admin/edit-materi.PNG" />
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Manage Transaction
                <p>Pada halaman ini admin bisa mengawasi ataupun melakukan persetujuan dan pembatalan transaksi yang sudah dilakukan user. Jika transaksi berhasil maka                        course yang sudah dibeli oleh user akan tersimpan dan user bisa mengakses full dari course tersebut</p>
                <img src="tampilan aplikasi/Admin/transaksi-admin.PNG" />
            </li>
        </ul>
    </li>
    <li>User
        <ul>
            <li>Login & Regiter
                <p>Pada fitur ini user bisa melakukan login ke dalam website BIMLMS, jika user belum memiliki maka user bisa melakukan proses register untuk membuat                           akun</p>
                <ul>
                    <li>Register
                        <img src="tampilan aplikasi/User/login-user.PNG"/>
                    </li>
                    <li>Login
                        <img src="tampilan aplikasi/User/register-user.PNG"/>
                    </li>
                </ul>
            </li>
            <li>List Course
                <p>Setelah user berhasil masuk ke halaman home BIMLMS, user akan diberikan beberapa course yang baru dibuat oleh admin, dan course yang memiliki kualitas                      yang Top. selain itu jika user ingin melihat lebih banyak course yang ada user bisa menuju ke halaman selanjutnya, nanti pada halaman selanjutnya user                      akan diberikan semua course yang ada, dan bisa melakukan filter berdasarkan category yang ada. Jika user ingin melihat detail dari course tersebut, user                    cukup melakukan klik pada course yang ingin dilihat</p>
                <ul>
                    <li>Main Home
                        <img src="tampilan aplikasi/User/home-user.PNG"/>
                        <img src="tampilan aplikasi/User/home-2-user.PNG"/>
                        <img src="tampilan aplikasi/User/home-3-user.PNG"/>
                    </li>
                    <li>All Course
                        <img src="tampilan aplikasi/User/allcourse-user.PNG"/>
                    </li>
                    <li>Filter By Category
                        <img src="tampilan aplikasi/User/filterbycategory-user.PNG"/>
                    </li>
                    <li>Detail Course
                        <img src="tampilan aplikasi/User/single-course-user.PNG"/>
                        <img src="tampilan aplikasi/User/single-course-2-user.PNG"/>
                    </li>
                </ul>
            </li>
            <li>Payment
                <p>Pada fitur ini jika user ingin meleihat materi yang ada di course tersebut secara penuh, maka user harus melakukan proses transaksi terlebih dahulu. di                     halaman detail course terdapat button untuk melakukan pembayaran, setelah itu user akan diberikan no rekening, kemudian user bisa memberikan bukti                          transfer, setelah itu menunggu konfirmasi dari admin, lalu jika semua data suda benar maka course bisa dimiliki oleh user. Setelah melakukan pembelian                      user bisa mengakses full materi course tersebut di halaman kelas</p>
                <ul>
                    <li>Transaksi
                        <img src="tampilan aplikasi/User/transaksi-user.PNG"/>
                    </li>
                    <li>History
                        <img src="tampilan aplikasi/User/history-user.PNG"/>
                    </li>
                    <li>Kelas
                        <img src="tampilan aplikasi/User/kelas-user.PNG"/>
                        <img src="tampilan aplikasi/User/isi-kelas-user.PNG"/>
                        <img src="tampilan aplikasi/User/isi-kelas-2-user.PNG"/>
                    </li>
                </ul>
            </li>
        </ul>    
    </li>
</ul>

