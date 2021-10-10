function enableDealSubmit(){document.getElementById('submit-deal').disabled=false;}
$("#deal_form").on('submit',function(e){e.preventDefault();console.log(letters);if(checkDealValidation()){$.ajax({type:$(this).prop('method'),url:$(this).prop('action'),data:JSON.stringify($(this).serialize()),dataType:"json"}).done(function(result){window.location.href="/thank-you/";});}
else{document.querySelector('.-deal').style.display='block';}});const checkDealValidation=()=>{console.log('entry');let firstName=document.getElementById('customerfname').value;let lastname=document.getElementById('customerlname').value;let title=document.getElementById('customertitle').value;let company=document.getElementById('dealcompany').value;let city=document.getElementById('dealcity').value;let country=document.getElementById('dealcountry').value;let inpphone=document.getElementById('dealphone').value;let businessemail=document.getElementById('businessemail').value;let website=document.getElementById('dealwebiste').value;let industry=document.getElementById('dealindustry').value;let products=document.getElementById('dealproducts').value;let oppname=document.getElementById('opportunityname').value;let oppdesc=document.getElementById('opportunitydesc').value;let partnercompany=document.getElementById('partnercompany').value;let partnercountry=document.getElementById('partnercountry').value;let partnerfname=document.getElementById('pmfname').value;let partnerlname=document.getElementById('pmlname').value;let partnerphone=document.getElementById('pmphone').value;let partneremail=document.getElementById('pmemail').value;let joint=document.getElementById('joint').value;console.log(website);let resp=true;if(!firstName.match(letters)||!lastname.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid customer name!';}
if(!title.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid customer title!';}
if(!company.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid company name!';}
if(!city.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid city!';}
if(!country.match(lettersSpace)){resp=false;document.querySelector('.-deal').innerHTML='Invalid country!';}
if(!inpphone.match(phone)){resp=false;document.querySelector('.-deal').innerHTML='Invalid mobile number!';}
if(!businessemail.match(email)){resp=false;document.querySelector('.-deal').innerHTML='Invalid business email!';}
if(!website.match(websiteCheck)){resp=false;document.querySelector('.-deal').innerHTML='Invalid website!';}
if(!industry.match(lettersSpace)){resp=false;document.querySelector('.-deal').innerHTML='Invalid industry!';}
if(!productsCheck.includes(products)){resp=false;document.querySelector('.-deal').innerHTML='Invalid product!';}
if(!oppname.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid opportunity name!';}
if(!oppdesc.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid opportunity description!';}
if(!partnercompany.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid partner company!';}
if(!partnercountry.match(lettersSpace)){resp=false;document.querySelector('.-deal').innerHTML='Invalid partner country!';}
if(!partnerfname.match(letters)||!partnerlname.match(letters)){resp=false;document.querySelector('.-deal').innerHTML='Invalid partner name!';}
if(!partnerphone.match(phone)){resp=false;document.querySelector('.-deal').innerHTML='Invalid partner mobile number!';}
if(!partneremail.match(email)){resp=false;document.querySelector('.-deal').innerHTML='Invalid partner email!';}
if(!jointCheck.includes(joint)){resp=false;document.querySelector('.-deal').innerHTML='Invalid joint choosen!';}
console.log(resp);return resp;}