<?php include ('header.php'); ?>
	<main>
		<div class="container ng-lightgray">
			<div class="row">
				<div class="col-md-6 pt-3">
				<img src="bmi-images/Weighloss_final_logo.png" class="bmi-logo">
				</div>
				<div class="col-md-6 pt-4 text-md-end">
				<!-- <button type="button" class="btn btn-info rounded-lg" data-target="#loginModal" data-toggle="modal">Login</button> -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				<i class="fa fa-sign-in" aria-hidden="true"></i>Login
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- <div class="modal fade" id="loginModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h4 class="text-center form-title">Login</h4>
        <div class="d-flex flex-column">
          <form class="mb-3">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter your email" id="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter your password" id="password">
            </div>
            <button type="submit" class="btn btn-info btn-block btn-round">Login</button>
          </form>
          <div class="text-center text-muted mb-2">or use a social network</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter"></i></button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook"></i></button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fab fa-linkedin"></i></button>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <p class="text-center">Not a member yet? <a href="#" class="text-info">Sign Up</a></p>
      </div>
    </div>
  </div>
</div> -->
				</div>
		
		</div>
		</div>
		<div class="container">
			<div id="wizard_container">
				<form name="example-1" id="wrapped" method="POST">
					<input id="website" name="website" type="text" value="">
					<!-- Leave input above for security protection, read docs for details -->
					<div id="middle-wizard">
						
						<!-- First branch What Type of Project ============================== -->
						<!-- <div class="row">
							<div class="col-md-6">
							<img src="bmi-images/Weighloss_final_logo.png" alt="" width="100px" height="100px" class="ml-3">
							</div>
							<div class="col-md-6 ">
							<button type="button" class="btn btn-primary">Default</button>
							</div> -->
						</div>
						<div class="step" data-state="branchtype">
							<div class="question_title">
								<h3>Let's Create Your Body Profile</h3>
								<p><strong>Select your gender:</strong></p>
							</div>
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-lg-3 animated zoomIn delay-fast">
									<div class="item">
										<input id="answer_1" type="radio" name="branch_1_group_1" value="Seo-Optimization" class="required">
										<label for="answer_1"><img src="bmi-images/weightloss/11.png" class="bmi-main-images" alt=""><!--<strong>Seo Optimization</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.--></label>
									</div>
								</div>
								<div class="col-lg-3 animated zoomIn delay-normal">
									<div class="item">
										<input id="answer_2" name="branch_1_group_1" type="radio" value="Web-Development" class="required">
										<label for="answer_2"><img src="bmi-images//weightloss/4(1).png" class="bmi-main-images" alt=""><!--<strong>Web Development</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.--></label>
									</div>
								</div>
								<div class="col-md-3"></div>
								<!-- <div class="col-lg-2 animated zoomIn delay-medium">
									<div class="item">
										<input id="answer_3" name="branch_1_group_1" type="radio" value="Design" class="required">
										<label for="answer_3"><img src="img/design_icon_1.svg" alt=""><strong>Design</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
									</div>
								</div> -->
							</div>
							<!-- /row-->
						</div>
						<!-- /First branch What Type of Project ============================== -->
						
						<!-- /What Type of Project > Seo-Optimization ============================== -->
						<div class="branch" id="Seo-Optimization">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>PERSONALIZED WORKOUT PLAN</h3>
									<p>ACCORDING TO YOUR AGE</p>
								</div>
								<div class="row">
								<div class="col-lg-3 animated zoomIn delay-fast">
									<div class="item">
										<input id="branch_2_answer_1" type="radio" name="branch_1_group_1" value="Seo-Optimization" class="required">
										<label for="branch_2_answer_1"><img src="bmi-images/11.png" alt=""><button type="button" name="forward" class="forward">18-25</button>
									</div>
								</div>
								<div class="col-lg-3 animated zoomIn delay-normal">
									<div class="item">
										<input id="branch_2_answer_2" name="branch_1_group_1" type="radio" value="Web-Development" class="required">
										<label for="branch_2_answer_2"><img src="bmi-images/7.png" alt=""><button type="button" name="forward" class="forward">26-35</button>
									</div>
								</div>
								<div class="col-lg-3 animated zoomIn delay-medium">
									<div class="item">
										<input id="answer_3" name="branch_1_group_1" type="radio" value="Design" class="required">
										<label for="answer_3"><img src="bmi-images/10.png" alt=""><button type="button" name="forward" class="forward">36-45</button>
									</div>
								</div>
								<div class="col-lg-3 animated zoomIn delay-medium">
									<div class="item">
										<input id="answer_4" name="branch_1_group_1" type="radio" value="Design" class="required">
										<label for="answer_4"><img src="bmi-images/4.png" alt="" class="bg-white"><button type="button" name="forward" class="forward">46+</button>
									</div>
								</div>
							</div>
								<!-- /row-->
							</div>
							<!-- /step -->
						</div>
						<!-- /What Type of Project > Seo-Optimization ============================== -->
						
						<!-- Second branch Web-Development ============================== -->
						<div class="branch" id="Web-Development">
							<div class="step" data-state="branchtype">
								<div class="question_title">
									<h3>What is your goal?</h3>
									<p>Fitcoach will Create a personalized plan tailored to your needs and goal</p>
								</div>
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-lg-4 animated zoomIn delay-fast">
										<div class="item">
											<input id="branch_3_answer_1" type="radio" name="branch_2_group_1" value="HTML-Development" class="required">
											<label for="branch_3_answer_1"><img src="bmi-images/female_lose_weight.png" alt=""><strong>Lose Weight</strong></label>
										</div>
									</div>
									<div class="col-lg-4 animated zoomIn delay-normal">
										<div class="item">
											<input id="branch_3_answer_2" name="branch_2_group_1" type="radio" value="CMS-Development" class="required">
											<label for="branch_3_answer_2"><img src="bmi-images/female_gain_muscle.png" alt=""><strong>Get in shape</strong></label>
										</div>
									</div>
									<div class="col-md-2"></div>
									<!--<div class="col-lg-4 animated zoomIn delay-medium">
										<div class="item">
											<input id="branch_2_answer_3" name="branch_2_group_1" type="radio" value="FrontEnd-Development" class="required">
											<label for="branch_2_answer_3"><img src="img/web_development_icon_4.svg" alt=""><strong>FrontEnd Development</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
										</div>
									</div>-->
								</div>
								<!-- /row-->
							</div>
						</div>
						<!-- /Second branch Web-Development ============================== -->
						
						<!-- Web-Development > HTML-Development ============================== -->
						<div class="branch" id="HTML-Development">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>Choose your current body type</h3>
									<!--<p>Multiple Selection (Checkbox based)</p>-->
								</div>
								<div class="row">
									<div class="col-lg-4 animated zoomIn delay-fast">
										<div class="item">
											<input id="branch_2_answer_1" type="radio" name="branch_2_group_1" value="HTML-Development" class="required">
											<label for="branch_2_answer_1"><img src="bmi-images/download(1).webp" alt=""><strong>Average</strong></label>
										</div>
									</div>
									<div class="col-lg-4 animated zoomIn delay-normal">
										<div class="item">
											<input id="branch_2_answer_2" name="branch_2_group_1" type="radio" value="CMS-Development" class="required">
											<label for="branch_2_answer_2"><img src="bmi-images/download(2).webp" alt=""><strong>Plump</strong></label>
										</div>
									</div>
										<div class="col-lg-4 animated zoomIn delay-medium">
										<div class="item">
											<input id="branch_2_answer_3" name="branch_2_group_1" type="radio" value="FrontEnd-Development" class="required">
											<label for="branch_2_answer_3"><img src="bmi-images/download(3).webp" alt=""><strong>Extra</strong></label>
										</div>
									</div>
									
								</div>
								<!-- /row -->
							</div>
						</div>
						<!-- /Web-Development > HTML-Development ============================== -->
						
						<!-- Web-Development > CMS-Development ============================== -->
						<div class="branch" id="CMS-Development">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>Choose your current body type</h3>
									<!--<p>Multiple Selection (Checkbox based)</p>-->
								</div>
								<div class="row">
									<div class="col-lg-4 animated zoomIn delay-fast">
										<div class="item">
											<input id="branch_2_answer_1" type="radio" name="branch_2_group_1" value="HTML-Development" class="required">
											<label for="branch_2_answer_1"><img src="bmi-images/download(1).webp" alt=""><strong>Average</strong></label>
										</div>
									</div>
									<div class="col-lg-4 animated zoomIn delay-normal">
										<div class="item">
											<input id="branch_2_answer_2" name="branch_2_group_1" type="radio" value="CMS-Development" class="required">
											<label for="branch_2_answer_2"><img src="bmi-images/download(2).webp" alt=""><strong>Plump</strong></label>
										</div>
									</div>
										<div class="col-lg-4 animated zoomIn delay-medium">
										<div class="item">
											<input id="branch_2_answer_3" name="branch_2_group_1" type="radio" value="FrontEnd-Development" class="required">
											<label for="branch_2_answer_3"><img src="bmi-images/download(3).webp" alt=""><strong>Extra</strong></label>
										</div>
									</div>
								</div>
								<!-- /row -->
							</div>
						</div>
						<!-- /Web-Development > CMS-Development ============================== -->
						
						<!-- Web-Development > FrontEnd-Development ============================== -->
						<div class="branch" id="FrontEnd-Development">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>Web Development: FrontEnd Development</h3>
									<p>Multiple Selection (Checkbox based)</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5 animated zoomIn delay-fast">
										<div class="box_general">
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Jquery">Jquery</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Angularjs 2">Angularjs 2</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Angularjs 4">Angularjs 4</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Reactjs">Reactjs</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Sass">Sass</label>
											</div>
											<hr>
											<h6 class="add_bottom_15">Any particular notes?</h6>
											<textarea class="form-control" style="height:100px; margin-bottom:0;" placeholder="Typer here" name="frontend_development_notes"></textarea>
										</div>
										<!-- /box_general -->
									</div>
								</div>
								<!-- /row -->
							</div>
						</div>
						<!-- /Web-Development > FrontEnd-Development ============================== -->
						
						<!-- Design > What Type of Design do you need ============================== -->
						<div class="branch" id="Design">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>What Type of Design do you need?</h3>
									<p>Multiple Selection (Checkbox based)</p>
								</div>
								<div class="row">
									<div class="col-lg-4 animated zoomIn delay-fast">
										<div class="item">
											<input id="branch_3_answer_1" type="checkbox" name="branch_3_answers[]" value="Web Design">
											<label for="branch_3_answer_1"><img src="img/design_icon_2.svg" alt=""><strong>Web Design</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
										</div>
									</div>
									<div class="col-lg-4 animated zoomIn delay-normal">
										<div class="item">
											<input id="branch_3_answer_2" name="branch_3_answers[]" type="checkbox" value="Print Design">
											<label for="branch_3_answer_2"><img src="img/design_icon_3.svg" alt=""><strong>Print Design</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
										</div>
									</div>
									<div class="col-lg-4 animated zoomIn delay-medium">
										<div class="item">
											<input id="branch_3_answer_3" name="branch_3_answers[]" type="checkbox" value="Logo Design">
											<label for="branch_3_answer_3"><img src="img/design_icon_4.svg" alt=""><strong>Logo Design</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
										</div>
									</div>
								</div>
								<!-- /row-->
							</div>
							<!-- /Design > What Type of Design do you need ============================== -->
							
							<!-- Budget ============================== -->
							<div class="step" id="budget" data-state="">
								<div class="question_title">
									<h3>50 million</h3>
									<p>users have chosen us</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5 animated zoomIn delay-fast">
									<div class="items">
									<img src="bmi-images/weightloss/25.png" alt="">
									</div>
									<a href="consultation/consultation1.php"><button type="button" class="btn btn-info next-step">Continue</button></a>
									</div>
									
								</div>
							<!-- /row -->
							<!-- /Budget ============================== -->
							
							<!-- Last step ============================== -->
							<div class="submit step" id="end">
								<div class="question_title">
									<h3>Plase fill with your details</h3>
									<p>Ei duo homero postea dignissim.</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5 animated zoomIn delay-fast">
										<div class="box_general">
											<div class="form-group">
												<input type="text" name="first_last_name" class="required form-control" placeholder="First and Last name">
											</div>
											<div class="form-group">
												<input type="email" name="email" class="required form-control" placeholder="Your Email">
											</div>
											<div class="form-group">
												<input type="text" name="telephone" class="form-control" placeholder="Your Telephone">
											</div>
											<div class="form-group add_bottom_30">
												<div class="styled-select">
													<select class="required" name="country">
														<option value="" selected>Select your country</option>
														<option value="Europe">Europe</option>
														<option value="Asia">Asia</option>
														<option value="North America">North America</option>
														<option value="South America">South America</option>
													</select>
												</div>
											</div>
											<div class="checkbox_questions">
												<input name="terms" type="checkbox" class="icheck required" value="yes">
												<label>Please accept <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">terms and conditions</a>.</label>
											</div>
										</div>
										<!-- /box_general -->
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /Last step ============================== -->
						</div>
					</div>
					<!-- /middle-wizard -->
					<div id="bottom-wizard">
						<button type="button" name="backward" class="backward">Backward </button>
						<a href="/index.html"><button type="button" name="forward" class="forward">Continue</button></a>
						
						<button type="submit" name="process" class="submit">Submit</button>
					</div>
					<!-- /bottom-wizard -->
				</form>
			</div>
			<!-- /Wizard container -->
		</div>
		<!-- /Container -->
	</main>
	<!-- /main -->
	
	<?php include ('footer.php'); ?>

