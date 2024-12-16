function validateValues(elementId, dlina, shirina, material, ogolovki = "Ничего не выбрано.", pipe, finalSum, isMaterialBetonChecked){
    // Очистка предыдущих ошибок
  document.getElementById('stoimostzaezd').innerHTML = '';
  
  
    if ( !dlina || !shirina) {
      document.getElementById('stoimostzaezd').insertAdjacentHTML('beforeend', '<div class="calc-error">Ошибка: длина и/или ширина заезда пустые или не являются числами.</div>');
      document.querySelector('.knopka-zakazat-calculator').style.display ="none";
    }
      
      // Проверка типа материала
  if (!material) {
     document.getElementById('stoimostzaezd').insertAdjacentHTML('beforeend', '<div class="calc-error">Ошибка: необходимо выбрать тип материала.</div>');
     document.querySelector('.knopka-zakazat-calculator').style.display ="none";
  }
  
    // Проверка типа трубы
  if (!pipe) {
    document.getElementById('stoimostzaezd').insertAdjacentHTML('beforeend', '<div class="calc-error">Ошибка: не выбран тип трубы.</div>');
   document.querySelector('.knopka-zakazat-calculator').style.display ="none";
  }
      
if(dlina && shirina && material && pipe){
    if(isMaterialBetonChecked) {
        document.getElementById(elementId).innerHTML = "Стоимость равна: " + new Intl.NumberFormat('ru-RU').format(finalSum+2000) + " руб.";
 document.querySelector('.knopka-zakazat-calculator').style.display ="inline-block";
    } else {
        document.getElementById(elementId).innerHTML = "Стоимость равна: " + new Intl.NumberFormat('ru-RU').format(finalSum) + " руб.";
 document.querySelector('.knopka-zakazat-calculator').style.display ="inline-block";
    }
 
}
    
}

// Функция для расчета стоимости заезда на территорию
function raschitat_zaezd1() {
    
    
  
    // Получаем длину и ширину заезда из элементов формы и преобразуем в число
  let dlinaZd = parseFloat(document.getElementById("heightZaezdRange").value);
  let shirZd = parseFloat(document.getElementById("widthZaezdRange").value);

  // Получаем элементы для выбора материала, оголовков и труб
  let checkMaterialSheben = document.getElementById("sheben-mat");
  let checkMaterialBeton = document.getElementById("beton-mat");
  
  
  
  let materialNum = 3;
  
  let isMaterialBetonChecked = false;  
  let checkMaterialNo = document.getElementById("material-novalue");
  let marerialChoosed = false;
  
  let radioBetonM = document.getElementById("betonnie-ogolovki");
  let radioWoodM = document.getElementById("wood-ogolovki");
  let radioShiferM = document.getElementById("shif-ogolovki");
  let radioGeoM = document.getElementById("georeshetka");
  let radioNoOgolovka = document.getElementById("noOgolovok");
  
  let radioTrubaSn215 = document.getElementById("truba-sn8-215");
  let radioTrubaSn315 = document.getElementById("truba-sn8-315");
  let radioTrubaJB = document.getElementById("truba-jb-300");
  let radioTrubaNeVibrana = document.getElementById("truba-ne-vibrana");
  
  //Технические названия труб
  let sn8Diametr215 = "SN-8 диаметр 215мм";
  let sn8Diametr315 = "SN-8 диаметр 315мм";
  let trubaJb = "Труба ЖБ диаметр 300-400мм";
  let trubaNeVibrana = "Труба не выбрана при расчете. Нужно уточнить у клиента.";
  
  //Фиксирует выбран ли тип трубы. По умолчанию - true. Значит труба не выбрана
  let pipeChoosed = false;
  
   let tipTrubaZdF;
  let tipTrubaVal;

  // Определяем тип и стоимость материала в зависимости от выбора пользователя
    if(checkMaterialSheben.checked){
      tipMaterialF = 1600;
      tipMatVal = "Щебень";
      materialNum = 1;
      marerialChoosed = true;
  }
 

  if(checkMaterialBeton.checked){
      tipMaterialF = 4600;
      tipMatVal = "Бетон";
      materialNum = 2;
      marerialChoosed = true;
   
     
      tipTrubaZdF = 11000;
      
      checkMaterialBeton.addEventListener("click", function() {
  radioBetonM.checked = this.checked;
   isMaterialBetonChecked = true;
});
     
  }
  if(checkMaterialNo.checked){
      tipMaterialF = 0;
      tipMatVal = "Не выбрано";
      materialNum = 3;
      marerialChoosed = false;
  }
  

  
  


  // Определяем тип и стоимость трубы в зависимости от выбора пользователя
 
  if (radioTrubaSn215.checked) {
    tipTrubaZdF = 3700;
    tipTrubaVal = sn8Diametr215 + ", - 3700 руб.";
    pipeChoosed = true;
  } 
  if(radioTrubaSn315.checked){
      tipTrubaZdF = 4000;
      tipTrubaVal = sn8Diametr315 + ", - 4000 руб.";
      pipeChoosed = true;
  }
  if(radioTrubaJB.checked){
      tipTrubaZdF = 9600;
      tipTrubaVal = trubaJb + ", - 9600 руб.";
      pipeChoosed = true;
  }
  if(radioTrubaNeVibrana.checked) {
    tipTrubaZdF = 0;
    tipTrubaVal = trubaNeVibrana + ", - ";
    pipeChoosed = false;
  }

  // Вычисляем начальную стоимость заезда
  let finalsumZd = dlinaZd * shirZd * tipMaterialF + shirZd * tipTrubaZdF;
  let ogolovkiVal;

  // Учитываем стоимость оголовков в зависимости от выбора пользователя
  if (radioBetonM.checked) {
    finalsumZd += 22000;
    ogolovkiVal = "Бетонные оголовки + 18000 руб.";
  } else if (radioWoodM.checked) {
    finalsumZd += 4000;
    ogolovkiVal = "Деревянные оголовки + 4000 руб.";
  } else if (radioShiferM.checked) {
  finalsumZd += 10000;
  ogolovkiVal = "Шиферные оголовки - 10 000 руб.";
} else if (radioGeoM.checked) {
  finalsumZd += 5000;
  ogolovkiVal = "Георешетка - 5000 руб.";
} else {
  ogolovkiVal = "Ничего не выбрано.";
}

//ззззззззззззззззззззззззззззззззззззз
if(checkMaterialBeton.checked) {
   
    radioBetonM.checked = true;
    radioTrubaSn315.checked = true;
    pipeChoosed = true;
    tipTrubaZdF = 14000;
    isMaterialBetonChecked = true;
    
}



// Выводим общую стоимость заезда на страницу
validateValues('stoimostzaezd', dlinaZd, shirZd, marerialChoosed, ogolovkiVal, pipeChoosed,finalsumZd, isMaterialBetonChecked);



// Записываем данные в соответствующие поля формы
document.getElementById("dlinazdfield").value = dlinaZd;
document.getElementById("shirinazdfield").value = shirZd;
document.getElementById("quartermfield").value = dlinaZd * shirZd;
document.getElementById("materialfield").value = tipMatVal;

if(materialNum === 2) {
    tipTrubaVal = tipTrubaVal.split(',')[0] + " - Стоимость трубы 11 000 рублей.";
}
document.getElementById("tiptrubafield").value = tipTrubaVal;
document.getElementById("ogolovkifield").value = ogolovkiVal;
document.getElementById("stoimostzdfield").value = new Intl.NumberFormat('ru-RU').format(finalsumZd);
}