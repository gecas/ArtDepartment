<div class="col-md-8 col-md-offset-3" style="margin-bottom:2%;">
        <a href="/apply" class="btn apply-now" style="margin-top:2%;">Back</a>
				<h1>APPLY NOW</h1>	
            <h5>To apply, please, fill out the form! The deadline is <b>25th of November</b>.</h5>
            <h5>You can fill the form online or download it to your computer and send it to us by e-mail. <span class="apply-now"><a style="color:#000;" href="/files/Application_Form_Art_Department_Masterclass.docx">Download the form</a></span></h5>
        		<div class="application-form-wrap">
            @include('errors.list')
        		<div class="border-top-left" style="z-index:-1;"></div>
            <br/>
            
                <form role="form" method="POST" action="/apply-form" enctype="multipart/form-data" class="application-form" id="applyNowForm">
                <div class="col-md-6">
                {{ csrf_field() }}
                  <div class="form-group" style="">
                      <input type="name" name="name" class="form-control"
                      id="nameInput" placeholder="* Name" value="{{ old('name') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="surname" class="form-control"
                          id="surnameInput" placeholder="* Surname" value="{{ old('surname') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="email" name="email" class="form-control"
                          id="emailInput" placeholder="* Email" value="{{ old('email') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="company" class="form-control"
                          id="companyInput" placeholder="* Film school/company" value="{{ old('company') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="address" class="form-control"
                          id="addressInput" placeholder="* Home address" value="{{ old('address') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="city" class="form-control"
                          id="cityInput" placeholder="* City" value="{{ old('city') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="phone" class="form-control"
                          id="phoneInput" placeholder="* Cell phone number (don't forget to include area code!)" value="{{ old('phone') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="birth_date" class="form-control"
                          id="birthInput" placeholder="* Birth date(format example:(yyyy-mm-dd, 1955-03-25))" value="{{ old('birth_date') }}"/>
                  </div>

                  <div class="form-group">
                  <input type="text" name="education" class="form-control"
                          id="education" placeholder="* Education" value="{{ old('education') }}"/>
                  <!--<label for="education">* Education</label>
                   <select name="education" class="form-control" id="education">
                    <option value="">Higher education</option>
                    <option value="">Advanced vocational education and training</option>
                    <option value="">Special secondary</option>
                    <option value="">Secondary</option>
                    <option value="">Basic</option>
                    <option value="">Primary</option>
                    <option value="">Non-regulated</option>
                    <option value="">Higher education university type</option>
                    <option value="">Higher education college type</option>
                    <option value="">Master</option>
                    <option value="">Doctoral</option>
                  </select> -->
                  </div>

                  <div class="form-group">
                  	<label for="country">* Country of residence</label>
                  	<select name="country" class="form-control" id="country">

                    @foreach($countries as $country)
                      <option value="{!! $country->id !!}">{!! $country->title !!}</option>
                    @endforeach
                  	</select>

                  </div>

                  <div class="form-group">
                  	<label>* How would you describe yourself in 30 seconds making-of? 
                  	(up to 450 characters)</label>
                    <div class="apply-counter" style="color:red;"></div>
                  	<textarea class="form-control apply-textarea" name="description" rows="10" maxlength="450">{{ old('description') }}</textarea>
                  </div>
                  
                  <!-- <div class="form-group">
                  	<label>* Why did you choose a career in the art department? (up to 450 characters)</label>
                    <div class="apply-counter" style="color:red;"></div>
                  	<textarea class="form-control apply-textarea" name="career" rows="10" maxlength="450">{{ old('career') }}</textarea>
                  </div> -->

                  <div class="form-group">
                  	<label>* What do you find the most challenging in the work 
					of the art department? (up to 450 characters)</label>
                 <div class="apply-counter" style="color:red;"></div>
                  	<textarea class="form-control apply-textarea" name="challenge" rows="10">{{ old('challenge') }}</textarea>
                  </div>

                  <div class="form-group">
                  	<label>* Name a few most important character features a good production designer must possess. (up to 450 characters)</label>
                  	<div class="apply-counter" style="color:red;"></div>
                    <textarea class="form-control apply-textarea" name="features" rows="10">{{ old('features') }}</textarea>
                  </div>

                  </div>
                  
                  <div class="col-md-6">

                  <div class="form-group">
                  	<label>* Who are three of your heroes of the art department? Give us at also the reason why do they inspire you. (up to 450 characters)</label>
                  	<div class="apply-counter" style="color:red;"></div>
                    <textarea class="form-control apply-textarea" name="heroes" rows="10">{{ old('heroes') }}</textarea>
                  </div>

                  <!-- <div class="form-group">
                  	<label>* What you believe is THAT movie, which completely changed the art department? (up to 450 characters)</label>
                  	<div class="apply-counter" style="color:red;"></div>
                    <textarea class="form-control apply-textarea" name="movie" rows="10">{{ old('movie') }}</textarea>
                  </div> -->

                  <!-- <div class="form-group">
                  	<label>* Name one director, who is capable of giving you goosebumps. (up to 450 characters)</label>
                  	<div class="apply-counter" style="color:red;"></div>
                    <textarea class="form-control apply-textarea" name="director" rows="10">{{ old('director') }}</textarea>
                  </div> -->

                  <div class="form-group">
                  	<label>* What is a movie, which gave a birth to the first thought of working in this industry? (up to 450 characters)</label>
                  	<div class="apply-counter" style="color:red;"></div>
                    <textarea class="form-control apply-textarea" name="thought" rows="10">{{ old('thought') }}</textarea>
                  </div>

                  <div class="form-group">
                  	<label>* What topics you would like to discuss in Art Department Masterclass?  (up to 450 characters)</label>
                  	<div class="apply-counter" style="color:red;"></div>
                    <textarea class="form-control apply-textarea" name="topics" rows="10">{{ old('topics') }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Acceptable file formats for CV : jpeg,jpg,png,bmp,gif,svg,pdf</label>
                    <br/>
                    <span>Attach your CV</span>
                    <span><input type="file" name="cvFile" id="cv" class="inputfile" accept=".jpeg,.jpg,.png,.bmp,.gif,.svg,.pdf"  style="z-index:50;" />
                    <label for="cv" class="cvFile">Add CV!</label>
                    </span>
                    <div id="cv_upload" style="z-index:50;"></div>
                  </div>

                  <div class="form-group">
                  	<span>Attach your picture</span>
                  	<span><input type="file" name="pictureFile" id="picture" class="inputfile" accept="image/*" />
                    <label for="picture" class="cvFile">Add picture!</label>
                    </span>
                    <div id="picture_upload"></div>
                  </div>


                  <div class="form-group">
                  <!-- <div class="border-bottom-right apply-border-bottom"></div> -->
                  <label>Acceptable file formats for Portfolio : jpeg,jpg,png,bmp,gif,svg,pdf</label>
                    <br/>
                  	<span>Attach your portfolio</span>
                  	<span><input type="file" name="portfolioFile" id="portfolio" class="inputfile" accept=".jpeg,.jpg,.png,.bmp,.gif,.svg,.pdf" />
                    <label for="portfolio" class="portfolioFile">Add portfolio!</label>
                    </span>
                    <div id="portfolio_upload"></div>
                  </div>

                  <div class="form-group">
                      <input type="text" class="form-control"
                          id="linkInput" name="portfolioLink" value="{{ old('portfolioLink') }}" placeholder=" or link, format (http://www.link.com)"/>
                  </div>

                  <div class="form-group">
                  	<span style="color:red;">* - required fields!</span>
                  </div>

                  <button type="submit" class="btn apply-now apply-now-submit">Send</button>

                </div>

                </form>
                </div>
                </div>