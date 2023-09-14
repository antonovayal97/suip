/*!***************************************************
 * yatranslate.js v1.0.0
 * author: Vitalii P.
 *****************************************************/

const yatranslate = {
    /* Original language */
    lang: "ru",
    /* The language we translate into on the first visit */
    /* Язык, на который переводим при первом посещении */
    // langFirstVisit: 'en',
};
let yaln
document.addEventListener('DOMContentLoaded', function () {
    // Start
    if(localStorage["yt-widget"])
    {
        yaln = JSON.parse(localStorage["yt-widget"]).lang
    }
    else
    {
        yaln = "ru"  
    }

//let btn = document.querySelector("#investProjBtn");
//if(btn != undefined)
//{
//if(yaln == "ru")
//{
//btn.href = "/investment-projects/ru/"
//}
//else
//{
//btn.href = "/investment-projects/en/"
//}

//}

let lang_btns = document.querySelectorAll('.lang__link_sub')
lang_btns.forEach((item) => {
    if(item.dataset.yaLang == yaln)
    {
        item.style = "background-color: #858585;color: #f9f9f9;";
    }
})
    yaTranslateInit();
})



function yaTranslateInit() {

    if (yatranslate.langFirstVisit && !localStorage.getItem('yt-widget')) {
        /* Если установлен язык перевода для первого посещения и в localStorage нет yt-widget */
        /* If the translation language is installed for the first visit and in localStorage no yt-widget */
        yaTranslateSetLang(yatranslate.langFirstVisit);
    }

    // Подключаем виджет yandex translate
    // Connecting the yandex translate widget
    let script = document.createElement('script');
    script.src = `https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=${yatranslate.lang}&widgetTheme=light&autoMode=false`;
    document.getElementsByTagName('head')[0].appendChild(script);

    // Получаем и записываем язык на который переводим
    // We get and write down the language into which we translate
    let code = yaTranslateGetCode();

    // Показываем текущий язык в меню
    // Show the current language in the menu
    //yaTranslateHtmlHandler(code);

    // Вешаем событие клик на флаги
    // We hang the event click on the flags
    yaTranslateEventHandler('click', '[data-ya-lang]', function (el) {
        yaTranslateSetLang(el.getAttribute('data-ya-lang'));
        // Перезагружаем страницу
        // Reloading the page
        window.location.reload();
    })
}

function yaTranslateSetLang(lang) {
    // Записываем выбранный язык в localStorage объект yt-widget 
    // Writing the selected language to localStorage 
    localStorage.setItem('yt-widget', JSON.stringify({
        "lang": lang,
        "active": true
    }));
}

function yaTranslateGetCode() {
    // Возвращаем язык на который переводим
    // Returning the language to which we are translating
    return (localStorage["yt-widget"] != undefined && JSON.parse(localStorage["yt-widget"]).lang != undefined) ? JSON.parse(localStorage["yt-widget"]).lang : yatranslate.lang;
}

// function yaTranslateHtmlHandler(code) {
//     // Получаем язык на который переводим и производим необходимые манипуляции с DOM
//     // We get the language to which we translate and produce the necessary manipulations with DOM 
//    // document.querySelector('[data-lang-active]').innerHTML = `RU<`;
//     document.querySelector(`[data-ya-lang="${code}"]`).remove();
// }

function yaTranslateEventHandler(event, selector, handler) {
    document.addEventListener(event, function (e) {
        let el = e.target.closest(selector);
        if (el) handler(el);
    });
}