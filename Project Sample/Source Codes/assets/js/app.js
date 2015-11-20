$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });

  $('.carousel').carousel({
        interval: 3000
    });
  
  $('#btnSubmit').click(function(e) {
        var isValid = true;
        $('input[name*="question_"]').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
        if (isValid == false) {
            e.preventDefault();
			alert('Lütfen boş soru bırakmayınız!');
		}else 
            alert('Anketimizi cevapladığınız için teşekkür ederiz!');
    });
	
});
