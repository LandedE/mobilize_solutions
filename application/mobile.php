<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>

<script type='text/javascript' src='js/custom.js'></script>  
<script type="text/javascript" src="js/farbtastic.js"></script>
 <script type="text/javascript" src="js/jquery.minicolors.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/bootstrap.min.js"></script>  
<link rel="stylesheet" href="css/farbtastic.css" type="text/css" />
 <script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    //default values
    $('.logo').css("background-color","#646464");
    $('.primary-button').css("background-color",'#000000');   
    $('.secondary-button').css("color",'#646464');
     $('.primary-button').css("color",'#ffffff');
     $('.secondary-button').css("color",'#ffffff');
     $('#position').prop("disabled", true);
     $('#span_percentage').prop("disabled",true);

     var curr_id;

    $('#picker').click(function()
    {
        var color_val = $.farbtastic('#picker').color;
        console.log("Hello");
        console.log(color_val);
        console.log(curr_id);
        if(curr_id == "color_page_bk")
        {
            $('.page_color').css("background-color",color_val);
            $(".mobile-inner").css("background-color",color_val);
        }
        if(curr_id == "color_pr_btn_txt_color")
        {
            $('.primary_btn_text_color').css("background-color",color_val);
            $('.primary-button').css("color",color_val);
        }
        if(curr_id == "color_pr_btn_color")
        {
             $('.primary_btn_color').css("background-color",color_val);
            $('.primary-button').css("background-color",color_val);   
        }
         if(curr_id == "color_sr_btn_color")
        {
             $('.secondary_btn_color').css("background-color",color_val);
            $('.secondary-button').css("background-color",color_val);   
        }
        if(curr_id == "color_sr_btn_txt_color")
        {
            $('.secondary_btn_text_color').css("background-color",color_val);
            $('.secondary-button').css("color",color_val);
        }
        if(curr_id == "color_font_color")
        {
            $('.font_color').css("background-color",color_val);
            $('.font').css("color",color_val);
        }
        if(curr_id == "color_header_color")
        {
            $('.header_color').css("background-color",color_val);
            $('.logo').css("background-color",color_val);
        }
        
    });
    $('.page_color').click(function()
    {
        curr_id = this.id;
        $('#picker').farbtastic('#color');
    });
    $('.primary_btn_text_color').click(function()
    {
        curr_id = this.id;
        $('#picker').farbtastic('#color');
    });
    $('.primary_btn_color').click(function()
    {
        curr_id = this.id;
        $('#picker').farbtastic('#color');
    });
    $('.secondary_btn_color').click(function()
    {
        curr_id = this.id;
        $('#picker').farbtastic('#color');
    });
    $('.secondary_btn_text_color').click(function()
    {
        curr_id = this.id;
        $('#picker').farbtastic('#color');
    });
     $('.font_color').click(function()
    {
        curr_id = this.id;
        $('#picker').farbtastic('#color');
    });
    $('.header_color').click(function()
    {
        curr_id = this.id;
        $('#picker').farbtastic('#color');
    });


});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.blah')
            .attr('src', e.target.result)
            .width(100)
            .height(21);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.cantain_image')
            .attr('src', e.target.result)
            .width(250)
            .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

 </script>
</head>
<body class="mobile-panel-page">
	<div class="wrapper">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6 col-sm-6 col-xs-12">
                	<div class="partner-name">
                    	<h4>PARTNER NAME</h4>
                        <ul class="partner-main">
                            <li class="dropdown global-settings">
                              <a href="#" data-toggle="dropdown">Global Settings</a>
                              <ul class="dropdown-menu dropdown-menu1">
                                <li>Page Background<a href="#"  id="color_page_bk" class="page_color" class="colorwell"  data-toggle="modal" data-target="#myModal"></a></li>
                           
                                <li>Font Style
                                	<select>
                                    	<option>Helvetica</option>
                                        <option>Arial</option>
                                        <option>Calibri</option>
                                        <option>System</option>
                                        <option>Tahoma</option>
                                    </select>
                                </li>
                                <li>Font Color<a href="#" id="color_font_color" class="font_color" data-toggle="modal" class="colorwell" data-target="#myModal"></a></li>
                                <li>Header Color<a href="#" id="color_header_color" class="header_color" data-toggle="modal" class="colorwell" data-target="#myModal"></a></li>
                                <li>Header Logo (500 x 150)<div class="rounded" id="custom_html_intro">
                                  <form  id="data">
                                    <input type="file" id="file" name="myfile[]" onchange="readURL(this);"></input>
                                    <input type="checkbox" value="None" id="roundedOne" name="check" />
                                    <label for="roundedOne"></label>
                                    </form>
                                </div>
                                </li>
                                <li>Primary Button Color<a href="#" id="color_pr_btn_color" class="primary_btn_color" data-toggle="modal" class="colorwell" data-target="#myModal"></a></li>
                                <li>Primary Button Text Color<a href="#" id="color_pr_btn_txt_color" class="primary_btn_text_color" data-toggle="modal" class="colorwell" data-target="#myModal"></a></li>
                                <li>Secondary Button Color<a href="#" id="color_sr_btn_color" class="secondary_btn_color" data-toggle="modal" class="colorwell" data-target="#myModal"></a></li>
                                <li>Secondary Button Text Color<a href="#" id="color_sr_btn_txt_color" class="secondary_btn_text_color" data-toggle="modal" class="colorwell" data-target="#myModal"></a></li>
                                <li>Navigation Color<a href="#"></a></li>
                              </ul>
                            </li>
                            <li class="dropdown intro">
                              <!-- Intro section -->
                              <a href="#" data-toggle="dropdown">Intro</a>
                              <ul class="dropdown-menu dropdown-menu2">
                                <li>Page Image Upload<div class="rounded">
                                    <form  id="data2">
                                    <input type="file" id="file2" name="myfile[]" onchange="readURL2(this);"></input>
                                    <input type="checkbox" value="None" id="roundedTwo" name="check" />
                                    <label for="roundedTwo"></label>
                                    </form>
                                </div>
                                </li>
                                <li>Position
                                    <select id="position">
                                        <option>Top</option>
                                        <option>Center</option>
                                        <option>Bottom</option>
                                    </select>
                                </li>
                                <li>Span in Percentage<input type="number" id="span_percentage" name="points" min="10" max="100" step="10" value="10"></li>
                                <li>Custom HTML<div class="rounded">
                                    <input type="checkbox" value="None" id="roundedThree" name="check"  data-toggle="modal" data-target="#customhtmlModal"/>
                                    <label for="roundedThree"></label>
                                </div>
                                </li>
                                <li>Images for HTML<div class="rounded">
                                 
                                <form  id="data3">
                                    <input type="file" id="file3" name="myfile[]"></input>
                                    <input type="checkbox" value="None" id="roundedFour" name="check" />
                                    <label for="roundedFour"></label>
                                   
                                    </form>

                                </div>
                                 <input type="hidden" id="last_uploaded_url" name="last_uploaded_url"></input>
                                </li>
                                <li><span href="#" class="add">+Add</span></li>
                             
                                <li>Primary Button Content</li>
                                <li><input type="text" placeholder="Get Started" class="get-started" id="get_started"></li>
                              </ul>
                            </li>
                            <!-- Intro section End -->
                            <!-- Reward section starts-->
                            <li class="dropdown reward">
                              <a href="#" data-toggle="dropdown">Reward</a>
                              <ul class="dropdown-menu dropdown-menu3">
                                <li>Custom HTML<div class="rounded">
                            <input type="checkbox" value="None" id="roundedFive" name="check"  data-toggle="modal" data-target="#customhtmlModal_reward"/>
                                    <label for="roundedFive"></label>
                                </div>
                                </li>
                                <li>
                                  <input type="checkbox" id="win_chk">
                                  <label>Form</label>
                                </li>
                                <li class="form">
                                <ul>
                                <li class="reward-option">
                                  <input type="text" placeholder="field label" id="txt_field1">
                                </li>
                                <li class="reward-option">
                                    <input type="text" placeholder="field label" id="txt_field2">
                                </li>
                                <li class="reward-option">
                                  <input type="text" placeholder="field label" id="txt_field3">
                                </li>
                                <li>Button Content</li>
                                <li><input type="text" placeholder="Enter To Win" class="get-started" id="txt_win_btn"></li>
                                </ul>
                                </li>
                                <li>Footer Text</li>
                                <li><textarea class="footer-text" id="txt_footer"></textarea></li>
                              </ul>
                            </li>
                            <!-- Reward section End-->
                          </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                	<div class="campaign-name">
                    	<h4>CAMPAIGN NAME<a href="#" class="save">SAVE</a></h4>
                        <div class="campaing-main">
                        	<div class="select-phone">
                            	<a href="#" class="iphone">iPhone</a>
                                <a href="#" class="android">Android</a>
                            </div>
                            <div class="select-device">
                              <select>
                                <option>iphone 4 (640x960)</option>
                                <option>iphone 5 (640x1136)</option>
                                <option>iphone 6 (750x1334)</option>
                                <option>iphone 6+ (1080x1920)</option>
                                <option>Galaxy SIII (720x1280)</option>
                                <option>Galaxy SII (480x800)</option>
                                <option>Galaxy Nexus 4 (768x1280)</option>
                              </select>
                            </div>
                            <div class="galaxy">
                        	<img src="images/mobile.png">
                            <div class="mobile-inner">
                            	<div class="logo">
                                	<img src="images/logo.png" alt="" id="blah" class="blah">
                                </div>
                                <div class="primary-screen">
                                <div class="font">
                                	<p>Helvetica</p>
                                </div>
                                <div class="primary-button">Primary Button</div>
                                <div class="secondary-button">Secondary Button</div>
                                </div>
                                <div class="get-started-screen">
                                <div class="image-and-html">
                                  <div id="cantain">
                                  <img src="" class="cantain_image">
                                  </div>
                                  <div class="contain-html">
                                  </div>
                                </div>
                                <div class="get-started-button btn_contain">Get Started</div>
                            </div>
                            <div class="reward-screen">
                                  <div class="custome-html">
                                  </div>
                                  <div class="reward-screen-input">
                                  <ul class="reward-screen-input-inner">
                                  <li><input type="text" placeholder="Field label" class="txtfield1"></li>
                                  <li><input type="text" placeholder="Field label" class="txtfield2"></li>
                                  <li><input type="text" placeholder="Field label" class="txtfield3"></li>
                                  <li><div class="get-started-button primary-button btn_win">Enter To Win</div></li>
                                </ul>
                                </div>
                                <div class="footer-content"></div>
                            </div>
                            </div>
                            </div>
                            <div class="iphone-6-plus">
                            <img src="images/iPhone-6-plus.png">
                            <div class="mobile-inner">
                                <div class="logo">
                                    <img src="images/logo.png" alt=""  class="blah">
                                </div>
                                <div class="primary-screen">
                                <div class="font">
                                    <p>Helvetica</p>
                                </div>
                                <div class="primary-button">Primary Button</div>
                                <div class="secondary-button">Secondary Button</div>
                                </div>
                                <div class="get-started-screen">
                                <div class="image-and-html">
                                  <div id="cantain">
                                  <img src="" class="cantain_image">
                                  </div>
                                  <div class="contain-html">
                                  </div>
                                </div>
                                <div class="get-started-button btn_contain">Get Started</div>
                            </div>
                            <div class="reward-screen">
                                  <div class="custome-html">
                                  </div>
                                  <div class="reward-screen-input">
                                  <ul class="reward-screen-input-inner">
                                  <li><input type="text" placeholder="Field label" class="txtfield1"></li>
                                  <li><input type="text" placeholder="Field label" class="txtfield2"></li>
                                  <li><input type="text" placeholder="Field label" class="txtfield3"></li>
                                  <li><div class="get-started-button primary-button btn_win">Enter To Win</div></li>
                                </ul>
                                </div>
                                <div class="footer-content"></div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Choose color</h4>
        </div>
        <div class="modal-body">
          <p>       <div id="picker"></div></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="customhtmlModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter Custom HTML</h4>
        </div>
        <div class="modal-body">
          <p><label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="custom_html"></textarea></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" id="btn_html_submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->
  <div class="modal fade" id="customhtmlModal_reward" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter Custom HTML</h4>
        </div>
        <div class="modal-body">
          <p><label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="custom_html_reward"></textarea></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" id="btn_html_submit_reward">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->
  <script type="text/javascript">
      $('.global-settings').click(function() {
      $('.primary-screen').css('display','block');
      $('.get-started-screen, .reward-screen').css('display','none');
      $('.dropdown-menu1').css('display','block');
      $('.dropdown-menu2, .dropdown-menu3').css('display','none');
    });
       $('.intro').click(function() {
      $('.get-started-screen').css('display','block');
      $('.primary-screen, .reward-screen').css('display','none');
      $('.dropdown-menu2').css('display','block');
      $('.dropdown-menu1, .dropdown-menu3').css('display','none');
    });
    $('.reward').click(function() {
      $('.reward-screen').css('display','block');
      $('.primary-screen, .get-started-screen').css('display','none');
      $('.dropdown-menu3').css('display','block');
      $('.dropdown-menu1, .dropdown-menu2').css('display','none');
    });
  </script>
</body>
</html>
