<div class="row">
    <div class="col-sm-12 col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Number of Domain Added</h4>
                <div class="d-flex justify-content-between">
                    <p class="text-muted">Avg. Session</p>
                    <p class="text-muted"><?= $domain_count ?></p>
                </div>
                <div class="progress progress-md">
                    <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="<?= $domain_count ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Number of Users</h4>
                <div class="d-flex justify-content-between">
                    <p class="text-muted">Avg. Session</p>
                    <p class="text-muted"><?= $user_count ?></p>
                </div>
                <div class="progress progress-md">
                    <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="<?= $user_count ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-sm-12 col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Line chart</h4>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bar chart</h4>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="card mg-b-10">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="mg-b-0">Latest Domain List</h6>
                <div style="float:right;">
                    <a href="<?= site_url('admin/domain') ?>">
                        <button class="btn btn-outline-orange btn-xs">
                            Show All
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-striped ">
                        <thead class="text-center text-white">
                            <th width="30%">Name</th>
                            <th width="30%">URL</th>
                            <th width="10%">Admin Number</th>
                            <th width="10%">Member Number</th>
                            <th width="5%">Server Type</th>
                            <th width="5%">Status</th>
                        </thead>
                        <tbody>
                            <?php if($domains): ?>
                                <?php foreach($domains as $model): ?>
                                    <tr class="text-center">
                                        <td><?= $model->name ?></td>
                                        <td><a href="<?= $model->url ?>" target="_blank"><?= $model->url ?></a></td>
                                        <td><?= $model->admin ?></td>
                                        <td><?= $model->member ?></td>
                                        <td><?= $model->is_drive == 0 ? '<span class="badge badge-pill badge-primary">Server</span>' : '<span class="badge badge-pill badge-info">One Drive</span>' ?></td>
                                        <td><?= $model->is_active == 0 ? '<span class="badge badge-pill badge-warning"></span>' : '<span class="badge badge-success badge-pill">Active</span>' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>