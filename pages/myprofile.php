<? include_once  "tmp/head.php"; ?> 

<!-- NAVBAR================================================== -->
 <body class="bgBodyZone">
 
 <? include_once  "tmp/subhead.php"; ?> 
 
 <br>
 <div class="main-content container">
 
 <!--  =================Main Content==================== -->
 
	  <div class="container  ">
	 
		  <div class="row">
		 
			 <? include_once  "tmp/topvote.php"; ?> 
			 
			<!--  =================  ใส่ตรงนนี้เน้อคับ  ==================== --> 
			 
			 <div class="col-md-9">
			 
			  <? include_once  "tmp/manu.php"; ?> 
			  
			
			  
			   <div class="content-section">
			   
			      <h1>My Profile</h1>
			   
			   <ul class="nav nav-tabs" id="tab_profile">
			     <li>
			       <a href="#setting_tab" data-toggle="tab">
			         Settings
			       </a>
			     </li>
			     <li>
			       <a href="#profile_tab" data-toggle="tab">
			         Profile
			       </a>
			     </li>
			   </ul>
			   <div class="tab-content">
			   <div class="tab-pane active" id="setting_tab">  
			                      <br />
			                      <!-- Personal Data -->
			                          <form class="form-horizontal well1" role="form">
			                          
			   	                          <h2> Presonal data</h2><hr>
			   	                          <!-- Name -->
			   	                            <div class="form-group">
			   	                              <label for="name" class="col-lg-3 control-label">Name</label>
			   	                              <div class="col-lg-6">
			   	                                 <input type="text" id="name" name="name" value="goloton" class="form-control" >
			   	                              </div>
			   	                            </div><!--/ Name -->
			   	                            
			   	                            <!-- Email -->
			   	                            <div class="form-group">
			   	                              <label for="email" class="col-lg-3 control-label">Email</label>
			   	                              <div class="col-lg-6">
			   	                                <input type="email" class="form-control" id="email" name="email" value="ton@rgb7.com">
			   	                              </div>
			   	                            </div><!--/ Email -->
			   	                       
			   	                            <div class="form-group">
			   	                              <div class="col-lg-offset-3 col-lg-10">
			   	                                <button type="submit" class="btn btn-default">Save</button>
			   	                              </div>
			   	                            </div>
			                            
			                          </form><!--end  Personal Data-->
			                          
			                          <!-- Change password -->
			                          <form class="form-horizontal well1" role="form">
			                          
			                              <h2> Change password </h2><hr>
			                              
			                              <!-- Password -->
			                                <div class="form-group">
			                                  <label for="current_password" class="col-lg-3 control-label">Current Password</label>
			                                  <div class="col-lg-6">
			                                     <input type="password"  id="current_password" name="current_password" class="form-control" >
			                                  </div>
			                                </div><!-- / Password -->
			                                
			                              <!-- New Password -->
			                                <div class="form-group">
			                                  <label for="new_password" class="col-lg-3 control-label">New Password</label>
			                                  <div class="col-lg-6">
			                                    <input type="password" class="form-control" id="new_password" name="new_password" >
			                                  </div>
			                                </div><!-- / New Password -->
			                                
			                                <!-- New Password Again -->
			                                <div class="form-group">
			                                  <label for="password_again" class="col-lg-3 control-label">New Password Again</label>
			                                  <div class="col-lg-6">
			                                    <input type="password" class="form-control" id="password_again" name="password_again">
			                                  </div>
			                                </div><!-- / New Password Again -->
			                           
			                                <div class="form-group">
			                                  <div class="col-lg-offset-3 col-lg-10">
			                                    <button type="submit" class="btn btn-default">Save</button>
			                                  </div>
			                                </div>
			                            
			                          </form><!-- / Change password -->
			                          
			                     </div>
			                     
			                     <div class="tab-pane" id="profile_tab">  
			                        <br />
			                          <form class="form-horizontal well1" role="form">
			                          
			                              <h2>Member profile</h2><hr>
			                              
			                          <!-- gender -->
			                          <div class="form-group">
			                            <label for="gender" class="col-lg-3 control-label">Gender</label>
			                            <div class="col-lg-6">
			                                <label class="radio inline col-lg-3"><input type="radio" name="gender" value="1" />Female</label>
			                                <label class="radio inline col-lg-3"><input type="radio" name="gender" value="2" checked="checked" />Male</label>
			                            </div>
			                          </div><!-- / gender -->
			                          
			                          <!-- Height -->
			                          <div class="form-group">
			                            <label for="height" class="col-lg-3 control-label">Height</label>
			                            <div class="col-lg-6">
			                                <input type="text" id="height" class="form-control" name="height" value="">
			                            </div>
			                          </div><!-- / Height -->
			                          
			                          <!-- Weight -->
			                          <div class="form-group">
			                            <label for="Weight" class="col-lg-3 control-label">Weight</label>
			                            <div class="col-lg-6">
			                                <input type="text" id="Weight" class="form-control" name="Weight" value="">
			                            </div>
			                          </div><!-- / Weight -->
			                          
			                          <!-- Body Type -->
			                          <div class="form-group">
			                            <label for="body" class="col-lg-3 control-label">Body Type</label>
			                            <div class="col-lg-6">
			                               <select name="body" class="form-control">
			                               <option value="1">Slender</option>
			                               <option value="2">Average</option>
			                               <option value="3">Athletic</option>
			                               <option value="4">Full-figured</option>
			                               <option value="5">Heavy</option>
			                               <option value="6">A few extra pounds</option>
			                               </select>
			                            </div>
			                          </div><!-- / Body Type -->
			                          
			                          <!-- Sexual Oriental -->
			                          <div class="form-group">
			                            <label for="sex_orient" class="col-lg-3 control-label">Sexual Oriental</label>
			                            <div class="col-lg-6">
			                               <select name="sex_orient" class="form-control">
			                                  <option value="1">Straight</option>
			                                  <option value="2">Gay/Lesbian</option>
			                                  <option value="3">Bisexual</option>
			                               </select>
			                            </div>
			                          </div><!-- / Sexual Oriental -->
			                          
			                          <!-- smoking -->
			                          <div class="form-group">
			                            <label for="smoking" class="col-lg-3 control-label">Smoking</label>
			                            <div class="col-lg-6">
			                               <label class="radio inline col-lg-3"><input type="radio" name="smoking" value="1" />No</label>
			                               <label class="radio inline col-lg-3"><input type="radio" name="smoking" value="2" />Yes</label>
			                            </div>
			                          </div><!-- / smoking -->
			                          
			                          <!-- Drinking -->
			                          <div class="form-group">
			                            <label for="drinking" class="col-lg-3 control-label">Drinking</label>
			                            <div class="col-lg-6">
			                               <label class="radio inline col-lg-3"><input type="radio" name="drinking" value="1" />No</label>
			                               <label class="radio inline col-lg-3"><input type="radio" name="drinking" value="2" />Yes</label>
			                            </div>
			                          </div><!-- / smoking -->
			                          
			                          <!-- Married Status -->
			                          <div class="form-group">
			                            <label for="married" class="col-lg-3 control-label">Married Status</label>
			                            <div class="col-lg-6">
			                              <select name="married" class="form-control">
			                              <option value="1">Actively searching</option>
			                              <option value="2">In a relationship</option>
			                              <option value="3">Married</option>
			                              <option value="4">Not looking</option>
			                              <option value="5">Divorced</option>
			                              </select>
			                            </div>
			                          </div><!-- / Married Status -->
			                          
			                          <!-- Children -->
			                          <div class="form-group">
			                            <label for="children" class="col-lg-3 control-label">Children</label>
			                            <div class="col-lg-6">
			                               <label class="radio inline col-lg-3"><input type="radio" name="children" value="1" />No</label>
			                               <label class="radio inline col-lg-3"><input type="radio" name="children" value="2" />Yes</label>
			                            </div>
			                          </div><!-- / Children -->
			                          
			                          <!-- I am seeking a -->
			                          <div class="form-group">
			                            <label for="drinking" class="col-lg-3 control-label">I am seeking a</label>
			                            <div class="col-lg-6">
			                              <input type="hidden" name="seeking">
			                               <label class="checkbox inline col-lg-3"><input type="checkbox" name="seeking[]" value="1" checked="checked" />Woman</label>
			                               <label class="checkbox inline col-lg-3"><input type="checkbox" name="seeking[]" value="2" checked="checked" />Man</label>
			                            </div>
			                          </div><!--/ I am seeking a -->
			                          
			                           <!-- Preferred age -->
			                                     <!-- Body Type -->
			                                     <div class="form-group">
			                                       <label for="body" class="col-lg-3 control-label">Preferred age</label>
			                                       <div class="col-lg-2">
			                                          <select name="preferred_age[]" class="form-control">
			                                             <option value="18" selected="selected">18</option>
			                                             <option value="19">19</option>
			                                             <option value="20">20</option>
			                                             <option value="21">21</option>
			                                             <option value="22">22</option>
			                                             <option value="23">23</option>
			                                             <option value="24">24</option>
			                                             <option value="25">25</option>
			                                             <option value="26">26</option>
			                                             <option value="27">27</option>
			                                             <option value="28">28</option>
			                                             <option value="29">29</option>
			                                             <option value="30">30</option>
			                                             <option value="31">31</option>
			                                             <option value="32">32</option>
			                                             <option value="33">33</option>
			                                             <option value="34">34</option>
			                                             <option value="35">35</option>
			                                             <option value="36">36</option>
			                                             <option value="37">37</option>
			                                             <option value="38">38</option>
			                                             <option value="39">39</option>
			                                             <option value="40">40</option>
			                                             <option value="41">41</option>
			                                             <option value="42">42</option>
			                                             <option value="43">43</option>
			                                             <option value="44">44</option>
			                                             <option value="45">45</option>
			                                             <option value="46">46</option>
			                                             <option value="47">47</option>
			                                             <option value="48">48</option>
			                                             <option value="49">49</option>
			                                             <option value="50">50</option>
			                                             <option value="51">51</option>
			                                             <option value="52">52</option>
			                                             <option value="53">53</option>
			                                             <option value="54">54</option>
			                                             <option value="55">55</option>
			                                             <option value="56">56</option>
			                                             <option value="57">57</option>
			                                             <option value="58">58</option>
			                                             <option value="59">59</option>
			                                             <option value="60">60</option>
			                                             <option value="61">61</option>
			                                             <option value="62">62</option>
			                                             <option value="63">63</option>
			                                             <option value="64">64</option>
			                                             <option value="65">65</option>
			                                             <option value="66">66</option>
			                                             <option value="67">67</option>
			                                             <option value="68">68</option>
			                                             <option value="69">69</option>
			                                             <option value="70">70</option>
			                                             <option value="71">71</option>
			                                             <option value="72">72</option>
			                                             <option value="73">73</option>
			                                             <option value="74">74</option>
			                                             <option value="75">75</option>
			                                             <option value="76">76</option>
			                                             <option value="77">77</option>
			                                             <option value="78">78</option>
			                                             <option value="79">79</option>
			                                             <option value="80">80</option>
			                                           </select>
			                                       </div>
			                                   <label for="body" class="col-lg-1 control-label"><center>-</center></label>
			                                       <div class="col-lg-2">
			                                         <select name="preferred_age[]" class="form-control">
			                                             <option value="18">18</option>
			                                             <option value="19">19</option>
			                                             <option value="20">20</option>
			                                             <option value="21">21</option>
			                                             <option value="22">22</option>
			                                             <option value="23">23</option>
			                                             <option value="24">24</option>
			                                             <option value="25">25</option>
			                                             <option value="26">26</option>
			                                             <option value="27">27</option>
			                                             <option value="28">28</option>
			                                             <option value="29">29</option>
			                                             <option value="30">30</option>
			                                             <option value="31">31</option>
			                                             <option value="32">32</option>
			                                             <option value="33">33</option>
			                                             <option value="34">34</option>
			                                             <option value="35" selected="selected">35</option>
			                                             <option value="36">36</option>
			                                             <option value="37">37</option>
			                                             <option value="38">38</option>
			                                             <option value="39">39</option>
			                                             <option value="40">40</option>
			                                             <option value="41">41</option>
			                                             <option value="42">42</option>
			                                             <option value="43">43</option>
			                                             <option value="44">44</option>
			                                             <option value="45">45</option>
			                                             <option value="46">46</option>
			                                             <option value="47">47</option>
			                                             <option value="48">48</option>
			                                             <option value="49">49</option>
			                                             <option value="50">50</option>
			                                             <option value="51">51</option>
			                                             <option value="52">52</option>
			                                             <option value="53">53</option>
			                                             <option value="54">54</option>
			                                             <option value="55">55</option>
			                                             <option value="56">56</option>
			                                             <option value="57">57</option>
			                                             <option value="58">58</option>
			                                             <option value="59">59</option>
			                                             <option value="60">60</option>
			                                             <option value="61">61</option>
			                                             <option value="62">62</option>
			                                             <option value="63">63</option>
			                                             <option value="64">64</option>
			                                             <option value="65">65</option>
			                                             <option value="66">66</option>
			                                             <option value="67">67</option>
			                                             <option value="68">68</option>
			                                             <option value="69">69</option>
			                                             <option value="70">70</option>
			                                             <option value="71">71</option>
			                                             <option value="72">72</option>
			                                             <option value="73">73</option>
			                                             <option value="74">74</option>
			                                             <option value="75">75</option>
			                                             <option value="76">76</option>
			                                             <option value="77">77</option>
			                                             <option value="78">78</option>
			                                             <option value="79">79</option>
			                                             <option value="80">80</option>
			                                           </select>
			                                       </div>
			                                     </div><!-- / Body Type -->
			                          
			                                            
			                                  <div class="form-group">
			                                    <div class="col-lg-offset-3 col-lg-10">
			                                      <button type="submit" class="btn btn-default">Save</button>
			                                    </div>
			                                  </div>
			                                            
			                                            
			                                            				                               
			                         </form>
			                     
			                        </div>
			   
			   
			   </div>
			 
			 </div>
				</div>		 
			<!--  =================  ห้ามเกินตรงนี้เน้อคับ ==================== --> 
			 
			 <? include_once  "tmp/userzone.php"; ?> 
			 
		 
		 </div><!--end row-->
	 
	 </div><!--end container-->
 
 </div><!--end main-content container-->
  <? include_once  "tmp/footer.php"; ?> 
  
  <? include_once  "tmp/hitvote.php"; ?> 
  
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/holder.js"></script>
  
 </body>
 </html>