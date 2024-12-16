<style>
    .knopka-zakazat-calculator {
        display: none;
    }
</style>

<div class="calc-compact-container">


    <div class="h2">Расчитать стоимость заезда</div>

    <!-------------------------Калькулятор начало------------------------------------------->
      <div class="row row-calc-compact">
            <span id="calculator-zaezd-marker"></span>
            
            <div class="col-md-2 col-xs-6">
                <div class="qt-inner">
                    <img src="/wp-content/uploads/2023/04/zaezdcalc-prm.png" class="img-responsive img-razmeri-zaezda">
                </div>
            </div>
                    <!-----------------------------------блок размеры-------------------------------------------------->
                   <div class="col-md-2 col-xs-6">

                        <div class="qt-inner" id="razmer-zaezda-block">
                            <fieldset class="fieldset-zaezd-razmeri">

                                <legend class="calc-block-razmeri-legend">Размеры заезда</legend>

                                <div class="live-measure-info" style="display: none"> <label>Ширина, м</label> -
                                    <span id="width-zaezd-value"></span> м.</div>
                                <div class="live-measure-info" style="display: none"><label>Длина, м</label> -
                                    <span id="height-zaezd-value"></span> м. </div>

                                <div class="form-group">
                                    <span>Ширина заезда / м.</span><br>
                                    <input type="text" placeholder="Введите ширину" name="shirina-zaezda" class="form-control" id="widthZaezdRange">
                                </div>
                                <div class="form-group">
                                    <span>Длина заезда / м.</span><br>
                                    <input type="text" placeholder="Введите длину" name="dlina-zaezda" class="form-control" id="heightZaezdRange">
                                </div>

                              <h5 id="quarter-zaezd"></h5>

                            </fieldset>

                        </div>
 </div>

                    <!-----------------------------------блок размеры end-------------------------------------------------->

                    <div class="col-md-2 col-xs-6">
                        <fieldset>
                            <legend class="calc-block-razmeri-legend">Материалы</legend>
                          <div class="radio">
                                <label>
                                    <input name="matzaezd" type="radio" id="sheben-mat" value="sheben">

                                    Щебень
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="matzaezd" type="radio" id="beton-mat" value="beton">
 Бетон
                                </label>
                            </div>
                            <script>
document.getElementById("beton-mat").addEventListener("click", function() {
  document.getElementById("betonnie-ogolovki").checked = true;
  document.getElementById("truba-sn8-315").checked = true;
  
});
</script>

                            <div class="radio">
                                <label>
                                    <input name="matzaezd" type="radio" id="material-novalue" value="zaezd-nevybrano" checked>

                                    <span class="nothing-choosed">Значение не выбранно</span>
                                </label>
                            </div>
                        </fieldset>
                    </div>
  <!-------------------------------------------------------------------------------------------------------------------------->
                    <div class="col-md-3 col-xs-6">
                        <fieldset>
                            <legend class="calc-block-razmeri-legend" style="margin-left: 12px;">Оголовки</legend>
                            <div class="qt-inner">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ogolovki" id="betonnie-ogolovki" value="btog">
                                        <span class="checkmark"></span>
                                        Бетонные оголовки + 22 000 руб.
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ogolovki" id="wood-ogolovki" value="wog">
                                        Деревянные оголовки + 4 000 руб.
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ogolovki" id="shif-ogolovki" value="shog">
                                        Шиферные оголовки - 10 000 руб.
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ogolovki" id="georeshetka" value="geor">
                                        Георешетка - 5000 руб.
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ogolovki" id="noOgolovok" value="nond" checked>
                                        <span class="nothing-choosed">Значение не выбрано</span>
                                    </label>
                                </div>

                            </div>

                        </fieldset>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <fieldset>
                            <legend class="calc-block-razmeri-legend">Тип трубы</legend>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="diametr-trubi" id="truba-sn8-215" value="sn-88-215">
                                    <span class="checkmark"></span>
                                    SN-8 диаметр 215мм
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="diametr-trubi" id="truba-sn8-315" value="sn-88-315">
                                    <span class="checkmark"></span>
                                    SN-8 диаметр 315мм
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="diametr-trubi" id="truba-jb-300" value="jb-truba-over-300">
                                    <span class="checkmark"></span>
                                    Труба ЖБ диаметр 300-400мм
                                </label>
                            </div>
                             <div class="radio">
                                <label>
                                    <input type="radio" name="diametr-trubi" id="truba-ne-vibrana" value="trubanov" checked>
                                    <span class="nothing-choosed">Значение не выбрано</span>
                                </label>
                            </div>
</fieldset>
                    </div>






      </div>

    <div class="row" style="margin-bottom: 30px;">
         <div class="cal-text-raschet">
                            Расчет стоимости на калькуляторе имеет усредненные данные. Точный расчет следует проводить на основе индивидуальных расчетов. Важно: необходимо уточнить у менеджера минимальную стоимость работ и возможные скидки.
        </div>


          <div class="form-group">
                    <button class="button-59" onclick="raschitat_zaezd1();">Рассчитать стоимость</button>

                    <button class="knopka-zakazat-calculator" data-toggle="modal" data-target="#zaezdModal">Заказать</button>
                </div>


                <div id="stoimostzaezd" class="stoimost-final"></div>
    </div>



   <!------------------форма отправки данных------------------------------------>





    <!-- Modal -->
    <div class="modal fade modal-calculatorInfo-form" id="zaezdModal" tabindex="-1" role="dialog" aria-labelledby="zaezdModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="close modal-calculatorInfo-form__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-calculatorInfo-form__title">Заполните форму для отправки выбранных параметров заезда</div>
                    <div class="modal-calculatorInfo-form__subtitle" id="zaezdModalLabel">Оставьте свои данные, и мы свяжемся с вами в ближайшее время</div>
                    

                    <form  method="post" action="https://nasha-dachaa.ru/mail-zaezd/" class="calculatorInfo-form" id="form-zaezd">
                        <input type="hidden" type="text" id="dlinazdfield" name="dlinazdfield"/>
                        <input type="hidden" type="text" id="shirinazdfield" name="shirinazdfield"/>
                        <input type="hidden" type="text" id="quartermfield" name="quartermfield"/>
                        <input type="hidden" type="text" id="materialfield" name="materialfield"/>
                        <input type="hidden" type="text" id="tiptrubafield" name="tiptrubafield"/>
                        <input type="hidden" type="text" id="ogolovkifield" name="ogolovkifield"/>

                        <input type="hidden" type="text" id="stoimostzdfield" name="stoimostzdfield"/>

                        <div class="form-group">
                            
                            <input type="text" placeholder="Ваше имя" class="form-control" id="client-name" name="client-name">
                        </div>
                        <div class="form-group">
                           
                            <input type="text" placeholder="Ваш телефон" class="form-control" id="client-phone" name="client-phone">
                        </div>


                        <button type="submit" class="btn btn-default calculatorInfo-form__btn">Отправить</button>
                    </form>

                </div>

            </div>
        </div>
    </div>



    
<div id="customAlert" class="custom-alert">
  <div class="custom-alert-content">
    <p>Спасибо за обращение к нам! В ближайшее время наш менаджер свяжется с вами.</p>
  </div>
</div>




 <!--------------------------------------------------------------->



                <!------------------------------------------------------------------->
                <script>
                   // Получаем Ширину
let widthZaezdSlider = document.getElementById("widthZaezdRange");
let output = document.getElementById("width-zaezd-value");
output.textContent = widthZaezdSlider.value;

widthZaezdSlider.oninput = function () {
    output.textContent = this.value;
    let quarter = widthZaezdSlider.value * heightZaezdSlider.value;
    document.getElementById('quarter-zaezd').innerHTML = "<strong class='highlight-text'>Квадрат: </strong>" + quarter + "&#13217;";
};

// Получаем Длину
let heightZaezdSlider = document.getElementById("heightZaezdRange");
let outputHeight = document.getElementById("height-zaezd-value");
outputHeight.textContent = heightZaezdSlider.value;

//Считаем квадрат и отображаем его
heightZaezdSlider.oninput = function () {
    outputHeight.textContent = this.value;
    let quarter = widthZaezdSlider.value * heightZaezdSlider.value;
    document.getElementById('quarter-zaezd').innerHTML = "<strong class='highlight-text'>Квадрат: </strong>" + quarter + "&#13217;";
};

let zaezdForm = document.getElementById('form-zaezd');

zaezdForm.onsubmit = function () {
    setTimeout(() => zaezdForm.reset(), 1000);
};






                </script>


    </div>

    <!----------------------------Калькулятор конец---------------------------------------->





