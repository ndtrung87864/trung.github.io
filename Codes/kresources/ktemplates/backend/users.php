
                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Tài Khoản
                         
                        </h1>
                          <p class="bg-success">
                         
                        </p>

                        <td><a href="index.php?add_user" class="btn btn-primary">Thêm tài khoản</a></td>
                        <td><a href="index.php?edit_users" class="btn btn-primary">Sửa tài khoản</a></td>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cấp bậc</th>
                                        <th>Tên tài khoản</th>
                                        <th>Tên</th>
                                        <th>Họ</th>
                                        <th>Email</th>
                            
                                    </tr>
                                </thead>
                                <tbody>

                                        <?php display_users(); ?>


                                    
                                </tbody>
                            </table> <!--End of Table-->
                        

                        </div>

                        
                    </div>
    


