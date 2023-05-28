<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="border-bottom">Bank dan Kartu</h1>
    <p>kartu debut dan kredit</p> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambahkan kartu
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan kartu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <h4 class="mb-5">Detil kartu</h4>
                    <form action="<?= base_url().'profile/settingsBank' ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="nomer"  placeholder="Nomer Kartu">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <input type="varchar" class="form-control" name="bb/tt"  placeholder="BB/TT">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="cvv"  placeholder="CVV">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name_kartu"  placeholder="Nama dikartu">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    
    <?php if($bank == null) :?>
        <p>belum ada bank </p>
    <?php else : ?>
        <?php foreach($bank as $item): ?>
            <div class="alert alert-secondary" role="alert">
                <div class="row">
                    <div class="col">
                        <?= $item->name ?>
                    </div>
                    <div class="col">
                        <?= $item->name_kartu ?><br>
                        <?= $item->nomer ?>
                    </div>
                    <div class="col">
                        aktif
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>