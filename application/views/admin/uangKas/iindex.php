
<?php foreach ($bulan_pembayaran as $bln) : ?>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-bottom-info py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 font-weight-bold text-gray-800 mb-1"><?php echo $bln['nama_bulan'];  ?></div>
                    <div class="text-x font-weight-bold text-gray-500 mb-1"><?php echo $bln['tahun'];  ?></div>
                    <div class="text-x font-weight-bold text-gray-700 mb-1">Rp. <?php echo number_format($bln['pembayaran_perminggu'],0,',',',');  ?> / minggu</div>
                  <div class="badge badge-sm badge-success">Total uang kas bulan ini : Rp<?php echo number_format($b['total_perbulan'],0,',',','); ?></div>

                    <div class="text-x font-weight-bold text-gray-700 mb-1">Total uang kas bulan ini :<br>

                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editmodal"><i class="fas fa-bars"></i>
                        </button>
                        <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


<div class="btn btn-sm btn-success font-weight-bold text-gray-100"> Rp<?php echo number_format($u['minggu_ke_1'] + $u['minggu_ke_2'] + $u['minggu_ke_3'] + $u['minggu_ke_4'] + $u['minggu_ke_5'],0,',',','); ?></div>

$this->username->subject('Reset Password');
                $this->username->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?username=' . $this->input->post('username') . '&token=' . urlencode($token) . '">Reset Password</a>');


private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user['username'] == true ) {
                $this->session->set_userdata($data);
                if ($user['id_jabatan'] == 5) {
                    redirect('admin');
                } else if ($user['id_jabatan'] == 6) {
                    redirect('bendahara');
                } else {
                    redirect('user');
                }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
                redirect('auth');
        }

    }

    <div class="card-header py-3 ml-4">
        <h4 class="m-0 font-weight-bold text-gray-800">Pemasukan
        <h6 class="m-0 font-weight-bold text-gray-800">Pilih Bulan Pembayaran
            <select class="form-control col-sm-5" id="bulan_pembayaran" name="id_bulan">
                <?php foreach( $bulan_pembayaran as $b ) : ?>
                    <option value="<?= $b['id_bulan'] ?>"><?= $b['nama_bulan'].' | '. $b['tahun'].' | '. number_format($b['pembayaran_perminggu'],0,',',',');  ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <tr>
                <td class="h3 font-weight-bold text-gray-800">Pemasukan
                    <h6 class="m-0 font-weight-bold text-gray-800">Pilih Bulan Pembayaran
                    <select class="form-control col-sm-20" id="bulan_pembayaran" name="id_bulan">
                        <?php foreach( $bulan_pembayaran as $b ) : ?>
                            <option value="<?= $b['id_bulan'] ?>"><?= $b['nama_bulan'].' | '. $b['tahun'].' | '. number_format($b['pembayaran_perminggu'],0,',',',');  ?></option>
                        <?php endforeach; ?>
                    </select><br>
                    <button type="button" class="btn btn-sm btn-info">Laporan Pemasukan</button>
                </td>
                <td class=" col-sm-2 h3 font-weight-bold text-gray-800">Pengeluaran
                    <h6 class="m-0 font-weight-bold text-gray-800">Dari Tanggal <br>
                    <input type="date" name=""><br><br>
                    <button type="button" class="btn btn-sm btn-info">Laporan Pengeluaran</button>
                </td>
                <td>
                    <h6 class="m-0 font-weight-bold text-gray-800">Sampai Tanggal <br>
                    <input type="date" name="">
                </td>
            </tr>


    <?php foreach( $bulan_pembayaran as $b ) : ?>
    <?php  
        if ((isset($b['nama_bulan']) && $b['nama_bulan']!='') && (isset($b['tahun']) && $b['tahun']!='') && (isset($b['pembayaran_perminggu']) && $b['pembayaran_perminggu']!='')) {
            $nama_bulan = $b['nama_bulan'];
            $tahun = $b['tahun'];
            $pembayaran_perminggu = $b['pembayaran_perminggu'];
            $nama_bulantahunpembayaranperminggu = $nama_bulan.$tahun.$pembayaran_perminggu;
        } else {
            $nama_bulan = date('M');
            $tahun = date('Y');
            $pembayaran_perminggu = 'Rp.0';
            $nama_bulantahunpembayaranperminggu = $nama_bulan.$tahun.$pembayaran_perminggu;

        }
     ?>
    <?php endforeach; ?>

     <div class="alert alert-info">
         Laporan Pemasukan Bulan : <span class="font-weight-bold"><?php echo $nama_bulan ?></span> Tahun : <span class="font-weight-bold"><?php echo $tahun ?></span> Pembayaran : <span class="font-weight-bold">Rp<?php echo number_format($pembayaran_perminggu,0,',',',')?> / minggu</span>
     </div>


<a class="dropdown-item" href="<?= base_url('auth/profile/'.$this->session->id_user); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile Saya
                                </a>

<!-- modal untuk tambah data -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Tambah Siswa</h5>
              </div>
              <div class="modal-body">
                <?php echo form_open_multipart('uangkas/tambahAksii'); ?>
                <div class="form-group">
                <label class="font-weight-bold">Nama Siswa</label>
                <select class="form-control" id="siswa" name="id_siswa">
                    <?php foreach( $siswa as $s ) : ?>
                        <option value="<?= $s['id_siswa'] ?>"><?= $s['nama_siswa'] ?></option>
                    <?php endforeach; ?>
                    </select>
            <p class="text-info" data-toggle="modal" data-target="#exampleModall">Tidak ada nama siswa diatas? Tambahkan siswa disini!</p>
            </div>
            <!-- modal untuk tambah data -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body font-weight-bold">
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text" name="nisn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_siswa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <label>
                            <input type="radio" name="jk" value="L"> Laki-laki |
                            <input type="radio" name="jk" value="P"> Perempuan
                        </label>
                    </div>
                    <div class="form-group">
                        <label>No. Handphone</label>
                        <input type="text" name="nohp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close() ?>
              </div>
            </div>
          </div>
        </div>

<!-- akhir model -->


<button type="button" class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus"> Tambah Siswa</i>
        </button>

<?php foreach($bulan_pembayaran as $bln) : ?>
    
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">DataTables Detail
                <button type="button" class="btn btn-sm btn-success font-weight-bold text-gray-100 float-right" >Rp<?php echo number_format($bln['total_semua'],0,',',',');  ?> 
                </button>
        </div>
    <?php endforeach; ?>

    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editmodal<?php echo $p['id_pengeluaran'];?>"><i class="fas fa-edit"></i>
     </button>

<center>
                    <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('pengeluaran/hapus/'.$p['id_pengeluaran']) ?>"><i class="fas fa-trash"></i></a>
                </center>

<a class="btn btn-sm btn-info" href="<?php echo base_url('user/ubah/'.$u['id_user']) ?>"><i class="fas fa-edit"></i></a>    

<a class="collapse-item" href="cards.html">Riwayat Uang Kas</a>

<!-- Divider -->
            <hr class="sidebar-divider my-0">

            
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('laporan/index'); ?>">
                    <i class="fas fa-fw fa-copy"></i>
                    <span>Laporan</span></a>
            </li>

<!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 mb-0 font-weight-bold text-success">
                                            <i class="fas fa-dollar-sign"></i>
                                        Uang Kas</div>
                                            <div class="text-x font-weight-bold text-gray-800 mb-1">Jumlah Uang Kas :</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 mb-0 font-weight-bold text-danger">
                                            <i class="fas fa-dollar-sign"></i>
                                        Pengeluaran</div>
                                            <div class="text-x font-weight-bold text-gray-800 mb-1">Jumlah Pengeluaran :</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


<tr class="font-weight-bold">
            <td colspan="6">Jumlah</td>
            <td colspan="2"></td>
        </tr>

        <p class="text-info" data-toggle="modal" data-target="#exampleModall">Tidak ada nama aset diatas? Tambahkan aset disini!</p>

        <!-- modal untuk tambah data -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body font-weight-bold">
                    <div class="form-group">
                        <label>Nama Aset</label>
                        <input type="text" name="nama_aset" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Aset</label>
                        <input type="text" name="jml_aset" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="text" name="harga_aset" class="form-control" placeholder="Rp.">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group font-weight-bold">
                <label>Tanggal Pengeluaran</label>
                <input type="date" name="tgl_pengeluaran" class="form-control">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close() ?>
            </div>
        </div> 
    </div>
</div>

<!-- akhir modal -->

<div class="text-center">
                                        <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                    </div>


<!-- akhir modal -->

<!-- modal untuk edit data -->

<!-- Modal -->
<?php $no = 0;
foreach ($pengeluaran as $p) : $no++; ?>
<div class="modal fade" id="editmodal<?php echo $p['id_pengeluaran'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Ubah Data</h5>
            </div>
            <div class="modal-body font-weight-bold">
            <?php echo form_open_multipart('pengeluaran/ubahAksi'); ?>
            <div class="form-group">
                <label>Username</label>
                <select class="form-control" id="username" name="id_user">
                    <?php foreach( $user as $u ) : ?>
                        <option value="<?= $u['id_user'] ?>"><?= $u['username'] ?></option>
                    <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-group">
                <label>Nama Aset</label>
                <select class="form-control" id="jabatan" name="id_aset">
                    <?php foreach( $aset as $a ) : ?>
                        <option value="<?= $a['id_aset'] ?>"><?= $a['nama_aset'] ?></option>
                    <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-group">
                <label>Tanggal Pengeluaran</label>
                <input type="date" name="tgl_pengeluaran" class="form-control">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close() ?>
            </div>
        </div> 
    </div>
</div>
<?php endforeach; ?>

<!-- akhir modal -->

<!-- modal untuk tambah data -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Ubah Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body font-weight-bold">
                            <?php echo form_open_multipart('uangkas/ubahAksi'); ?>
                            <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id_detail" class="form-control" value="<?php echo $d['id_siswa']; ?>" readonly>
                </div>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 1</label>
                                <input type="text" name="minggu_ke_1" class="form-control" value="<?php echo $d['minggu_ke_1'] ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <?php echo form_close() ?>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- akhir model -->
                </td>
                <td><a href=""class="badge badge-danger" data-toggle="modal" data-target="#exampleMod"><?php echo number_format($d['minggu_ke_2'],0,',',',')?></a>
                    <!-- modal untuk tambah data -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Ubah Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body font-weight-bold">
                            <?php echo form_open_multipart('uangkas/ubahAksi'); ?>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 2</label>
                                <input type="text" name="minggu_ke_1" class="form-control" value="<?php echo $d['minggu_ke_2'] ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <?php echo form_close() ?>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- akhir model -->
                </td>
                <td><a href=""class="badge badge-danger" data-toggle="modal" data-target="#exampleM"><?php echo number_format($d['minggu_ke_3'],0,',',',')?></a>
                    <!-- modal untuk tambah data -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Ubah Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body font-weight-bold">
                            <?php echo form_open_multipart('uangkas/ubahAksi'); ?>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 3</label>
                                <input type="text" name="minggu_ke_1" class="form-control" value="<?php echo $d['minggu_ke_3'] ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <?php echo form_close() ?>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- akhir model -->
                </td>
                <td><a href=""class="badge badge-danger" data-toggle="modal" data-target="#exampleModa"><?php echo number_format($d['minggu_ke_4'],0,',',',')?></a>
                    <!-- modal untuk tambah data -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Ubah Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body font-weight-bold">
                            <?php echo form_open_multipart('uangkas/ubahAksi'); ?>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 4</label>
                                <input type="text" name="minggu_ke_1" class="form-control" value="<?php echo $d['minggu_ke_4'] ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <?php echo form_close() ?>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- akhir model -->
                </td>
                <td><a href=""class="badge badge-danger" data-toggle="modal" data-target="#exampleModal"><?php echo number_format($d['minggu_ke_5'],0,',',',')?></a>
                    <!-- modal untuk tambah data -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Ubah Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body font-weight-bold">
                            <?php echo form_open_multipart('uangkas/ubahAksi'); ?>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 5</label>
                                <input type="text" name="minggu_ke_1" class="form-control" value="<?php echo $d['minggu_ke_5'] ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <?php echo form_close() ?>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- akhir model -->
                </td>
            </tr>
        <?php endforeach; ?> 
    </tbody>
    </table>
    </div>
    </div>
</div>
</div>

<!-- modal untuk tambah data -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Tambah Siswa</h5>
              </div>
              <div class="modal-body">
                <?php echo form_open_multipart('uangkas/tambahAksii'); ?>
                <div class="form-group">
                <label class="font-weight-bold">Nama Siswa</label>
                <select class="form-control" id="siswa" name="id_siswa">
                    <?php foreach( $siswa as $s ) : ?>
                        <option value="<?= $s['id_siswa'] ?>"><?= $s['nama_siswa'] ?></option>
                    <?php endforeach; ?>
                    </select>
            <p class="text-info" data-toggle="modal" data-target="#exampleModall">Tidak ada nama siswa diatas? Tambahkan siswa disini!</p>
            </div>
            <!-- modal untuk tambah data -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body font-weight-bold">
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text" name="nisn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_siswa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <label>
                            <input type="radio" name="jk" value="L"> Laki-laki |
                            <input type="radio" name="jk" value="P"> Perempuan
                        </label>
                    </div>
                    <div class="form-group">
                        <label>No. Handphone</label>
                        <input type="text" name="nohp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close() ?>
              </div>
            </div>
          </div>
        </div>

<!-- akhir model -->


<?php echo $this->session->flashdata('message'); ?>
