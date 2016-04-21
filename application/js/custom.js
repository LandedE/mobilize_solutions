$(document).ready(function()
{
	//$('.reward-screen-input').css("display","none");
	$(".blah").attr('src','');
	$("#blah2").attr('src','');
	var filename;
	$("#areaddlcompaign").hide();
	$("#btngo").hide();

	//$("#blah").attr('src','');
	$(".android").click(function()
	{
		$(".galaxy").css('display','block');
		$(".iphone-6-plus").css('display','none');
	});
	$(".iphone").click(function()
	{
		$(".galaxy").css('display','none');
		$(".iphone-6-plus").css('display','block');
	});
	$("#ddlpartner").change(function()
	{
	
		 
		 var val = $(this).val();
		if(val != 0)
		{
			$("#areaddlcompaign").show();
		}
		else
		{
			$("#areaddlcompaign").hide();
		}
		 
		//console.log("Hello");	
	});
	$("#ddlcompaign").change(function()
	{
		var val = $(this).val();
		if(val != 0)
		{
			$("#btngo").show();
		}
		else
		{
			$("#btngo").hide();
		}
		//console.log("Hello");	
	});
	$('#roundedOne').click(function(e)
	{
 		e.preventDefault();
		$('#file').click();


	});
	$("form#data").submit(function(event){
  		event.preventDefault();
 	 var formData = new FormData($(this)[0]);
 	 	if(filename == null )
		{
			alert("Please select file");

		}
		else
		{
				$.ajax({
				url: 'upload.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) {
				alert(returndata);
				$( "#roundedOne" ).prop( "checked", true );
				},
			 
				});
				return false;
		}
 
	});

	$('#roundedTwo').click(function(e)
	{
		e.preventDefault();
		$('#file2').click();
	
	});
	$("form#data2").submit(function(event){
		event.preventDefault();
		var formData = new FormData($(this)[0]);
		 if(filename == null )
		{
			alert("Please select file");
		}
		else
		{
			$.ajax({
			url: 'upload.php',
			type: 'POST',
			data: formData,
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (returndata) {
				alert(returndata);
				$( "#roundedTwo" ).prop( "checked", true );
				$('#position').prop("disabled", false);
				 $('#span_percentage').prop("disabled",false);
			}
		});
		return false;
		}
		
	});
	$('#roundedFour').click(function(e)
	{
		e.preventDefault();
		$('#file3').click();
	
	});
	$("form#data3").submit(function(event){
		event.preventDefault();
		var formData = new FormData($(this)[0]);
		if(filename == null )
		{
			alert("Please select file");
		}
		else
		{
			
			$.ajax({
				url: 'upload.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) {
				alert(returndata);
				$( "#roundedFour" ).prop( "checked", true);
				var uploaded_file = $("#last_uploaded_url").val();	
				$(".add").html("http://localhost/Mobilize_Solutions/uploads/"+uploaded_file);
			
				}
				});
				return false;
		}
	
	});
	$("#get_started").keyup(function()
	{
		var val = $(this).val();
		if( $("#get_started").val().length > 0)
		{
			$(".btn_contain").html(val);
		
		}
		else
		{

			$(".btn_contain").html("Getting Started");

		}
		
	});
	$("#Enter_to_win").keyup(function()
	{
		var val = $(this).val();
		if( $("#Enter_to_win").val().length > 0)
		{
			$("#label_enter_to_win").html(val);
		
		}
		else
		{

			$("#label_enter_to_win").html("Enter To Win");

		}
	});
	$("#btn_html_submit").click(function()
	{
		var custom_html = $("#custom_html").val();
		$(".contain-html").html(custom_html);
		
	});
	$("#btn_html_submit_reward").click(function()
	{
		var custom_html = $("#custom_html_reward").val();
		$(".custome-html").html(custom_html);
		
	})
	$("#file3").change(function()
	{
		$( "#roundedFour" ).prop( "checked", false );
		filename = $('#file3')[0].files[0]['name'];
		$("#last_uploaded_url").val(filename);
		 if(filename == null )
		 {
		
		 	alert("Please select file");
		 }
		 else
		 {
			
			$("form#data3").trigger("submit");

		}
	});
	$("#file").change(function()
	{
		$( "#roundedOne" ).prop( "checked", false);
		filename = $('#file')[0].files[0]['name'];
		$("#last_uploaded_url").val(filename);

		if(filename == null )
		{
	
			alert("Please select file");

		}
		else
		{
			$("form#data").trigger("submit");

		}
		
	});
	$("#file2").change(function()
	{
		$( "#roundedTwo" ).prop( "checked", false );
		filename = $('#file2')[0].files[0]['name'];
		$("#last_uploaded_url").val(filename);
			if(filename == null )
		{
			
			alert("Please select file");

		}
		else
		{
			$("form#data2").trigger("submit");

		}
	});
	$('#win_chk').change(function() { 
    if ($(this).is(':checked')) {
        //$(this).prop('checked',false);
        $('.form').css('display','block');
        $('.reward-screen-input-inner').css('display','block');
    } else {
         //$(this).prop('checked',true);
        $('.form').css('display','none');
        $('.reward-screen-input-inner').css('display','none');
    }
});
$("#txt_field1").keyup(function()
	{
		var val = $(this).val();
		if( $("#txt_field1").val().length > 0)
		{
			$(".txtfield1").val(val);
		
		}
		else
		{

			$(".txtfield1").val("");

		}
		
	});
	

	$("#txt_field2").keyup(function()
	{
		var val = $(this).val();
		if( $("#txt_field2").val().length > 0)
		{
			$(".txtfield2").val(val);
		
		}
		else
		{

			$(".txtfield2").val("");

		}
		
	});


	$("#txt_field3").keyup(function()
	{
		var val = $(this).val();
		if( $("#txt_field3").val().length > 0)
		{
			$(".txtfield3").val(val);
		
		}
		else
		{

			$(".txtfield3").val("");

		}
		
	});
		$("#txt_win_btn").keyup(function()
	{
		var val = $(this).val();
		if( $("#txt_win_btn").val().length > 0)
		{
			$(".btn_win").html(val);
		
		}
		else
		{

			$(".btn_win").html("");

		}
		
	});
	$("#txt_footer").keyup(function()
	{
		var val = $(this).val();
		if( $("#txt_footer").val().length > 0)
		{
			$(".footer-content").html(val);
		
		}
		else
		{

			$(".footer-content").html("");

		}
		
	});
});
	