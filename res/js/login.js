$(function(){
	$(".reg").click(
		function(){
			$.get('/index.php',{load:"reg"},function(data){
				$('<div>').addClass('modal')
				.append($('<div>').addClass('modal-body').html(data))
				.appendTo($('body'))
				.modal();
				var passElement=document.getElementById('passwd');
				passwordStrength(passElement,defaultPasswordStrengthDefinitions);
			});
		}
	);
});