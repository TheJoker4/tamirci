
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                               Hoşgeldin <?php echo $_SESSION['admin_kadi']; ?>
                            <br />
                                <small><?php 
                                $sifre="demo";
                                echo md5($sifre); 
                        ?> </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
                    </li>
                    <li>
                        <a  href="ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
                    </li>
                    
                     
                    
                     
                      
                     
                    
                    
                   
                    
                </ul>

            </div>

        </nav>