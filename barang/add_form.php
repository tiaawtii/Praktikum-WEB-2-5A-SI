<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Barang</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('barang') ?>">Barang</a></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barcode</th>
                                <th>Name</th>
                                <th>Satuan</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $item) {
                            echo "<tr>
                                <td>{$no}</td>
                                <td>{$item->barkode}</td>
                                <td>{$item->name}</td>
                                <td>{$item->satuan}</td>
                                <td>{$item->kategori}</td>
                                <td>{$item->stok}</td>
                                <td>{$item->harga_beli}</td>
                                <td>{$item->harga_jual}</td>
                                <td>
                                    <div>
                                        <a href='".base_url('barang/getedit/' . $item->id)."' class='btn btn-sm btn-info'><i class='fas fa-edit'></i> EDIT</a>
                                        <a href='".base_url('barang/delete/'.$item->id)."' class='btn btn-sm btn-danger' onclick='return confirm(\"Ingin menghapus data ini?\");'><i class='fas fa-trash'></i> Hapus</a>
                                    </div>
                                </td>
                            </tr>";
                            $no++;
                        }
                        ?>
                        </tbody>
                    </table>
                    <form action="<?php echo site_url('barang/save') ?>" method="post" >
                    <div class="mb-3">
                        <label>Barkode<code>*</code></label>
                        <input class="form-control" name="barkode" type="text" placeholder="Barkode">
                    </div>
                    <div class="mb-3">
                        <label>Nama Barang<code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label>Harga Beli<code>*</code></label>
                        <input class="form-control" name="harga_beli" type="text" placeholder="Harga Beli">
                    </div>
                    <div class="mb-3">
                        <label>Harga Jual<code>*</code></label>
                        <input class="form-control" name="harga_jual" type="text" placeholder="Harga Jual">
                    </div>
                    <div class="mb-3">
                        <label>Kategori<code>*</code></label>
                        <select name="kategori" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($kategori as $k):?>
                                <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
                                <?php endforeach;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label >Satuan<code>*</code></label>
                        <select name="satuan" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($satuan as $k):?>
                                <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
                            <?php endforeach;?>    
                        </select>
                    </div>
                    <div class="mb-3">
                        <label >Supplier <code>*</code></label>
                        <select name="supplier" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($supplier as $k):?>
                                <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
                            <?php endforeach;?>    
                        </select>
                    </div>
                    <div class="mb-3">
                        <label >Stok</label>
                        <input class="form-control" name="stok" type="text" placeholder="Stok">
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</main>