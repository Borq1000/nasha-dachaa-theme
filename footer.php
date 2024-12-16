</main>

<footer class="footer-bs">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-brand">
                <img src="/wp-content/uploads/2021/11/nd-logo-new.png" alt="Наша дача" class="footer-logo">
                <hr class="footer-divider">
                
                <div class="footer-contact-info">
                    <div itemscope itemtype="http://schema.org/Organization">
                        <p class="footer-company">
                            <span class="circle-icon"><i class="fas fa-globe"></i></span>
                            <span itemprop="name" class="footer-company-name">Наша дача</span>
                        </p>

                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <p class="footer-address">
                                <span class="circle-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span itemprop="addressLocality">Москва</span>,
                                <span itemprop="streetAddress">Дорожная ул., 21а</span>
                            </p>
                        </div>

                        <p class="footer-email">
                            <span class="circle-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </span>
                            <a href="mailto:nasha-dachaa@yandex.ru" class="footer-link">
                                <span itemprop="email">nasha-dachaa@yandex.ru</span>
                            </a>
                        </p>

                        <div class="footer-phones">
                            <p class="footer-phone">
                                <span class="circle-icon">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <span itemprop="telephone">+7 (977) 807-59-87</span>
                            </p>
                            <p class="footer-phone">
                                <span class="circle-icon">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <span itemprop="telephone">+7 (495) 227-67-27</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="footer-buttons">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="" class="btn callback-btn sg-popup-id-4027">Заказать звонок</a>
                        </div>
                        <div class="col-md-6">
                            <div class="messenger-btn">
                                <a href="https://wa.me/79778075987" class="whatsapp-link">
                                    <span class="whatsapp-text">WhatsApp</span>
                                    <i class="whatsapp-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 footer-nav">
                <h3 class="footer-title">Услуги</h3>
                <ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <li><a itemprop="url" href="/drenazh-uchastka-pod-kljuch/">Дренаж участка и ливнёвка</a></li>
                    <li><a itemprop="url" href="/uborka-i-raschistka-uchastka/">Уборка и расчистка участка</a></li>
                    <li><a itemprop="url" href="/landshaftnye-raboty/">Ландшафтные работы</a></li>
                </ul>
            </div>

            <div class="col-md-4 footer-nav">
                <h3 class="footer-title">Информация</h3>
                <ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <li><a itemprop="url" href="/o-nas/">О нас</a></li>
                    <li><a itemprop="url" href="/portfolio/">Примеры работ</a></li>
                    <li><a itemprop="url" href="/articles/">Полезные статьи</a></li>
                    <li><a itemprop="url" href="/kontakty/">Контакты</a></li>
                    <li><a itemprop="url" href="/payment/" class="payment-link">Оплата услуг</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div style="background: #f7f7f7;text-align:center; border-top:1px solid #dedede;color:#444;width: 100%;position: relative;bottom: 0px;padding: 10px 0 10px 0;">
    <p style="margin: 0 0 0px;font-size: 14px;">Разработка сайта <a href="https://alseo.ru/" style="color:#444;">alseo.ru</a></p>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/custom.js"></script>

<script>
//Этот код устанавливает значение скрытого поля "page-title" равным названию
//текущей страницы, когда страница загружается.    
document.addEventListener('DOMContentLoaded', function() {
    var pageTitleElement = document.getElementsByTagName('h1')[0];
    var pageTitle = pageTitleElement ? pageTitleElement.innerText : '';
    var hiddenField = document.querySelector('[name="page-title"]');

    if (hiddenField) {
        hiddenField.value = pageTitle;
    }
});

</script>

<script>
    
    function showAlert() {
  let customAlert = document.getElementById("customAlert");
  customAlert.style.display = "block";

  setTimeout(function() {
    customAlert.style.display = "none";
  }, 2000);
}
    
    let zaezdModal = document.getElementById('zaezdModal');
  document.querySelector("#form-zaezd").addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("https://nasha-dachaa.ru/mail-zaezd/", {
        method: "POST",
        body: formData,
        headers: {
            "Accept": "application/json"
        },
    })
    .then((response) => {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error("Ошибка отправки формы");
        }
    })
    .then((result) => {
        showAlert();
        zaezdModal.style.display = "none"; // Скрытие модального окна
         // Удаление затемненного фона
    let backdrop = document.querySelector(".modal-backdrop");
    if (backdrop) {
        document.body.removeChild(backdrop);
    }
    //Важно
    document.body.classList.remove('modal-open');
    
    })
    .catch((error) => {
        alert("Произошла ошибка при отправке формы: " + error.message);
    });
});

</script>

<script>
    
 function add_favorite(a) {
  title=document.title;
  url=document.location;
  try {
    // Internet Explorer
    eval("window.external.AddFa-vorite(url, title)".replace(/-/g,''));
  }
  catch (e) {
    try {
      // Mozilla
      window.sidebar.addPanel(title, url, "");
    }
    catch (e) {
      // Opera
      if (typeof(opera)=="object") {
        a.rel="sidebar";
        a.title=title;
        a.url=url;
        return true;
      }
      else {
        // Остальные браузеры
        alert('Нажмите Ctrl + D, чтобы добавить страницу в закладки');
      }
    }
  }
  return false;
}



    
     function capitalizeWord(word){
                       
                        let wordUpper;
                            
                       wordUpper = word.replace(word[0], word[0].toUpperCase());
                        return wordUpper;
                    }
                    
                   
                    
                  document.getElementById('capitalize-word').textContent = capitalizeWord(document.getElementById('capitalize-word').textContent);

    // Scroll to top
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
        //Click event to scroll to top
        $('.scrollToTop').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
    });





    $(document).ready(function () {
        $('.button-17').on('click', function () {
            var text = $('.button-17').text();
            if (text === "Посмотреть наши работы") {
                $(this).html('Закрыть');
            } else {
                $(this).text('Посмотреть наши работы');
            }


//            event.preventDefault();
//
//            var n = $(document).height();
//            $('html, body').animate({scrollTop: n}, 50);



        });
    });
</script>

<script>
    $('#mega-menu-primary').attr('itemscope', '');
    $('#mega-menu-primary').attr('itemtype', 'http://schema.org/SiteNavigationElement');
    $('#mega-menu-primary li a').attr('itemprop', 'url');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(94844621, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94844621" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>
