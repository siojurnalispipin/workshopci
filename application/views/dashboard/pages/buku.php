<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Data Buku,</h2>
                        <p class="mb-md-0">Kelola Data Buku.</p>
                    </div>
                    <div class="d-flex">
                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                        <a href="<?php echo site_url('Dashboard') ?>"
                            class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                        <p class="text-primary mb-0 hover-cursor">Buku</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                        <i class="mdi mdi-download text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-clock-outline text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-plus text-muted"></i>
                    </button>
                    <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1>Book
                        <small>List</small>
                        <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary"
                                data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add
                                New</a></div>
                    </h1>

                    <div class="table-responsive">
                        <table id="mydata" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Rating</th>
                                    <th style="text-align: right;">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL ADD -->
    <form>
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Judul</label>
                            <div class="col-md-10">
                                <input type="text" name="judul" id="judul" class="form-control"
                                    placeholder="Judul Buku">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Deskripsi</label>
                            <div class="col-md-10">
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                                    placeholder="Deskripsi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Penulis</label>
                            <div class="col-md-10">
                                <input type="text" name="penulis" id="penulis" class="form-control" placeholder="Penulis">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Rating</label>
                            <div class="col-md-10">
                                <input type="number" name="rating" id="rating" class="form-control" placeholder="Rating">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL ADD-->

    <!-- MODAL EDIT -->
    <form>
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID Buku</label>
                            <div class="col-md-10">
                                <input type="text" name="id_edit" id="id_edit" class="form-control" placeholder="Id"
                                    readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Judul Buku</label>
                            <div class="col-md-10">
                                <input type="text" name="judul_edit" id="judul_edit" class="form-control"
                                    placeholder="Judul Buku">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Deskripsi</label>
                            <div class="col-md-10">
                                <input type="text" name="deskripsi_edit" id="deskripsi_edit" class="form-control"
                                    placeholder="Deskripsi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Penulis</label>
                            <div class="col-md-10">
                                <input type="text" name="penulis_edit" id="penulis_edit" class="form-control"
                                    placeholder="Penulis">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Rating</label>
                            <div class="col-md-10">
                                <input type="number" name="rating_edit" id="rating_edit" class="form-control"
                                    placeholder="Rating">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL EDIT-->

    <!--MODAL DELETE-->
    <form>
        <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong>Apakah anda yakin ingin menghapus buku?</strong>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL DELETE-->
</div>