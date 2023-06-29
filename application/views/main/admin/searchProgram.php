<table class="table my-4">
    <thead class="table-head">
        <tr>
            <th>No.</th>
            <th style="width: 30%;">Title</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php if (!empty($results)): ?>
    <?php $no = 1;
        foreach ($results as $item) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $item->name ?></td>
                <td><?php echo date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
                </td>
                <td>
                    <p class="menunggu">Menunggu</p>
                </td>
                <td class="d-flex justify-content-between">
                    <a href="<?php echo site_url() . 'detail-program/' . $item->id ?>">
                        <button class="edit">
                            <i class="ri-eye-line"></i>
                        </button>
                    </a>
                    <a href="<?php echo site_url('admin/edit/' . $item->id) ?>">
                        <button class="warning">
                            <i class="ri-edit-line"></i>
                        </button>
                    </a>
                        <button onclick="deleteProgram('<?= $item->id ?>','<?= $item->name ?>')" type="submit" class="delete">
                            <i class="ri-delete-bin-5-line"></i>
                        </button>
                </td>
            </tr>
        <?php endforeach; ?>
<?php else: ?>
    <div>Tidak ditemukan hasil pencarian</div>
<?php endif; ?>
    </tbody>
</table>
