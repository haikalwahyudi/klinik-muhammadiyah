<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1 class="m-0">Live Chat Dengan Dokter <?= $data->nm_dokter; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-2">
                    <a href="<?= base_url(); ?>/Chat" class="btn bg-teal float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
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
                                <!-- <input type="text" name="id_dokter" value="<?= $data->id_dokter; ?>"> -->

                                <?php
                                // dd($duser);
                                // foreach ($chat as $cht) {
                                // dd($cht);
                                // if ($data->id_dokter == $cht['id_dokter'] && $cht['aksi'] = '1') {
                                $db = \Config\Database::connect();
                                $id = $data->id_dokter;
                                $chat1 = $db->query("SELECT * FROM chat WHERE id_dokter = '$id' and aksi = '1'")->getResultArray();
                                // dd($chat1);
                                foreach ($chat1 as $cht1) {
                                ?>
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left"><?= $data->nm_dokter; ?></span>
                                            <!-- <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span> -->
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="<?= base_url(); ?>/template/dist/img/user1-128x128.jpg" alt="message user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            <?= $cht1['pesan']; ?>
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                <?php
                                }
                                // } 
                                ?>

                                <?php
                                // foreach ($chat as $cht) {
                                //     if ($cht['id_user'] = session()->get('id') && $chat['aksi'] = '2') {
                                //         dd($chat);
                                $db = \Config\Database::connect();
                                $id = session()->get('id');
                                $id_dokter = $data->id_dokter;
                                // dd($id_dokter);
                                $chat2 = $db->query("SELECT * FROM chat WHERE id_user = '$id' and aksi = '2' and id_dokter = '$id_dokter'")->getResultArray();
                                // dd($chat);

                                foreach ($chat2 as $cht2) {
                                ?>
                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-right"><?= session()->get('nama'); ?></span>
                                            <!-- <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span> -->
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="<?= base_url(); ?>/template/dist/img/user3-128x128.jpg" alt="message user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            <?= $cht2['pesan']; ?>
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                <?php
                                }
                                // }
                                ?>
                            </div>
                            <!--/.direct-chat-messages-->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="<?= base_url(); ?>/Chat/chatAksiPsn" method="post">
                                <div class="input-group">
                                    <input type="hidden" name="id_dokter" value="<?= $data->id_dokter; ?>">
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