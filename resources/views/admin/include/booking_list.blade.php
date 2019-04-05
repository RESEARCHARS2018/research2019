@extends('admin.master')
@section('title')
    Booking List
@endsection()
@section('body')
    <div class="row" style="margin-top: 35px">
        <div class="col-lg-12">
            <div class="ibox float-e-margins" style="margin-left: 10px">
                <div class="ibox-content">
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-4 col-sm-4">
                            <a href="#adduser" rel="modal:open" class="btn btn-info"><i class="fa fa-plus"></i> Add Reservation</a>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-4 col-sm-8">
                            <form action="" method="get" class="form-horizontal frm-filter">
                                <div class="input-group">
                                    <input type="text" name="q" placeholder="Search" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.col-md-3 -->

                        <!-- /.col-md-6 -->
                    </div>



                    <div id="grid" class="pj-grid">
                        <div class="table-responsive table-responsive-secondary">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <input type="checkbox" class="pj-table-toggle-rows" style="position: absolute; opacity: 0;">
                                    <th class="cell-width-2">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">

                                            </ins>
                                        </div>
                                    </th>
                                    <th>
                                        <a href="#" class="m-r-xs pj-table-sort-down">
                                            <i class="fa fa-sort-amount-asc"></i>
                                        </a>
                                        Name
                                    </th>
                                    <th>
                                        <a href="#" class="m-r-xs pj-table-sort-up text-muted">
                                            <i class="fa fa-sort-amount-asc"></i>
                                        </a>
                                        Email
                                    </th>
                                    <th>
                                        <a href="#" class="m-r-xs pj-table-sort-up text-muted">
                                            <i class="fa fa-sort-amount-asc">
                                            </i>
                                        </a>
                                        Phone
                                    </th>
                                    <th>
                                        <a href="#" class="m-r-xs pj-table-sort-up text-muted">
                                            <i class="fa fa-sort-amount-asc">
                                            </i>
                                        </a>Date/Time
                                    </th>

                                    <th>
                                        <a href="#" class="m-r-xs pj-table-sort-up text-muted">
                                            <i class="fa fa-sort-amount-asc">
                                            </i>
                                        </a>People
                                    </th>

                                    <th>
                                        <a href="#" class="m-r-xs pj-table-sort-up text-muted">
                                            <i class="fa fa-sort-amount-asc">
                                            </i>
                                        </a>Table No
                                    </th>

                                    <th><a href="#" class="m-r-xs pj-table-sort-up text-muted">
                                            <i class="fa fa-sort-amount-asc"></i>
                                        </a>Status</th>

                                    <th><a href="#" class="m-r-xs pj-table-sort-up text-muted">
                                            <i class="fa fa-sort-amount-asc"></i>
                                        </a>Action</th>

                                    <th class="text-right">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr data-id="id_1">
                                    <td class="cell-width-2"><div class="icheckbox_square-green" style="position: relative;">
                                            <input type="checkbox" name="record[]" value="1" class="pj-table-select-row" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                            </ins>
                                        </div>
                                    </td>
                                    <td class="pj-table-cell-editable">
                                            <span class="pj-table-cell-label">Alamin
                                            </span>
                                        <input type="text" data-name="name" class="form-control pj-selector-editable" value="Administrator" style="display: none;">
                                    </td>
                                    <td class="pj-table-cell-editable">
                                            <span class="pj-table-cell-label">
                                            <a href="mailto:admin@admin.com">alamin@admin.com</a>
                                            </span>
                                        <input type="text" data-name="email" class="form-control pj-selector-editable" value="admin@admin.com" style="display: none;">
                                    </td>
                                    <td>
                                            <span class="pj-table-cell-label">
                                            01758845299
                                            </span>
                                    </td>
                                    <td>
                                            <span class="pj-table-cell-label">

                                            12.3.2019 ; 10:11AM
                                            </span>
                                            </span>
                                    </td>

                                    <td>
                                            <span class="pj-table-cell-label">

                                            8 person
                                            </span>
                                        </span>
                                    </td>

                                    <td>
                                            <span class="pj-table-cell-label">

                                              8
                                            </span>
                                        </span>
                                    </td>
                                    <td class="pj-table-cell-editable">
                                            <span class="pj-table-cell-label">
                                            <div role="button" tabindex="0" aria-disabled="false" class="btn btn-success btn-sm no-margins">
                                            <i class="fa fa-check">
                                            </i>
                                            confirm
                                            </div>
                                            </span>
                                        <input type="hidden" data-name="status" class="pj-selector-editable" value="F">
                                    </td>

                                    <td>
                                        <div class="m-t-xs text-right">
                                            <a href="" class="btn btn-danger btn-outline btn-sm m-l-xs pj-table-icon-cog" title="Set permissions">
                                                <i class="fa fa-remove">
                                                </i>
                                            </a>
                                            <a href="#edit_user" rel="modal:open" class="btn btn-primary btn-outline btn-sm m-l-xs pj-table-icon-edit">
                                                <i class="fa fa-pencil">
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="row table-responsive-actions">
                            <div class="col-md-8"></div>

                            <div class=" col-md-4">
                                <div class="form-inline show-total mobile-text-right">
                                    <div class="form-group">
                                        <label>
                                            Show
                                        </label>
                                    </div>
                                    <div class="form-group m-l-xs">
                                        <select class="form-control pj-selector-row-count">
                                            <option value="10">
                                                10
                                            </option>
                                            <option value="20">
                                                20
                                            </option>
                                            <option value="50">
                                                50
                                            </option>
                                            <option value="100">
                                                100
                                            </option>
                                            <option value="200">
                                                200
                                            </option>
                                            <option value="500">
                                                500
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group m-l-xs">
                                        <label>
                                            of
                                            <strong>
                                                1</strong>
                                            total
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /.col-lg-12 -->
    </div>
    @endsection()