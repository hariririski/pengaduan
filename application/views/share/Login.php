<!--Start of Login Form-->
<div id="quickview-login">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-pop-up-content ptb-60 pl-60 pr-60">
                        <div class="area-title text-center mb-43">
                            <img width="100%"src="<?php echo site_url(); ?>assets/images/atrbpn.png" alt="jobhere">
                        </div>
                        <form method="post" action="<?php echo site_url(); ?>login/proses_login">
                            <div class="form-box">
                                <input type="text" name="username" placeholder="username" class="mb-14">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="fix ptb-30">

                            </div>
                            <div class="text-center">
                                <button type="submit" class="text-uppercase">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Login Form-->
