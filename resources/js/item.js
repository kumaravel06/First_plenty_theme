window.addEventListener('load', function() {
   
    $(document).ready( function() {
   
    $('.custom-select').click(function(){
     $('option').css('color','#069399');
  });
    var bc_contact = $('.bc_contact').clone();
    $('.footer').prepend(bc_contact);
    
    $('.copyright').prepend('<div class="social-icons"><a href="" class="fa fa-facebook" target="_blank"></a><a href="" class="fa fa-twitter" target="_blank"></a><a href="" class="fa fa-instagram" target="_blank"></a><a href="" class="fa fa-google-plus" target="_blank"></a></div>');   
    
});
});
