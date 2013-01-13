$(function(){
	$("input:password").chromaHash({bars: 3, salt:"phpmongodbjavascriptcssnginxapache", minimum:6});
	$(".reg").click(
		function(){
			if($(".modal").is('div')){
				$('.modal').modal('show');
				console.log('already has');
				return;
			}
			$.get('/index.php',{load:"reg"},function(data){
				$('<div>').addClass('modal')
				.append($('<div>').addClass('modal-body').html(data))
				.appendTo($('body'))
				.modal();
				var passElement=document.getElementById('passwd');
				passwordStrength(passElement,defaultPasswordStrengthDefinitions);
				$("input:password").chromaHash({bars: 3, salt:"phpmongodbjavascriptcssnginxapache", minimum:6});
			});
		}
	);
});