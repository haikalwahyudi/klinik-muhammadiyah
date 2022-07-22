<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1 class="m-0">Live Chat Dengan Pasien</h1>
                </div><!-- /.col -->
                <div class="col-sm-2">
                    <a href="<?= base_url(); ?>/Konsultasi" class="btn bg-teal float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>/.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pesan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <?php
                                $db = \Config\Database::connect();
                                $id = $duser->id_user;
                                $idUser = session()->get('id');
                                // $chat = $db->query("SELECT * FROM chat WHERE id_dokter = '$id' and tujuan = '$idUser'")->getResultArray();
                                $chat = $db->query("SELECT * FROM chat, user where chat.id_user=user.id_user ORDER BY urutan DESC")->getResultArray();
                                // dd($chat);
                                foreach ($chat as $cht) {
                                    if (($cht['id_user'] == $id and $cht['tujuan'] == $idUser) || ($cht['id_user'] == $idUser and $cht['tujuan'] == $id)) {
                                ?>
                                        <div class="direct-chat-msg <?= ($cht['aksi'] == 2) ? '' : 'right' ?>">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name <?= ($cht['aksi'] == 2) ? 'float-left' : 'float-right' ?>"><?= $cht['nm_user']; ?></span>
                                                <!-- <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span> -->
                                            </div>
                                            <img class="direct-chat-img" src="<?= base_url(); ?>/img/<?= $cht['foto'] ?>" alt="message user image">
                                            <div class="direct-chat-text <?= ($cht['aksi'] == 2) ? '' : 'bg-teal' ?> <?= ($cht['aksi'] == 2) ? 'float-left' : 'float-right' ?>">
                                                <?= $cht['pesan']; ?>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                // } 
                                ?>
                            </div>
                            <!--/.direct-chat-messages-->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="<?= base_url(); ?>/Chat/chatAksiDokter" method="post">
                                <div class="input-group">
                                    <input type="hidden" name="id_pasien" value="<?= $duser->id_user; ?>">
                                    <input type="text" name="pesan" required placeholder="Tulis Pesan ..." class="form-control">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection("layout/v_template"); ?>