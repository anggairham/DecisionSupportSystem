# Contributing

Ketika berkontribusi pada repositori ini, mohon diskusikan yang ingin Anda buat melalui [Issues](https://github.com/Anggairham/DecisionSupportSystem/issues), 
atau email anggairham08@gmail.com dengan pemilik repositori ini sebelum melakukan perubahan.


## Cara Pull Request

Berikut langkah-langkahnya secara singkat:

1. Fork it!
2. Buatlah *branch* fitur baru: `git checkout -b my-new-feature`
3. *Commit* perubahannya: `git commit -am 'Add some features'`
4. *Push* ke branch di *remote*: `git push origin my-new-feature`
5. Buat *pull request*

Contoh:
1. Cloning project yang sudah anda fork ke akun anda

        git clone <alamat-repo>

    Contoh:

        git clone https://github.com/namaakun/DecisionSupportSystem.git

2. Untuk mempermudah pengembangan, hendaknya kita menambahkan repository pusat dengan lokal milik kita agar tidak terjadi konflik dengan kontributor lainnya.

        git remote add <nama-repo> <alamat-repo>

    Contoh:

        git remote add upstream https://github.com/Anggairham/DecisionSupportSystem.git

3. Setelah remote repositori selesai, buatlah branch baru agar tidak merusak history branch utama, dan juga untuk memudahkan racking code.

        git checkout -b <nama-cabang>

    Contoh:

        git checkout -b sample-project

4. Di cabang baru ini lah kita akan untuk melakukan perubahan kode, yang nantinya bisa kita push ke repo pusat. Untuk berpindah branch bisa kita gunakan `git checkout <nama-cabang>`, dimana `<nama-cabang>` adalah nama yang anda gunakan pada langkah sebelumnya.

5. Setelah melakukan perubahan, kita bisa lakukan commit berisi deskripsi singkat tentang perubahan yang anda lakukan. Tetapi jika ada penambahan file, bisa menggunakan perintah `git add <nama-file-baru>`, atau gunakan `git add .` untuk menambahkan semua perubahan yang ada di direktori tersebut secara rekursif. Setelah itu baru bisa kita commit.

        git commit -m "<pesan singkat>"

    Contoh:

        git commit -m "fix sample project and added gradle compile"

6. Setelah selesai melakukan commit, kita akan melakukan persiapan untuk membuat *pull request* (biasa disingkat PR) ke repo pusat. Pertama kita pindah branch kembali ke master. 

        git checkout master

7. Setelah itu, kita akan mengambil kode lagi dari pusat, untuk memastikan tidak terdapat konflik pada kontribusi kode kita. Konflik dapat terjadi jika dua atau lebih kontributor melakukan perubahan pada satu berkas, terutama jika perubahan dilakukan pada baris yang sama, terlepas dari apakah tujuan perubahan sama atau tidak.

        git fetch upstream
        git merge upstream/master

8. Dengan proses diatas, setidaknya kita telah bisa memastikan bahwa tidak ada konflik dengan repo pusat. Sekarang kita kembali ke branch lokal development kita `sample-project`.

        git checkout sample-project

9. Setelah itu, kita gabungkan cabang tersebut dengan cabang utama, sehingga kontribusi dapat dikirimkan kembali ke repositori pusat milik neokree, Material Tabs android library, dengan perintah `git rebase <nama-branch>`.

        git rebase master

10. Sebelum push ke repositori pusat milik neokree, kita akan push ke repository hasil fork di awal pembahasan tadi.

        git push origin sample-project

11. Setelah di push, kita akan melakukan pull request dan membandingkan perubahan yang telah anda lakukan terhadap repo pusat. Anda juga bisa menyisipkan pesan untuk memberitahukan developer pemilik repo pusat tentang apa yang anda lakukan. Setelah yakin terhadap perubahan yang telah anda lakukan, silahkan pilih create pull request dan menunggu tanggapan dari pemilik repo pusat. Lebih lengkapnya bisa anda lihat di tag screenshot.


### Special Thanks

* [endymuhardin](https://github.com/endymuhardin/belajarGit/edit/master/cara-berkontribusi-opensources-github.md) - Who inspired me to write this doc :bowtie:
* My Friend's :wink:
* And Allah who gave me life :smiley:

