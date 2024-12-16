
<div class="container">


    <span id="otmostka-calculator"></span>

    <!-------------------------Калькулятор начало------------------------------------------->


    <div class="h2">Калькулятор расчёта стоимости отмостки вокруг дома</div>




    <div class="calc-wraper">


        <div class="row" style="margin-top:30px">


            <div class="col-md-6">
                <fieldset>
                    <legend class="calc-block-razmeri-legend">Размеры</legend>
                    <div class="form-group">


                        <input type="text" class="form-control" id="perimetrot" placeholder="Периметр дома, м">
                        <p id="perimetrot-error"></p>
                    </div>



                    <div class="form-group">


                        <input type="text" class="form-control" id="shirinaot" placeholder="Ширина отмостки, см">
                        <p id="shirinaot-error"></p>
                    </div>



                    <div class="form-group">


                        <input type="text" class="form-control" id="qtuglovot" placeholder="Количество внешних углов дома, шт.">
                        <p id="perimetrot-error"></p>
                    </div>


                </fieldset>
            </div>

            <div class="col-md-6">

                <fieldset>
                    <legend class="calc-block-razmeri-legend">Тип отмостки</legend>


                    <div class="radio">
                        <label>
                            <input type="radio" name="diametr-trubi" id="otm-ekonom" value="otm-ekonom">
                            <span class="checkmark"></span>
                            Эконом - 2 390 руб./кв.м.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="diametr-trubi" id="otm-standart" value="otm-standart">
                            <span class="checkmark"></span>
                            Стандарт - 2 590 руб./кв.м.
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="diametr-trubi" id="otm-usilennaya" value="otm-usilennaya">
                            <span class="checkmark"></span>
                            Усиленная - 3 190 руб./кв.м.
                        </label>
                    </div>


                    <div class="radio">
                        <label>
                            <input type="radio" name="diametr-trubi" id="otmostka-kapitalnaya" value="otmostka-kapitalnaya">
                            <span class="checkmark"></span>
                            Капитальная бетонная - 3 590 руб./кв.м.
                        </label>
                    </div>


                    <div class="radio">
                        <label>
                            <input type="radio" name="diametr-trubi" id="otmtip-ne-vibran" value="otmtip-ne-vibran" checked>
                            <span style="color:#ddd !important">Значение не выбрано</span>
                        </label>
                    </div>


                    <!--------------------------------------------------------------------->




                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="no-material"> Стоимость работ без материалов
                        </label>
                    </div>
                </fieldset>
            </div>





            <div class="col-md-12">

                <p style="padding:7px;border: 1px solid #E05613;background: #FCFBFB;border-radius: 4px;">
                    Расчет стоимости на калькуляторе имеет усредненные данные. Точный расчет следует проводить на основе индивидуальных расчетов. Важно: необходимо уточнить у менеджера минимальную стоимость работ и возможные скидки.
                </p>


                <div class="form-group">
                    <button class="button-59" onclick="raschitat_otmostka();">Рассчитать стоимость</button>

                    <button class="knopka-zakazat-calculator" data-toggle="modal" data-target="#otmostkaModal">Заказать</button>
                </div>


                <div id="stoimostotm" class="stoimost-final"></div>



            </div>


        </div>

    </div>  <!----------------calc-wraper div end--------------------->




    <!----------------------------Калькулятор конец---------------------------------------->



    <!-- Modal -->
    <div class="modal fade" id="otmostkaModal" tabindex="-1" role="dialog" aria-labelledby="otmostkaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Оставьте свои данные, и мы свяжемся с вами в ближайшее время</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form  method="post" action="https://nasha-dachaa.ru/raschet-otmostki-soobshhenie-otpravleno/" id="form-otmostka">
                        <input type="hidden" type="text" id="perimetrfield" name="perimetrfield"/>
                        <input type="hidden" type="text" id="shirinafield" name="shirinafield"/>
                        <input type="hidden" type="text" id="uglovfield" name="uglovfield"/>
                        <input type="hidden" type="text" id="tipotmostkifield" name="tipotmostkifield"/>
                        <input type="hidden" type="text" id="materialfield" name="materialfield"/>
                        <input type="hidden" type="text" id="stoimostotmfield" name="stoimostotmfield"/>

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

