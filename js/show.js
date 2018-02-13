$(document).ready(function(){
	$('#ans').click(function() {
		$('#answer').fadeIn('50000');
		$('#ans').toggle('hide');
		//$('#allanswers').appendTo('#answer');
	});
	$('#anspost').click(function(event){
		event.preventDefault();
		//var base_url = '<?= echo base_url()?>';
		//alert(base_url);
		$.ajax({
			type:"post",
			//url:base_url+'/index.php/addanswerC/add',
			url:"../../addanswerC/add",
     		dataType: "text",
			//method: "post",
			cache: false,
			data: $('form').serialize(),
			success: function(msg){
				$("#allanswers").prepend(msg);

			},
			error: function(){
				alert("error");
			},

		});
		$('#answer').remove();
	});

	$(".votebtn").click(function(){
		var name=$(this).attr('name');
		var id=$(this).attr('id');
		var parent=$('p').attr('id');
		if(name=='up'){
			$.ajax({
				url:"../../upvoteC/vote",
				type: "post",
				cache:false,
				data:{id},
				dataType:"text",
				success:function(result){
					if(!$.trim(result)){
						alert("Your vote is not counted . Either you are already voted or not logged in!");
					}
					else{
						$("#"+id).text(result);
				}
				}
			});

		}

		if(name=='down'){
			$.ajax({
				url:"../../downvoteC/vote",
				method: "post",
				cache:false,
				data:{id},
				success:function(result){
					if(!$.trim(result)){
						alert("Your vote is not counted . Either you are already voted or not logged in!");

					}
					else{
						$("#"+id).text(result);

					}
				}
		});

		}


	});



});
