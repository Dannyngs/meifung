$(document).ready(function(){


 


$('#mysubmit').click(function(event){
 
    event.preventDefault();

    //#1 get data
var name=$('#name').val()
var email=$('#email').val()
var subject=$('#subject').val()
var msg=$('#msg').val()
















// 2# validation
if(name==""||subject==""||msg==""||email==""){
    
    alert('請完整填妥表單')
    return ;
}

    
  

// 3# post data
     
$.post("mail.php",
     {
    name:name,
  	email :email,
    subject :subject,
    msg :msg,
   
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
            
         }else{
         $('#name').val("");
             $('#email').val("");
              $('#subject').val("");

             $('#msg').val("");
         alert("遞交成功！");
         
         }
      
        });
  
     
   
     
 });  











});

