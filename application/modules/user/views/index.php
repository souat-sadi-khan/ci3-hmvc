<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">User List</h4>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" id="content_management" data-url="<?= site_url('admin/user/create') ?>" class="btn btn-sm btn-outline-orange ">
                    Create New
                    <i class="fas fa-plus ml-2"></i>
                </button>
            </div>

            <div class="col-md-12 mt-3 table-responsive">
                <table class="table table-bordered table-striped ">
                    <thead class="text-center text-white">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th width="20%" class="text-center">Action</th>
                    </thead>
                    <tbody>
                        <?php if($models): $x = 1; ?>
                            <?php foreach($models as $model): ?>
                                <tr class="text-center">
                                    <td><?= $x ?></td>
                                    <td><?= $model->fname . ' ' . $model->lname ?></td>
                                    <td><?= $model->email ?></td>
                                    <td><?= $model->username ?></td>
                                    <td>
                                        <?php if($model->is_online == 1): ?>
                                            <span class="badge badge-success">Active</span>
                                        <?php else: ?>
                                            <span class="badge badge-danger">Not Active</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                                            <?php if($model->is_online == 1 && $model->id != $_SESSION['id'] ): ?> 
                                                <button type="button" data-toggle="tooltip" data-placement="top" data-title="Log Out User" class="btn btn-danger btn-rounded btn-icon make-logout" data-url="<?= base_url() . 'administrator/batchLogOut/'. $model->id ?>" >
                                                    <i class="mdi mdi-logout"></i>
                                                </button>
                                            <?php endif; ?>
                                            <button data-toggle="tooltip" data-placement="top" data-title="Update User Information" type="button" class="btn btn-info btn-rounded btn-icon edit" data-url="<?= base_url() . 'admin/user/edit/'. $model->id ?>" id="content_management">
                                                <i class="mdi mdi-tooltip-edit"></i>
                                            </button>
                                            
                                            <button data-toggle="tooltip" data-placement="top" data-title="Update Password" type="button" class="btn btn-danger btn-rounded btn-icon" data-url="<?= base_url() . 'admin/user/edit-password/'. $model->id ?>" id="content_management">
                                                <i class="mdi mdi-account-key"></i>
                                            </button>

                                            <button data-toggle="tooltip" data-placement="top" data-title="Update Username" type="button" class="btn btn-dark btn-rounded btn-icon" data-url="<?= base_url() . 'admin/user/edit-username/'. $model->id ?>" id="content_management">
                                                <i class="mdi mdi-internet-explorer"></i>
                                            </button>
                                            
                                            <?php if($model->id != $_SESSION['id']): ?>
                                                <button data-toggle="tooltip" data-placement="top" data-title="Delete User" type="button" id="delete_item" data-id="<?= $model->id ?>" data-url="<?= site_url('admin/user/delete/'. $model->id ) ?>" class="btn btn-rounded btn-xs btn-danger btn-icon">
                                                    <span id="action_menu_<?= $model->id ?>">
                                                        <i class="mdi mdi-delete-forever"></i>
                                                    </span>
                                                    <span style="display:none;" id="delete_loading_<?= $model->id ?>">
                                                        <i class="fas fa-spinner fa-spin"></i>
                                                    </span>
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php $x++; endforeach; ?>
                        <?php else: ?>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php function pageRequiredScript() { ?>
    <script>
        _componentRemoteModalLoad();
        _item_move_up();
        _item_move_down();
        (function($) {
            'use strict';
            $(function() {
                /* Code for attribute data-custom-class for adding custom class to tooltip */
                if (typeof $.fn.tooltip.Constructor === 'undefined') {
                throw new Error('Bootstrap Tooltip must be included first!');
                }

                var Tooltip = $.fn.tooltip.Constructor;

                // add customClass option to Bootstrap Tooltip
                $.extend(Tooltip.Default, {
                customClass: ''
                });

                var _show = Tooltip.prototype.show;

                Tooltip.prototype.show = function() {

                // invoke parent method
                _show.apply(this, Array.prototype.slice.apply(arguments));

                if (this.config.customClass) {
                    var tip = this.getTipElement();
                    $(tip).addClass(this.config.customClass);
                }

                };
                $('[data-toggle="tooltip"]').tooltip();

            });
        })(jQuery);

        $(document).on('click', '.make-logout', function (e) {
            e.preventDefault();
            // $("#loader").show('fade');
            var url = $(this).data('url');
            $.ajax({
                url: url,
                method: 'GET',
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData: false,
                dataType: 'JSON',
                success: function (data) {
                    toastr.success(data.message);

                    setTimeout(function () {
                        window.location.href = data.goto;
                    }, 2000);
                },
                error: function (data) {
                    var jsonValue = $.parseJSON(data.responseText);
                    const errors = jsonValue.errors
                    var i = 0;
                    $.each(errors, function (key, value) {
                        toastr.success(value);
                        i++;
                    });
                }
            });
        });
    </script>
<?php } ?>