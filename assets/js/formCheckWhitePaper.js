function enableReqSubmit(){document.getElementById('submit-req').disabled=false;}
$("#whitepaper_form").on('submit',function(e){e.preventDefault();if(checkWPValidation()){$.ajax({type:$(this).prop('method'),url:$(this).prop('action'),data:JSON.stringify($(this).serialize()),dataType:"json"}).done(function(result){document.querySelector('.sf-paper-grid-col-container-thanks').style.display='block';document.querySelector('.-downloadForm').style.display='none';document.querySelector('.sf-paper-grid-col-title').style.display='none';});}
else{document.querySelector('.-wp').style.display='block';}});const checkWPValidation=()=>{let firstName=document.getElementById('wp-fName').value;let lastName=document.getElementById('wp-lName').value;let company=document.getElementById('wp-company').value;let inpphone=document.getElementById('wp-phone').value;let email=document.getElementById('wp-email').value;let country=document.getElementById('wp-country').value;let state=document.getElementById('wp-state').value;let resp=true;if(!firstName.match(letters)||!lastName.match(letters)){resp=false;document.querySelector('.-wp').innerHTML='Invalid Name!';}
if(!email.match(email)){resp=false;document.querySelector('.-wp').innerHTML='Invalid Email!';}
if(!inpphone.match(phone)){resp=false;document.querySelector('.-wp').innerHTML='Invalid Mobile Number!';}
if(!company.match(letters)){resp=false;document.querySelector('.-wp').innerHTML='Invalid Company Name!';}
if(!country.match(letters)){resp=false;document.querySelector('.-wp').innerHTML='Invalid Country!';}
if(!state.match(letters)){resp=false;document.querySelector('.-wp').innerHTML='Invalid State!';}
return resp;}