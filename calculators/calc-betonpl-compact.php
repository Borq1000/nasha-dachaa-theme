

<div class="calc-compact-container">
    <span id="pl2-calculator"></span>


    <div class="h2">Расчитать стоимость бетонной площадки</div>


        <div class="row row-calc-compact" style="padding-bottom: 0px;">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <fieldset class="fieldset-ploshadka-bt">
                    <legend class="calc-block-razmeri-legend">Размеры</legend>
                    <div class="form-group">


                        <input type="text" class="form-control" id="dlinapl2" placeholder="Длина, м.">
                        <p id="dlinapl2-error"></p>
                    </div>


                    <div class="form-group">


                        <input type="text" class="form-control" id="shirpl2" placeholder="Ширина, м">
                        <p id="shirinapl2-error"></p>
                    </div>

                </fieldset>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <fieldset class="fieldset-ploshadka-bt">
                    <legend class="calc-block-razmeri-legend">Тип исполнения</legend>
                    <div class="form-group">

                        <select class="form-control" id="select-tip-pl2">
                            <option value="0">Выберите тип площадки...</option>
                            <option value="1">Площадка под легковые и коммерческие автомобили</option>
                            <option value="2">Площадка под легкий грузовой транспорт (Газель, ЗИЛ и т д.)</option>
                            <option value="3">Площадка под грузовой транспорт г/п до 15 тонн</option>
                            <option value="4">Площадка под грузовой транспорт г/п до 22 тонн</option>


                        </select>
                        <p id="tippl-error"></p>
                    </div>


                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="bkamen"> Работа по установке бордюрного камня
                        </label>
                    </div>



                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="stoimost-nomat">  Стоимость работ без материалов

                        </label>
                    </div>

                </fieldset>

            </div>


            </div>
    
    <div class="row" style="margin-bottom: 30px">
        
        <div class="cal-text-raschet">
                            Расчет стоимости на калькуляторе имеет усредненные данные. Точный расчет следует проводить на основе индивидуальных расчетов. Важно: необходимо уточнить у менеджера минимальную стоимость работ и возможные скидки.
        </div>
        
                <div class="form-group">
                    <button class="button-59" onclick="raschitat_ploshadka2();">Рассчитать стоимость</button>

                    <button class="knopka-zakazat-calculator" data-toggle="modal" data-target="#ploshadka2Modal">Заказать</button>
                </div>


                <div id="stoimostpl2" class="stoimost-final"></div>
    </div>


    <!----------------------------Калькулятор конец---------------------------------------->



    <!-- Modal -->
    <div class="modal fade" id="ploshadka2Modal" tabindex="-1" role="dialog" aria-labelledby="ploshadka2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Оставьте свои данные, и мы свяжемся с вами в ближайшее время</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form  method="post" action="https://nasha-dachaa.ru/kalkulyator-ploshhadki-pod-avto-otpravlenno/" id="form-pl2">
                        <input type="hidden" type="text" id="dlinapl2field" name="dlinapl2field"/>
                        <input type="hidden" type="text" id="shirinapl2field" name="shirinapl2field"/>
                        <input type="hidden" type="text" id="tippl2field" name="tippl2field"/>
                        <input type="hidden" type="text" id="kamenpl2field" name="kamenpl2field"/>
                        <input type="hidden" type="text" id="materialfield" name="materialfield"/>
                        <input type="hidden" type="text" id="stoimostpl2field" name="stoimostpl2field"/>

                        <div class="form-group">
                            <label>Ваше имя</label>
                            <input type="text" class="form-control" id="client-name" name="client-name">
                        </div>
                        <div class="form-group">
                            <label>Ваш телефон</label>
                            <input type="text" class="form-control" id="client-phone" name="client-phone">
                        </div>


                        <button type="submit" class="btn btn-default">Отправить</button>
                    </form>




                </div>

            </div>
        </div>
    </div>






  </div>

