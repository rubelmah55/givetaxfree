<?php 
/*
Template Name: Donetion
*/
    get_header();
?>
    <section class="donetion_wrapper">
        <div class="container">
            <div class="donetion_card">
                <div class="row">
                    <div class="col-md-8">
                        <div class="donetion_info">
                            <h4>Donation Info</h4>
                            <div class="author_donet d-flex">
                                <div class="author_img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pople_01.jpg" alt="">
                                </div>
                                <div class="author_content">
                                    <h5>Your Donation for:</h5>
                                    <p><strong>Campaign Name: </strong> Help our Family Ease the Stress</p>
                                    <p><strong>User: </strong> bryan pieper</p>
                                </div>
                            </div>

                            <div class="input-group my-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Donation Amount" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input_info d-flex justify-content-between align-items-center my-3">
                               <div class="input_content me-5">
                                    <h5>Givetaxfree Donation</h5>
                                    <p>Adding a donation for us, keeps us operating and helping people in need. Please consider helping us.</p>
                                    <span> Thank you, <strong> John Berardino</strong></span>
                               </div>
                               
                               <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            </div>

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 64%;">64%</div>
                            </div>

                            <a href="#">Custom Amount</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="your_donetion">
                            <h4>Your Donation</h4>
                            <div class="amount_div">
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <p>Your Donation:</p>
                                    <p><strong>$0.00</strong></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <p>Givetaxfree Donation:</p>
                                    <p><strong>$0.00</strong></p>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <p>Total Donation:</p>
                                    <p><strong>$0.00</strong></p>
                                </div>
                            </div>
                            <label for="cjhack">
                                <input type="checkbox" id="cjhack">
                                Make this donation Anonymous
                            </label>
                            <button type="submit" class="theme-btn form-control">Donet Now</button>
                            <p>By continuing, you agree with Givetaxfree <a href="#">terms</a> and
                                <a href="#">privacy notice.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    get_footer();
?>