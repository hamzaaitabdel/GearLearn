
 function message(erreurs) {
    if (erreurs==0) {
         sweetAlert("Perfekt !", 'Tu as tout juste !', "success");}
    else if (erreurs==1) 
    sweetAlert("Gut !", 'Tu as fait une seule erreur !', "success");
    else 
    sweetAlert("Falsch !", 'Tu as fait '+erreurs+' erreurs !', "error");
   }
   
   function verif1() {
    erreurs=0;
    for (i=1; i<=2; i++) {
     erreurs+=eval(erreurl(i));
    }
    message(erreurs);
   } 
   
   function verif2() 
   {erreurs=0;
    
    if (form2.rep01.value!="heißt") 
    {erreurs++;
    document.getElementById('rep01').value = 'heißt';
    document.getElementById('rep01').style.color='#FF0000';}
    
    if (form2.rep02.value!="habe") 
    {erreurs++;
    document.getElementById('rep02').value = 'habe'; 
    document.getElementById('rep02').style.color='#FF0000';}
       
    if (form2.rep03.value!="spielt")
    {erreurs++;
    document.getElementById('rep03').value = 'spielt'; 
    document.getElementById('rep03').style.color='#FF0000';}
    
    if (form2.rep04.value!="fahren")
    {erreurs++;
    document.getElementById('rep04').value = 'fahren'; 
    document.getElementById('rep04').style.color='#FF0000';}
    
    if (form2.rep05.value!="ist")
    {erreurs++;
    document.getElementById('rep05').value = 'ist';
    document.getElementById('rep05').style.color='#FF0000'; }
    
    if (form2.rep06.value!="Hast")
    {erreurs++;
    document.getElementById('rep06').value = 'Hast'; 
    document.getElementById('rep06').style.color='#FF0000';}
 
    message(erreurs);
   }
   
    function color() 
   {   
     document.getElementById('rep01').style.color='#333';
     document.getElementById('rep02').style.color='#333';
     document.getElementById('rep03').style.color='#333';
     document.getElementById('rep04').style.color='#333';
     document.getElementById('rep05').style.color='#333';
     document.getElementById('rep06').style.color='#333';
   }
