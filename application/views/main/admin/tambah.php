<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/home.css'); ?>">
    
</head>

<body>
    <?php $this->load->view("_partials/navbar_admin.php");
    // var_dump($consultant) ?>
    
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 col-md-3 user-box ">
                <?php $this->load->view('_partials/sidebar.php') ?>
            </div>
            <div class="col-12 col-md-9">
                <div class="container container-consultant">
                    <div class="route d-flex gap-2">
                        <p><strong>Program</strong></p>
                        <i class="ri-arrow-right-s-line"></i>
                        <p><strong>Training</strong></p>
                        <i class="ri-arrow-right-s-line"></i>
                        <p>Kepemimpinan</p>
                    </div>
                    <h4>Tambah Program</h3>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <h4> Kesalahan Input : </h4>
                            <?= $this->session->flashdata('error'); ?>
                            
                        </div>
                    <?php endif; ?>
                    
                        <p>Info Dasar</p>
                        <form action="<?= base_url() . 'admin/tambah' ?>" enctype="multipart/form-data" method="POST">
                            <div class="form-input">
                                <div class="upload-container">
                                    <div class="header">
                                    <img id="preview" src="#" alt="Preview Image" style="display: none;
                                    max-height: 200px;">
                                        <label for="file" class="footer">
                                            <i class="ri-link"></i>
                                            <p class="m-0">Upload file</p>
                                            <i class="ri-close-fill"></i>
                                        </label>
                                    </div>
                                    <input id="file" name="photo" type="file" onchange="previewImage(event)">
                                </div>
                            </div>
                            <div class="form-input">
                                <p>Judul</p>
                                <input class="log-input" type="text" placeholder="Masukan Judul" name="name" id="">
                                <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Tag</p>
                                <div id="input-tag-Container">
                                    <div class="row">
                                    <!-- <?php foreach ($tag_options as $tag) : ?>
                                            <div class="col-6">
                                                <div class="d-flex gap-3 mb-2"> 
                                                    <input type="text" name="tag[]" value="<?= $tag; ?>" class="log-input select-dropdown" multiple>
                                                    <button type="button" class="deleteTagButton log-primary-button">Delete</button>
                                                    </div>
                                            </div>
                                        <?php endforeach; ?> -->
                                    </div>
                                </div>
                                <div class="d-flex gap-3">
                                    <input type="text" id="new-tag-Input" class="log-input" placeholder="Masukan tag">
                                    <button class="log-primary-button" type="button" id="add-tag-Button">Add</button>
                                </div>
                                
                            </div>
                            <div class="form-input">
                                <p>Type</p>
                                <input class="log-input" type="text" placeholder="Masukan Type" name="type" id="">
                            </div>
                            
                            <?php if($consultant != null) :?>
                                <div class="form-input">
                                    <p>Konsultan</p>
                                    <select name="users_id" id="users_id" class="log-input form-select">
                                        <option style=" margin-left: 10px;" value="">Select Consultant</option>
                                        <?php foreach ($consultant as $consultants) : ?>
                                            <option value="<?= $consultants->id; ?>" ><?= $consultants->name; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <?php else : ?>
                                <?php 
                                // var_dump($this->session->userdata('id'));die;
                                $id = $this->db->select('id')
                                ->from('consultant')
                                ->where('users_id',$this->session->userdata('id'))
                                ->get()->result();
                                
                                // var_dump($id);die;
                                
                                ?>
                                <input type="hidden" name="users_id" value="<?= $id[0]->id ?>">
                            <?php endif ;?>

                            <div class="form-input">
                                <p>Deskripsi</p>
                                <textarea class="log-input" type="text" placeholder="Masukan Deskripsi" style="height: 300px" name="descProgram" id=""></textarea>
                                <?= form_error('descProgram', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <hr class="line">
                            <div class="form-input">
                                <p>Lokasi</p>
                                <div class="row text-center">
                                    <!-- <button class="col type "></button> -->
                                    <button type="button" onclick="changeInput('online')" class="col type active">Online</button>
                                    <button type="button" onclick="changeInput('offline')" class="col type">Offline</button>
                                    <button type="button" onclick="changeInput('hybrid')" class="col type">Hybrid</button>
                                </div>

                                <!-- nilai type consultan/training -->
                                <input type="hidden" name="type" value="consultan">
                                <div class="card card-info" style="width: 100%;">
                                    <ul class="p-0 m-0">
                                        <li style="list-style: inside;">
                                            Silakan masukan URL Streaming dengan benar karena URL Streaming ini yang
                                            akan
                                            diterima oleh Pembeli Program kamu setelah transaksi selesai terbayar.
                                        </li>
                                        <li style="list-style: inside;">
                                            Kamu tidak bisa melakukan perubahan URL Streaming setelah kamu selesai
                                            melakukan
                                            pembuatan event.
                                        </li>
                                        <li style="list-style: inside;">
                                            Kesalahan memasukkan URL Streaming bukan merupakan tanggung jawab ADMIN.
                                        </li>
                                        <li style="list-style: inside;">
                                            Jika kamu salah memasukkan URL Streaming, maka kamu harus membuat event baru
                                            untuk memperbaiki URL Streaming ini.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="onlineInput" style="display: none;">
                                <div class="form-input">
                                    <!-- <input type="hidden" name="mode" value="online"> -->
                                    <p>URL Streaming</p>
                                    <input class="log-input" type="text" placeholder="Masukan Nama Konsultan" name="url" id="">
                                </div>
                            </div>
                            <div id="offlineInput" style="display: none;">
                                <!-- <input type="hidden" name="mode" value="online"> -->
                                <div class="form-input">
                                    <p>Tempat</p>
                                    <input class="log-input" type="text" placeholder="Masukan Nama Tempat kota" name="tempat" id="">
                                </div>
                                <div class="form-input">
                                    <p>Alamat</p>
                                    <input class="log-input" type="text" placeholder="Masukan Nama alamat" name="alamat" id="">
                                </div>
                                <div class="form-input">
                                    <p>Kota</p>
                                    <input class="log-input" type="text" placeholder="Masukan Nama kota" name="kota" id="">
                                </div>
                            </div>
                            
                            <hr class="line">
                            <div class="form-input">
                                <p>Tanggal & Waktu</p>
                                <div class="date-time gap-3">
                                    <div class="col card card-date-time ">
                                        <i class="ri-calendar-2-line" style="font-size: 40px;"></i>
                                        <div class="display">
                                            <p class="text-center">Program Start *</p>
                                            <input type="date" id="date" name="date_start">
                                        </div>
                                        <i class="ri-subtract-fill"></i>
                                        <div class="display">
                                            <p class="text-center">Program End *</p>
                                            <input type="date" id="date" name="date_end">
                                        </div>
                                    </div>
                                    <div class="col card card-date-time ">
                                        <i class="ri-time-line" style="font-size: 40px;"></i>
                                        <div class="display">
                                            <p class="text-center">Program Start *</p>
                                            <input type="time" id="time" name="time_start">
                                        </div>
                                        <i class="ri-subtract-fill"></i>
                                        <div class="display">
                                            <p class="text-center">Program End *</p>
                                            <input type="time" id="time" name="time_end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input id="mode" type="hidden" name="mode" value="">
                            <div class="form-input">
                                <p>Kuota & Harga</p>
                                <div class="date-time gap-3">
                                    <div class="col">
                                        <!-- berhubung priceMaxnya tidak ada inputnya ,aku pake priceMin ditambah 100K -->
                                        <input class="log-input" type="number" name="priceMin" placeholder="Masukan harga minimal">
                                        <?= form_error('priceMin', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                    <div class="col">
                                        <input class="log-input" type="number" name="priceMax" placeholder="Masukan Harga maksimal">
                                        <?= form_error('priceMax', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                    <div class="col">
                                        <input class="log-input" type="number" name="kuota" placeholder="Masukan kuota">
                                        <?= form_error('kuota', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                            </div>
                            <hr class=" line">
                            <div class="form-input d-flex flex-row-reverse">
                                <button class="log-primary-button" type="submit" name="" id="">Simpan</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function changeInput(data) {
            
            
            
            document.getElementById("onlineInput").style.display = "none";
            document.getElementById("offlineInput").style.display = "none";
            // document.getElementById("hybridInput").style.display = "none";

            
            if ( data === "online") {
                document.getElementById("onlineInput").style.display = "block";
                document.getElementById("mode").value = 'online';
            } else if (data === "offline") {
                document.getElementById("offlineInput").style.display = "block";
                document.getElementById("mode").value = 'offline';
            } else if (data === "hybrid") {
                document.getElementById("offlineInput").style.display = "block";
                document.getElementById("onlineInput").style.display = "block";
                document.getElementById("mode").value = 'hybrid';
                
                // document.getElementById("hybridInput").style.display = "block";
            }

        }

        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function(){
                var preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }

        //tag
        document
            .getElementById("add-tag-Button")
            .addEventListener("click", function () {
                var newInput = document.getElementById("new-tag-Input");
                var newValue = newInput.value.trim();

                if (newValue !== "") {
                    var inputContainer = document.getElementById("input-tag-Container");

                    // Check if there are any existing rows
                    var rows = inputContainer.getElementsByClassName("row");
                    var lastRow = rows.length > 0 ? rows[rows.length - 1] : null;

                    // Create a new row if the last row is already filled with two columns
                    if (!lastRow || lastRow.children.length === 2) {
                        var newRowDiv = document.createElement("div");
                        newRowDiv.classList.add("row");
                        inputContainer.appendChild(newRowDiv);
                        lastRow = newRowDiv;
                    }

                    var newColDiv = document.createElement("div");
                    newColDiv.classList.add("col-6");

                    var newField = document.createElement("div");
                    newField.classList.add("d-flex", "gap-3", "mb-2");

                    var Input = document.createElement("input");
                    Input.type = "text";
                    Input.name = "tag[]";
                    Input.value = newValue;
                    Input.classList.add("log-input", "select-dropdown");

                    var deleteButton = document.createElement("button");
                    deleteButton.type = "button";
                    deleteButton.classList.add("delete-Button", "log-primary-button");
                    deleteButton.textContent = "Delete";

                    newField.appendChild(Input);
                    newField.appendChild(deleteButton);
                    newColDiv.appendChild(newField);
                    lastRow.appendChild(newColDiv);

                    newInput.value = "";
                }
            });

        document
            .getElementById("input-tag-Container")
            .addEventListener("click", function (event) {
                if (event.target.classList.contains("delete-Button")) {
                    event.target.parentElement.parentElement.remove();
                }
            });

    </script>
    

</body>

</html>