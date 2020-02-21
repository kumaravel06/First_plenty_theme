window.addEventListener('load', function() {
   
    $(document).ready( function() {
   
    $('.custom-select').click(function(){
     $('option').css('color','#069399');
  });
    $('.footer').prepend('<div class="contact"><img src="../images/contact.png" alt="contact"><h1>Contact Us</h1></div>');
    $('.copyright').prepend('<div class="social-icons"><a href="" class="fa fa-facebook" target="_blank"></a><a href="" class="fa fa-twitter" target="_blank"></a><a href="" class="fa fa-instagram" target="_blank"></a><a href="" class="fa fa-googleplus" target="_blank"></a></div>');   
    
});
});
