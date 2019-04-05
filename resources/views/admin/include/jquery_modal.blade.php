{{--Add catagory jquery modal--}}
{{--add user jquery modal--}}
<div class="jquery-modal">
    <form action="" class="login_form modal " id="adduser" style="display: none;">
        <div class="">
            <div class="">
                <p class="card-title font-weight-bold" style="text-align: center;size: 40px">Add User</p>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">
                <div class="form-group">
                    <label>Full name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter phone number">
                </div>

                <div class="form-group">
                    <label>Edictional background</label>
                    <input type="text" class="form-control" id="education" placeholder="Enter Educatonal background">
                </div>

                <div class="form-group">
                    <label>Nid Nmuber</label>
                    <input type="number" class="form-control" id="nid" placeholder="Enter Nid Number">
                </div>

                <div class="form-group">
                    <label>Present Address</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="present_address" placeholder="present_address"></textarea>
                </div>

                <div class="form-group">
                    <label>Permanent Address</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="parmanent_address" placeholder="permanent_address"></textarea>
                </div>

                <div class="form-group">
                    <label>Previous Work Experience</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="work_experience" placeholder="Working experience"></textarea>
                </div>

                <div class="form-group">
                    <label>Role</label>
                    {{--<input type="number" class="form-control" id="phone" placeholder="Enter phone number">--}}

                    <select  class="form-control" name="role">
                        <option value="">---Select Role---</option>
                        <option value="moderator">Moderator</option>
                        <option value="manager">Manager</option>
                        <option value="waiter">Waiter</option>
                        <option value="cook">Cook</option>
                        <option value="gateman">Gateman</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Salary</label>
                    <input type="number" class="form-control" id="salary" placeholder="Enter Salary">
                </div>


                <div class="form-group">
                    <div class="form-group">
                        <label>Profile Picture</label>
                        <input type="file" class="input-group" name="profilepic" id="exampleInputFile">

                    </div>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
    </form>
</div>





 {{--end add user jquery modal--}}

{{--edit user jquery modal--}}

<div class="jquery-modal">
    <form action="" class="login_form modal " id="edit_user" style="display: none;">
        <div class="">
            <div class="">
                <p class="card-title font-weight-bold" style="text-align: center;size: 40px">Edit User</p>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">
                <div class="form-group">
                    <label>Full name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter phone number">
                </div>

                <div class="form-group">
                    <label>Edictional background</label>
                    <input type="text" class="form-control" id="education" placeholder="Enter Educatonal background">
                </div>

                <div class="form-group">
                    <label>Nid Nmuber</label>
                    <input type="number" class="form-control" id="nid" placeholder="Enter Nid Number">
                </div>

                <div class="form-group">
                    <label>Present Address</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="present_address" placeholder="present_address"></textarea>
                </div>

                <div class="form-group">
                    <label>Permanent Address</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="parmanent_address" placeholder="permanent_address"></textarea>
                </div>

                <div class="form-group">
                    <label>Previous Work Experience</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="work_experience" placeholder="Working experience"></textarea>
                </div>

                <div class="form-group">
                    <label>Role</label>
                    {{--<input type="number" class="form-control" id="phone" placeholder="Enter phone number">--}}

                    <select  class="form-control" name="role">
                        <option value="">---Select Role---</option>
                        <option value="moderator">Moderator</option>
                        <option value="manager">Manager</option>
                        <option value="waiter">Waiter</option>
                        <option value="cook">Cook</option>
                        <option value="gateman">Gateman</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Salary</label>
                    <input type="number" class="form-control" id="salary" placeholder="Enter Salary">
                </div>


                <div class="form-group">
                    <div class="form-group">
                        <label>Profile Picture</label>
                        <input type="file" class="input-group" name="profilepic" id="exampleInputFile">

                    </div>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
    </form>
</div>

{{--end edit user jquery modal --}}
{{--catagory jquery modal--}}
<script>
    $(".login_form").modal({
        fadeDuration: 1000
    });

</script>

<div class="jquery-modal">
    <form action="" class="login_form modal" id="catagory_model" style="display: none;">
        <div class="">
            <div class="">
                <p class="card-title font-weight-bold" style="text-align: center;size: 40px">Catagory Add</p>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">
                <div class="form-group">
                    <label style="text-align: center;">Catagory name</label>
                    <input type="text" class="form-control" id="catagory" placeholder="Enter Catagory" required>
                </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
        {{--<a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>--}}
        </div>

    </form>
</div>

{{--End catagory jquery modal--}}

{{--add food modal jquery--}}

<div class="jquery-modal">
    <form action="" class="login_form modal " id="addfood" style="display: none;">
        <div class="">
            <div class="">
                <p class="card-title font-weight-bold" style="text-align: center;size: 40px">Add Food</p>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">

                <div class="form-group">
                    <label>Food Catagory</label>
                    {{--<input type="number" class="form-control" id="phone" placeholder="Enter phone number">--}}

                    <select  class="form-control" name="catagory">
                        <option value="">---Select Catagory---</option>
                        <option value="brekfast">Brekfast</option>
                        <option value="meals">Meals</option>
                        <option value="banglafood">BanglaFood</option>
                        <option value="chinees">Chinees</option>
                        <option value="thai">Thai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Food name</label>
                    <input type="text" class="form-control" id="foodname" placeholder="Enter Food name">
                </div>

                <div class="form-group">
                    <label>Food Price</label>
                    <input type="number" class="form-control" id="foodprice" placeholder="Enter Food price">
                </div>



                <div class="form-group">
                    <label>Food Description</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="fooddescription" placeholder="Enter Food Description"></textarea>
                </div>




                <div class="form-group">


                    <div class="form-group">
                        <label>Food Image</label>

                        <input type="file" class="input-group" name="foodimage" id="exampleInputFile">

                    </div>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block ">Submit</button>
            </div>

        </div>

        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
    </form>
</div>

{{--end add food modal jquery--}}

{{--edit food modal jquery--}}
<div class="jquery-modal">
    <form action="" class="login_form modal " id="editfood" style="display: none;">
        <div class="">
            <div class="">
                <p class="card-title font-weight-bold" style="text-align: center;size: 40px">Edit Food</p>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">

                <div class="form-group">
                    <label>Food Catagory</label>
                    {{--<input type="number" class="form-control" id="phone" placeholder="Enter phone number">--}}

                    <select  class="form-control" name="catagory">
                        <option value="">---Select Catagory---</option>
                        <option value="brekfast">Brekfast</option>
                        <option value="meals">Meals</option>
                        <option value="banglafood">BanglaFood</option>
                        <option value="chinees">Chinees</option>
                        <option value="thai">Thai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Food name</label>
                    <input type="text" class="form-control" id="foodname" placeholder="Enter Food name">
                </div>

                <div class="form-group">
                    <label>Food Price</label>
                    <input type="number" class="form-control" id="foodprice" placeholder="Enter Food price">
                </div>



                <div class="form-group">
                    <label>Food Description</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="fooddescription" placeholder="Enter Food Description"></textarea>
                </div>




                <div class="form-group">


                    <div class="form-group">
                        <label>Food Image</label>

                        <input type="file" class="input-group" name="foodimage" id="exampleInputFile">

                    </div>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block ">Submit</button>
            </div>

        </div>

        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
    </form>
</div>
{{--end edit food modal jquery--}}

{{--ADD TABLE --}}

<div class="jquery-modal">
    <form action="" class="login_form modal " id="addtable" style="display: none;">
        <div class="">
            <div class="">
                <p class="card-title font-weight-bold" style="text-align: center;size: 40px">Add Table</p>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">


                <div class="form-group">
                    <label>Table No</label>
                    <input type="number" class="form-control" name="tableno" id="tableno" placeholder="Enter Table No">
                </div>

                <div class="form-group">
                    <label>Sit Limit</label>
                    <input type="number" class="form-control" name="sitlimit" id="sitlimit" placeholder="Enter Sit Limit">
                </div>

                <div class="form-group">
                    <label>Smoking Zone</label>
                    {{--<input type="number" class="form-control" id="phone" placeholder="Enter phone number">--}}

                    <select  class="form-control" name="smokingzone">
                        <option value="">---Select Smoking Zone---</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>

                    </select>
                </div>



                <div class="form-group">
                    <label>Table Description</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="tabledescription" placeholder="Enter Table Description"></textarea>
                </div>




                <div class="form-group">


                    <div class="form-group">
                        <label>Table Image</label>

                        <input type="file" class="input-group" name="tableimage" id="exampleInputFile">

                    </div>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block ">Submit</button>
            </div>

        </div>

        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
    </form>
</div>
{{--END ADD TABLE--}}

{{--EDIT TABLE--}}

<div class="jquery-modal">
    <form action="" class="login_form modal " id="edittable" style="display: none;">
        <div class="">
            <div class="">
                <p class="card-title font-weight-bold" style="text-align: center;size: 40px">Edit Table</p>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">


                <div class="form-group">
                    <label>Table No</label>
                    <input type="number" class="form-control" name="tableno" id="tableno" placeholder="Enter Table No">
                </div>

                <div class="form-group">
                    <label>Sit Limit</label>
                    <input type="number" class="form-control" name="sitlimit" id="sitlimit" placeholder="Enter Sit Limit">
                </div>

                <div class="form-group">
                    <label>Smoking Zone</label>
                    {{--<input type="number" class="form-control" id="phone" placeholder="Enter phone number">--}}

                    <select  class="form-control" name="smokingzone">
                        <option value="">---Select Smoking Zone---</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>

                    </select>
                </div>



                <div class="form-group">
                    <label>Table Description</label>
                    {{--<input type="te"  id="phone" placeholder="Enter phone number">--}}
                    <textarea class="form-control" name="tabledescription" placeholder="Enter Table Description"></textarea>
                </div>




                <div class="form-group">


                    <div class="form-group">
                        <label>Table Image</label>

                        <input type="file" class="input-group" name="tableimage" id="exampleInputFile">

                    </div>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block ">Submit</button>
            </div>

        </div>

        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
    </form>
</div>
{{--END EDIT TABLE--}}