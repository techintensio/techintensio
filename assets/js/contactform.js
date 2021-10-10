function enableContactSubmit(){document.getElementById('submit-contact').disabled=false;}
$("#contact_form").on('submit',function(e){e.preventDefault();console.log(letters);if(checkContactValidation()){$.ajax({type:$(this).prop('method'),url:$(this).prop('action'),data:JSON.stringify($(this).serialize()),dataType:"json"}).done(function(result){$(this).trigger('reset');window.location.href="/thank-you/";});}
else{document.querySelector('.-contact').style.display='block';}});const checkContactValidation=()=>{console.log('entry');let firstName=document.getElementById('contactfname').value;let lastname=document.getElementById('contactlname').value;let email=document.getElementById('contactemail').value;let inpphone=document.getElementById('contactphone').value;let job=document.getElementById('contactjob').value;let company=document.getElementById('contactcompany').value;let country=document.getElementById('contactcountry').value;console.log(phone);let resp=true;if(!firstName.match(letters)||!lastname.match(letters)){resp=false;document.querySelector('.-contact').innerHTML='Invalid Name!';}
if(!email.match(email)){resp=false;document.querySelector('.-contact').innerHTML='Invalid Email!';}
if(!inpphone.match(phone)){resp=false;document.querySelector('.-contact').innerHTML='Invalid Mobile Number!';}
if(!job.match(letters)){resp=false;document.querySelector('.-contact').innerHTML='Invalid Job Title!';}
if(!company.match(letters)){resp=false;document.querySelector('.-contact').innerHTML='Invalid Company Name!';}
if(!country.match(letters)){resp=false;document.querySelector('.-contact').innerHTML='Invalid Country!';}
return resp;}
var dtt=document.getElementById('contactdatepicker');dtt.onfocus=function(event){this.type='datetime-local';this.focus();}