$(document).ready(function(){
	$('#ans').click(function() {
		$('#answer').fadeIn('50000');
		$('#ans').toggle('hide');

		$('#allanswers').css('top','65%');
	});
	$('#anspost').click(function(event){
		event.preventDefault();
		//var base_url = '<?= echo base_url()?>';
		alert(base_url);
		$.ajax({
			type:"post",
			//url:base_url+'/index.php/addanswerC/add',
			url:"../../addanswerC/add",
     dataType: "text",
			//method: "post",
			cache: false,
			data: $('form').serialize(),
			success: function(msg){
				alert(msg);
				//$("#allanswers").prepend(msg);

			},
			error: function(){
				alert("error");
			}

		});
		$('#answer').fadeOut('50000');
		$('#allanswers').css('top','');





	});

	$(".votebtn").click(function(){
		//alert('clicked');
		var name=$(this).attr('name');
		var id=$(this).attr('id');
		var parent=$('p').attr('id');
		//var datastring="id" + i;
		if(name=='up'){
			//alert(i);
			//alert("clicked");
			$.ajax({
				url:"../../upvoteC/vote",
				type: "post",
				cache:false,
				data:{id},
				dataType:"text",
				//dataType:"text",
				success:function(result){
					if(!$.trim(result)){
						alert("You are already voted for this answer !");

					}
					else{
						$("#"+id).text(result);
						//alert(result);
				}
				}
			});

		}

		if(name=='down'){
			//alert(i);
			//alert("clicked");
			$.ajax({
				url:"../../downvoteC/vote",
				method: "post",
				cache:false,
				data:{id},
				//dataType:"text",
				success:function(result){
					if(!$.trim(result)){
						alert("You are already voted for this answer !");

					}
					else{
						$("#"+id).text(result);

					}

					//alert(result);
				}
		});

		}


	});



});
