<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <?php echo anchor('', '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', array('class' => 'btn bg-maroon btn-flat btn-sm')) ?>
                        <?php echo anchor('', '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', array('class' => 'btn bg-olive btn-flat btn-sm')) ?>
                        <?php echo anchor('', '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', array('class' => 'btn bg-navy btn-flat btn-sm')) ?>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>

                                    <td>
                                        <?php echo anchor('', '<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm')) ?>
                                        <?php echo anchor('', '<i class="fa fa-trash-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm')) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
</div>
