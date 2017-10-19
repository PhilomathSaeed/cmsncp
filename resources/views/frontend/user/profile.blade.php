@include('layouts.user-header')

<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-10 col-sm-12 col-xs-12">
        <!-- content -->

        <h2 style="margin-bottom: 20px;">General Info</h2>

        <p class="alert alert-danger">
          Note: If you need to change items on this page that you cannot directly edit, please contact your account rep or affiliate manager. We may ask that you e-mail proof of residency, name change documents, proof of birth date, etc. This is a required step to ensure the integrity and security of our program. 
        </p>
        <form class="form-horizontal well" method="post">
          <div class="panel">
            <div class="panel-body">                        
              <div class="row">
                <div class="col col-md-12">
                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">First Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" readonly="" value="Aline" tabindex="1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Last Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" readonly="" value="Mendes Ferreira" tabindex="2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Company Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" readonly="" value="" tabindex="3">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-sm-5" style="text-align:right;">* E-mail</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="email" value="aline.mendes1798@gmail.com" tabindex="4">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-sm-5" style="text-align:right;">Alternate E-mail</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="alternate_email" value="" tabindex="4">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-sm-5" style="text-align:right;">* <i class="icon-info-sign"></i> <a rel="tooltip" class="hoverhelp" title="" href="#" data-original-title="If you change your phone number, you will have to verify it using our phone verification system.">Phone</a> (<a href="http://en.wikipedia.org/wiki/List_of_country_calling_codes#Alphabetical_listing_by_country_or_region" target="_blank">codes</a>)</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="phone" name="phone" value="+554298010750" tabindex="5">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-sm-5" style="text-align:right;"><i class="icon-info-sign"></i> <a rel="tooltip" class="hoverhelp" title="" href="#" data-original-title="Your password must be at least 6 characters, contain at least 1 number, 1 uppercase, and 1 lowercase character.">Change Password</a></label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" name="password" value="" autocomplete="off" tabindex="6">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-sm-5" style="text-align:right;">Verify Password</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" name="vpassword" value="" tabindex="7">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-sm-5" style="text-align:right;"><i class="icon-info-sign"></i> <a rel="tooltip" class="hoverhelp" title="" href="#" data-original-title="This is the amount of time you can use your current password before it expires and you have to set a new one. We recommend every 3-6 months.">Password Expiration</a></label>
                    <div class="col-sm-5">
                      <select class="form-control" name="pexpire" id="pexpire" tabindex="8">
                        <option value="3m">Every 3 Months</option>
                        <option value="6m" selected="">Every 6 Months</option>
                        <option value="1y">Every 1 Year</option>
                        <option value="never">Never</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-sm-5" style="text-align:right;">Messenger Service</label>
                    <div class="col-sm-5">
                      <select class="form-control" name="messenger" id="messenger" tabindex="9">
                        <option value="">-- Select Messenger --</option>
                        <option value="Aim">Aim</option>
                        <option value="Yahoo!">Yahoo!</option>
                        <option value="MSN">MSN</option>
                        <option value="Skype" selected="">Skype</option>
                      </select>
                    </div>
                  </div>

                  <div id="divHandle" style="" class="form-group ">
                    <label class="col-sm-5" style="text-align:right;">Messenger Handle</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="messhandle" value="allymendes2010@hotmail.com" tabindex="10">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Live Chat Enabled</label>
                    <div class="col-sm-6">
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="liveChatDisabled" value="No" checked="checked"> Yes
                        </label>
                      </div>
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="liveChatDisabled" value="Yes"> No
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;" data-toggle="tooltip" title="" data-original-title="Would you like to get an email every time you get a conversion?">Conversion Emails</label>
                    <div class="col-sm-6">
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="conversion_alerts" value="1"> Yes
                        </label>
                      </div>
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="conversion_alerts" value="0" checked="checked"> No
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;" data-toggle="tooltip" title="" data-original-title="Any email coming from a PeerFly team member that isn’t sent directly (and only) to you.">Network Emails</label>
                    <div class="col-sm-6">
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="emailupdates" value="Yes" checked="checked"> Yes
                        </label>
                      </div>
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="emailupdates" value="No"> No
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;" data-toggle="tooltip" title="" data-original-title="Any email sent as a part of our automated email newsletter sent to publishers shortly after they become an approved publisher.">Newsletter Subscription</label>
                    <div class="col-sm-6">
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="newsletter_subscription" value="Yes" checked="checked"> Yes
                        </label>
                      </div>
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="newsletter_subscription" value="No"> No
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">View Adult Content</label>
                    <div class="col-sm-6">
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="adult" value="On" checked="checked"> Yes
                        </label>
                      </div>
                      <div class="checkbox-inline">
                        <label>
                          <input type="radio" name="adult" value="Off"> No
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-md-12">
                  <div class="form-group">
                    <label class="col-md-5" style="text-align:right;">Address</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" readonly="" value="street 12 de agosto 1024" tabindex="11">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Address Continued</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" readonly="" value="centro" tabindex="12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">City</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" readonly="" value="Prudentopolis" tabindex="13">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">State/Province</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" readonly="" value="Paraná" tabindex="14">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Zip/Postal Code</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" readonly="" value="84400000" tabindex="15">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Country</label>
                    <div class="col-md-5">                
                      <input type="text" class="form-control" value="BR" readonly="" tabindex="10">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Birth Date</label>
                    <div class="col-md-5">
                      <p class="form-control-static">12-03-1990</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5" style="text-align:right;">Gender</label>
                    <div class="col-md-5">
                      <p class="form-control-static">Female</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">        
              <div class="form-actions">
                <button type="submit" name="submit" class="btn btn-large btn-primary">Update</button>
              </div>
            </div>



            <!-- closing -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('layouts.user-footer')