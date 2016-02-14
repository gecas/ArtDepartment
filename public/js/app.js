	$(document).ready(function(){
		$(".heroes-info").hide();
		$(document).on('click', '.heroes-detail-button', function() {
			var time = 1500;
			var info_block_id = $(this).data('info-id');
			$(".heroes-info[data-info-block='"+info_block_id+"'").stop(0).slideToggle();
			$(this).toggleClass("triangle-down triangle-up");
		});
	});