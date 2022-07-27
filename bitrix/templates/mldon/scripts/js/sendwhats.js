function sendToWhatsapp(text, phone) {
 
  text = encodeURIComponent(text);
 
  let url = `https://web.whatsapp.com/send?phone=${phone}&text=${text}&source=&data=`;
 
  window.open(url);
}
 
$('a').click(function(e){
  e.preventDefault();
 
  let phoneNumber = '+380714430841';
  let text = $('input').val();
 
  sendToWhatsapp(text, phoneNumber);
});