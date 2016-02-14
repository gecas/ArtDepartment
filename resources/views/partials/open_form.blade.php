<div class="col-md-6 col-md-offset-3" style="margin-top:2%;">
<a href="/apply" class="btn apply-now" style="margin-top:2%;">Back</a>
  <h1>OPEN SESSIONS</h1>

  <p style="text-align:justify;">
    As private sessions are the core of this project, we believe it is essential to invite the outside-the project members of the industry as well. During each teaching programme our top heroes will give one combined public session on more general topics, concerning the art department. The representatives of local film industry - directors, producers, cinematographers, members of art department and sound designers - are more than welcome to get to know more about the art of designing new worlds. 

If you are interested to participate in a public session in Vilnius in December of 2015, register now! Availability of public seats is very limited; your attendance will be confirmed by e-mail.
  </p>
  <h5>To apply, please, fill out the form! The deadline is the <b>5th of December</b>.</h5>

  
  <div class="open-sessions-form-wrap">
  @include('errors.list')
  <div class="border-top-left"></div>
    <form id="openSessionsform" class="open-sessions-form" method="POST" action="/apply-open-sessions">
             {{ csrf_field() }}
              <div class="form-group">
                  <label></label>
                      <input type="text" name="name" class="form-control"
                       placeholder="* Name" value="{{ old('name') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="surname" class="form-control"
                           placeholder="* Surname" value="{{ old('surname') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="company" class="form-control"
                           placeholder="* Film school/company" value="{{ old('company') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="email" name="email" class="form-control"
                          placeholder="* Email" value="{{ old('email') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="address" class="form-control"
                          placeholder="* Address" value="{{ old('address') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="expertise" class="form-control"
                          placeholder="* Field of expertise" value="{{ old('expertise') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="city" class="form-control"
                          placeholder="* City" value="{{ old('city') }}"/>
                  </div>

                  <div class="form-group">
                      <input type="text" name="phone" class="form-control"
                          placeholder="* Cell phone number (don't forget to include area code!)" value="{{ old('phone') }}"/>
                  </div>

                 
                  <div class="form-group">
                    <label>* Why is it important for you to participate in this training session?</label>
                    <div class="apply-counter" style="color:red;"></div>
                    <textarea class="form-control apply-textarea" name="training" rows="10" maxlength="450"></textarea>
                  </div>

                  <div class="form-group">
                    <span style="color:red;">* - required fields!</span>
                  </div>
                  <button type="submit" class="btn apply-now apply-now-submit" style="margin-bottom:2%;margin-top:2%;">Send</button>
    
    </form>

  </div>
  
</div>