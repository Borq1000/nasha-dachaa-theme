   
 /*
  * ----------------------------------------------------
  * 
  * ----------------------------------------------------
  * 
  * ----------------------------------------------------
  * 
  * 
  * 
  * РАЗДЕЛИТЕЛЬ
  * 
  * 
  * 
  * 
  * 
  * 
  * ---------------------------------------------------
  * 
  * ---------------------------------------------------
  * 
  * ---------------------------------------------------
  */    
     
     
     
     
     
     
     
     
     
     
     
     
     
     
//Калькулятор бетонной отмостки

     function raschitat_otmostka(){
         
         
   var tipotmostkif;
   var vibranniyTipOtmostkiText;
   var perimetrot;
   var shirinaot;
   var koluglovot;
   
   var checkmaterials;
   
   //======================================
         
         
         
         
   
   
   
   
   //Значение мперимтра дома в метрах     
   perimetrot = parseInt(document.getElementById('perimetrot').value);
   
   //Значение значение ширины отмостки в см.
   shirinaot = parseInt(document.getElementById('shirinaot').value);
        
        
  //Значение кол-во углов шт.
   koluglovot = parseInt(document.getElementById('qtuglovot').value);
   
   
   var chekmat = document.getElementById("no-material");
   
   //Типы отмостки
   var radioOtmostkaEkonom = document.getElementById("otm-ekonom");
   var radioOtmostkaStandart = document.getElementById("otm-standart");
   var radioOtmostkaUsilennaya = document.getElementById("otm-usilennaya");
   var radioOtmostkaCapitalnaya = document.getElementById("otmostka-kapitalnaya");
   var radioOtmostkaTipNevibran = document.getElementById("otmtip-ne-vibran");
   
    
      if(radioOtmostkaEkonom.checked === true){
       
       tipotmostkif = 2390; 
       vibranniyTipOtmostkiText = "Эконом - 2 390 руб./кв.м.";
       
   } 
   
      else if(radioOtmostkaStandart.checked === true){
       
       tipotmostkif = 2590;
       vibranniyTipOtmostkiText = "Стандарт - 2 590 руб./кв.м.";
       
   } 
   
      else if(radioOtmostkaUsilennaya.checked === true){
       
       tipotmostkif = 3190;  
       vibranniyTipOtmostkiText = "Усиленная - 3 190 руб./кв.м.";
       
   } 
   
         else if(radioOtmostkaCapitalnaya.checked === true){
       
       tipotmostkif = 3190;
       vibranniyTipOtmostkiText = "Капитальная бетонная - 3 590 руб./кв.м.";
       
   } 
   
   
         else if(radioOtmostkaTipNevibran.checked === true){
       
       tipotmostkif = 0;
       vibranniyTipOtmostkiText = "Значение не выбрано.";
       
   } 
   
   
   
   
   
         if(chekmat.checked == true) {
       
        tipotmostkif = 1500;
        checkmaterials = "Стоимость материалов не включена.";
   } 
  
         if(chekmat.checked == false){
      
           checkmaterials = "Стоимость материалов включена.";
      }
 
   var shirinaotsm = shirinaot < 100 ? 100/100 : shirinaot/100;
   
   
   var quarterotm = perimetrot * shirinaotsm + koluglovot;
  
   var finalsumot = quarterotm * tipotmostkif;  
   
   
   
 
    // Валидация значений
  if (!validateValues()) {
    document.getElementById('stoimostotm').innerHTML = "Стоимость равна: "+ new Intl.NumberFormat('ru-RU').format(finalsumot) +" руб."; 
  } 
  
   
  
   
              
        
// Значения для формы отправки
      
       





document.getElementById("perimetrfield").value = perimetrot;
document.getElementById("shirinafield").value = shirinaot;
document.getElementById("uglovfield").value = koluglovot;
document.getElementById("tipotmostkifield").value = vibranniyTipOtmostkiText;
document.getElementById("materialfield").value = checkmaterials;
document.getElementById("stoimostotmfield").value = new Intl.NumberFormat('ru-RU').format(finalsumot);


         
     }     
     
     
     
     
     
     


//-------------------------Калькулятор бетонной площадки под авто------------------------------
 
 
 
 
 
 
  function raschitat_ploshadka2(){
         
         
   var dlinapl2;
   var shirpl2;
   var finalsumpl2;
      

var checkbkamenpl2f;
var cheknomatpl2f;
   
   var tippl2f;
   
   var pogonmpl2;
   
   //======================================
         
         
         
        
   
   
   
      
   dlinapl2 = parseInt(document.getElementById('dlinapl2').value);
   shirpl2 = parseInt(document.getElementById('shirpl2').value);
   var tippl2 = document.getElementById("select-tip-pl2").options.selectedIndex;
        
 
   
   
   
   
   var chekbkam2 = document.getElementById("bkamen");
   var cheknomat = document.getElementById("stoimost-nomat");
   
    
   
   
  
   
   if(tippl2 == 0){
       
       tippl2f = 0;
       
   } 
   else if(tippl2 == 1){
      tippl2f = 2690; 
   }
   else if(tippl2 == 2){
      tippl2f = 2990; 
   }
   else if(tippl2 == 3){
      tippl2f = 3590; 
   }
   else if(tippl2 == 4){
      tippl2f = 3890; 
   }
   
         if(cheknomat.checked == true) {
       
        tippl2f = 1500;
        cheknomatpl2f = "В стоимость не входят материалы.";
        
   } 
  
         if(cheknomat.checked == false){
      
           cheknomatpl2f = "Материалы включены в стоимость.";
      }
 
 pogonmpl2 =  dlinapl2 * 2 + shirpl2 * 2; 
 
 
   if(chekbkam2.checked == true) {
       
        finalsumpl2 = dlinapl2 * shirpl2 * tippl2f + pogonmpl2 * 700;
        checkbkamenpl2f = "Нужно делать. Услуга в стоимость включена.";
        
   } else {
       
       finalsumpl2 = dlinapl2 * shirpl2 * tippl2f;
       checkbkamenpl2f = "Не нужно.";
   }
   
   
  
     
   
   
   
 
   
  
   
  document.getElementById('stoimostpl2').innerHTML = "Стоимость равна: "+ new Intl.NumberFormat('ru-RU').format(finalsumpl2) +" руб."; 
   
             
        

      
       

var tippl2 = document.getElementById("select-tip-pl2");

var seltippl2 = tippl2.options[tippl2.selectedIndex].text;

document.getElementById("tippl2field").value = seltippl2;
document.getElementById("dlinapl2field").value = dlinapl2;
document.getElementById("shirinapl2field").value = shirpl2;
document.getElementById("shirinapl2field").value = shirpl2;
document.getElementById("materialfield").value = cheknomatpl2f;
document.getElementById("kamenpl2field").value = checkbkamenpl2f;
document.getElementById("stoimostpl2field").value = new Intl.NumberFormat('ru-RU').format(finalsumpl2);

      
     }    
 
     
     
     




  







